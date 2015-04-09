<?php
/*
Template Name: Проекты
*/

/**
 * Created by PhpStorm.
 * User: rb
 * Date: 28.03.15
 * Time: 10:54
 */
get_header(); ?>

<main>
	<?php the_post(); ?>
	<h1><?php the_title(); ?></h1>
    <div class="wrap">
		<?php the_content(); ?>
        <ul class="project-list">
			<?php
				query_posts('cat=13');
				if ( have_posts() ) :
					while (have_posts()) : the_post();
						?>
			<li class="<?php the_field("class"); ?>">
				<?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </li>
			<?php endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>
        </ul>
    </div>

</main>


<?php get_footer(); ?>