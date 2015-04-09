<?php
/*
Template Name: Студії
*/

/**
 * Created by PhpStorm.
 * User: rb
 * Date: 28.03.15
 * Time: 10:54
 */
get_header(); ?>

<main>
	<h1><?php the_title(); ?></h1>
    <div class="wrap">
		<ul class="studia">
			<?php
				query_posts('cat=4');
				if ( have_posts() ) :
					while (have_posts()) : the_post();
						?>
            <li class="<?php the_field("class"); ?>">
                
                <figure>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(231,229)); ?></a>
                    <figcaption><h4><?php the_excerpt();?></h4></figcaption>
                </figure>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </li>
			<?php endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>
		</ul>

        </div><!-- #content -->
    </div><!-- #primary -->
</main>

<?php get_footer(); ?>