<?php
/*
Template Name: Про нас
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
        <h2>
            Ласкаво просимо до Творчої Майстерні!
        </h2>
        <p>
            Це один із проектів, втілений Спілкою дитячих та юнацьких організацій Черкащини
            під керівництвом Іванової Олени Олександрівни.
        </p>
        <img src="images/face.png" alt="Іванова Олена Олександрівна"/>
        <p>
            Спілка дитячих та юнацьких організацій Черкащини (СДЮОЧ) – обласна дитяча громадська організація створена 5 листопада 1991 року, молодіжне об’єднання “Лідер” створилося за ініціативою дітей на обласному зборі СДЮОЧ, зареєстрована управлінням юстиції в Черкаській області 5 серпня 1993 року, свідоцтво № 17.
        </p>
        <img src="images/spilka_large.png" alt="Спілка дитячих та юнацьких організацій Черкащини"/>
        <h3>
            Основна мета та завдання діяльності Спілки спрямовані на:
        </h3>
        <ul class="object">
            <li>
                - згуртування дітей, підлітків та дорослих з метою вироблення найрізноманітніших форм, методів, програм, спрямованих на виконання добрих і корисних справ, гармонійний розвиток особистості;
            </li>
            <li>
                - навчання дітей любові до своєї родини, до краю, в якому народилися, віри в себе, в свої сили;
            </li>
            <li>
                - вивчення історичного минулого України, збереження та примноження традицій свого народу;
            </li>
            <li>
                - виховання підростаючого покоління в дусі поваги до старших, турботи про молодших, своїх рідних, близьких друзів, всіх кому потрібна допомога;
            </li>
            <li>
                - пізнання та примноження краси природи; прищеплення любові до праці;
            </li>
            <li>
                - піклування про соціальне незахищені групи неповнолітніх;
            </li>
            <li>
                - прагнення жити в мирі та дружбі з дітьми інших народів, країн;
            </li>
            <li>
                - сприяння розвитку різноманітних здібностей, творчості підростаючого покоління (проведення екологічної, оздоровчої, аматорської, спортивної, культурної, освітньої та наукової діяльності).
            </li>
        </ul>
    </div>

</main>

<?php get_footer(); ?>