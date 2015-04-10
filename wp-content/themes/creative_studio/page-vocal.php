<?php
/*
Template Name: Вокальна студія
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
    <div class="bg_wrapp">
        <img src="images/s_vocal_wrapp.png" alt="Вокальна студія"/>
    </div>
    <div class="wrap">
        <p class="general_vocal">
		<?php the_content(); ?>

            На заняттях з вокалу кваліфіковані викладачі навчають не лише виконувати пісні, але й допомагають розвинути музичний слух та поставити голос кожного бажаючого, навчають музичній грамоті та історії музики.  У Вашому розпорядженні є професійне музичне обладнання, на якому Ви можете відточувати свою майстерність з виконання пісень у народному, естрадному, академічному або джазовому стилях.
        </p>
        <h3>Викладачі</h3>
        <ul class="teacher">
            <li>
                <figure>
                    <img src="images/face1.jpg" alt="Іваненко Марія"/>
                    <figcaption>
                        Іваненко Марія
                    </figcaption>
                </figure>
                <p>
                    Викладач з вокалу та фортепіано, артист-вокаліст
                </p>
            </li>
            <li>
                <figure>
                    <img src="images/face2.jpg" alt="Петренко Світлана"/>
                    <figcaption>
                        Петренко Світлана
                    </figcaption>
                </figure>
                <p>
                    Викладач з теорії музики, випускниця Львівської національної музичної академії ім. М. В. Лисенка
                </p>
            </li>
            <li>
                <figure>
                    <img src="images/face3.jpg" alt="Іваненко - Петренко Дмитро"/>
                    <figcaption>
                        Іваненко - Петренко Дмитро
                    </figcaption>
                </figure>
                <p>
                   Викладач з вокалу та гри на гітарі
                </p>
            </li>
        </ul>
    </div>
</main>

<?php get_footer(); ?>