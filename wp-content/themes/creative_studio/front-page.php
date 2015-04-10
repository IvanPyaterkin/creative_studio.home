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
			<div class="gallerys">
				<ul class="top-site">
					<li class="gallery">
						<figure>
							<img src="<?php bloginfo('template_url')?>/images/gallery.png" alt="Галерея" />
							<figcaption>Галерея</figcaption>

						</figure>
						<p>
							Lorem ipsum dolor sit amet consectetur a dipisicing elit sed.Lorem ipsum dolor sit amet, consectetur adipisicing
							elit, sed do eiusmod Incididunt abore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<a href="{ССЫЛКА НА СООТВЕТСТВУЮЩУЮ СТРАНИЦУ}">Детальніше</a>
					</li>
					<li class="studios">
						<figure>
							<img src="<?php bloginfo('template_url')?>/images/studios.png" alt="Студії" />
							<figcaption>Студії</figcaption>
						</figure>
						<p>
							Lorem ipsum dolor sit amet consectetur a dipisicing elit sed.Lorem ipsum dolor sit amet, consectetur adipisicing
							elit, sed do eiusmod Incididunt abore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<a href="{ССЫЛКА НА СООТВЕТСТВУЮЩУЮ СТРАНИЦУ}">Детальніше</a>
					</li>
					<li class="affiche">
						<figure>
							<img src="<?php bloginfo('template_url')?>/images/affiche.png" alt="Афіша" />
							<figcaption>Афіша</figcaption>
						</figure>
						<p>
							Lorem ipsum dolor sit amet consectetur a dipisicing elit sed.Lorem ipsum dolor sit amet, consectetur adipisicing
							elit, sed do eiusmod Incididunt abore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<a href="{ССЫЛКА НА СООТВЕТСТВУЮЩУЮ СТРАНИЦУ}">Детальніше</a>
					</li>
				</ul>
			</div>
		</div>
</main>
<!--footer-->
<?php get_footer();?>
