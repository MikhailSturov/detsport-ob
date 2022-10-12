<?php
/*
Template Name: Руководство. Педагогический состав.
*/
?>
<?php get_header('about'); ?>

<main class="page-main page-main--page">
    <div class="page-main__wrapper page-main__wrapper--page">
      <div class="side-nav side-nav--nojs">
        <button class="side-nav__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
      <div class="side-nav__wrapper">
        <h3 class="side-nav__item--current">Навигация</h3>
        <?php wp_nav_menu(array(
          'theme_location' => 'side',
          'container' => null,
          'menu_class' => 'side-nav__list',
          'menu_id' => ' '
        ));?>
      </div>
    </div>
        <div class="page__wrapper page__wrapper--inner">

            <section class="administration">
                <h3 class="administration__title">Руководство</h3>
                <div class="administration__wrapper">
                    <ul class="administration__list">
                        <?php
                            $administrations_arr = get_field('administrations'); 
                            foreach($administrations_arr as $administration_id):
                            $image_arr = get_field('administrator_photo', $administration_id);
                            $image_url = $image_arr['url'];
                        ?>
                        <li class="administration__item">
                            <img class="administration__img" src="<?php echo $image_url; ?>">
                            <div itemprop="rucovodstvozam">
                            <p class="administration__name" itemprop="fio"><?php the_field('administrator_fio', $administration_id); ?></p>
                            <p class="administration__paragraph" itemprop="post"><span>Должность - </span><?php the_field('administrator_post', $administration_id); ?></p>
                            <p class="administration__paragraph" itemprop="telephone"><span>Тел.: </span><?php the_field('administrator_phone', $administration_id); ?></p>
                            <p class="administration__paragraph" itemprop="email"><span>E-mail: </span><?php the_field('administrator_email', $administration_id); ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

            <section class="teacher">
                <h3 class="teacher__title">Педагогический состав</h3>
                <div class="teacher__wrapper">
                    <ul class="teacher__list">
                        <?php
                            $teachers_arr = get_field('teachers'); 
                            foreach($teachers_arr as $teacher_id):
                            $image_arr = get_field('teacher_photo', $teacher_id);
                            $image_url = $image_arr['url'];
                        ?>
                        <li class="teacher__item" itemprop="teachingStaff">
                            <img class="teacher__img" src="<?php echo $image_url; ?>">
                            <p class="teacher__name" itemprop="fio"><?php the_field('teacher_fio', $teacher_id); ?></p>
                            <p class="teacher__paragraph" itemprop="post"><span>Должность - </span><?php the_field('teacher_post', $teacher_id); ?></p>
                            <p class="teacher__paragraph" itemprop="teachingDiscipline"><span>Преподаваемые учебные предметы, курсы, дисциплины: </span><?php the_field('teacher_discipline', $teacher_id); ?></p>
                            <p class="teacher__paragraph" itemprop="teachingLevel"><span>Уровень образования: </span><?php the_field('teacher_level', $teacher_id); ?></p>
                            <p class="teacher__paragraph" itemprop="teachingQual"><span>Квалификация: </span><?php the_field('teacher_qual', $teacher_id); ?></p>
                            <?php
                                if (get_field('teacher_degree', $teacher_id)) {
                                    $a = get_field('teacher_degree', $teacher_id);
                            ?>
                                <p class="teacher__paragraph" itemprop="degree"><span>Ученая степень: </span><?php echo $a; ?></p>
                            <?php
                            }
                            ?>

                            <?php
                                if (get_field('teacher_academ', $teacher_id)) {
                                    $a = get_field('teacher_academ', $teacher_id);
                            ?>
                                <p class="teacher__paragraph" itemprop="academStat"><span>Ученое звание: </span><?php echo $a; ?></p>
                            <?php
                            }
                            ?>

                            <p class="teacher__paragraph" itemprop="employeeQualification"><span>Наименование направления подготовки и (или) специальности: </span><?php the_field('teacher_qualification', $teacher_id); ?></p>
                            
                            <?php
                                if (get_field('teacher_development', $teacher_id)) {
                                    $a = get_field('teacher_development', $teacher_id);
                            ?>
                                <p class="teacher__paragraph" itemprop="profDevelopment"><span>Данные о повышении квалификации и (или) профессиональной переподготовке: </span><?php echo $a; ?></p>
                            <?php
                            }
                            ?>

                            <p class="teacher__paragraph" itemprop="genExperience"><span>Стаж работы по специальности: </span><?php the_field('teacher_specexperience', $teacher_id); ?></p>
                            <p class="teacher__paragraph" itemprop="specExperience"><span>Общий стаж работы: </span><?php the_field('teacher_experience', $teacher_id); ?></p>
                        </li>
                        
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>

            <?php the_content();?>
        </div>
    </div>
  </main>

<?php get_footer(); ?>