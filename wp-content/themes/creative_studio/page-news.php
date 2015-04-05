<?php
/*
Template Name: Новини
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
        <ul class="listnews">
			<?php
				query_posts('cat=11');   // указываем ID рубрик, которые необходимо вывести.
				if ( have_posts() ) : // если имеются записи в блоге.
					while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
			?>
						<li>
							<span>
								<?php the_date('d F Y'); ?>
							</span>
							<h3>
								<?php the_title(); ?>
							</h3>
							<p>
								<?php the_content(); ?>
							</p>
						</li>
			<?php endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
            ?>         
        </ul>
        <ul class="numeric">
            <li>
                <a><</a>
            </li>
            <li class="num">
                <a>1</a>
            </li>
            <li class="num active">
                <a>2</a>
            </li>
            <li class="num">
                <a>3</a>
            </li>
            <li class="num">
                <a>4</a>
            </li>
            <li>
                <a>...</a>
            </li>
            <li>
                <a>></a>
            </li>
        </ul>
    </div>

</main>

<?php get_footer(); ?>