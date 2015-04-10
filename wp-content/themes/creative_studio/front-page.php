<?php

/*
Template Name: Главная
*/
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 28.03.15
 * Time: 11:49
 */?>
<?php get_header()?>
<!-- header -->

<main>
    <div class="project-wrap">
        <div class="section-wrap">
            <section class="project">
                <span>Проект</span>
                <h2>“Відкрий в собі зірку”</h2>
                <p>З нами ваша дитина розкриє свій потенціал!</p>
                <a href="#">Дізнатися більше</a>
            </section>
        </div>
    </div>
    <div class="gallery-wrap">
                <?php
                    the_post();
                    the_content();
                ?>
    </div>
</main>
<!--footer-->
<?php get_footer();?>
