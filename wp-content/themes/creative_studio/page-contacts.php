<?php
/*
Template Name: Контакти
*/

/**
 * Created by PhpStorm.
 * User: rb
 * Date: 28.03.15
 * Time: 10:54
 */
get_header(); ?>

<main>
	<h1>Контакти</h1>
	<div class="wrap">
		<ul class="cont_wrapp">
			<li class="adress_wrapp">
				<ul class="cont">
					<li class="address">
						<dl>
							<dt>
								Адреса:
							</dt>
							<dd>
								м.Черкаси, вул. Смілянська, 100
							</dd>
						</dl>
					</li>
					<li class="email">
						<dl>
							<dt>
								e-mail:
							</dt>
							<dd>
								 youth-organization@mail.com
							</dd>
						</dl>
					</li>
				</ul>
			</li>
			<li class="phone_wrapp">
				<ul class="phon">
					<li class="mobile">
						<p>067-389-25-51</p>
					</li>
					<li class="phone">
						<p>0472-63-64-24</p>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<img class="map" src="<?php bloginfo('template_url')?>/images/map.jpg">

</main>


<?php get_footer(); ?>