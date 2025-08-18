<?php global $langClass;
$langClass = "en"; ?>
<?php global $langPath;
$langPath = home_url() . "/en"; ?>
<?php get_header(); ?>

<section class="p-lowerMv">
	<div class="p-lowerMv__inner">
		<p class="p-lowerMv__heading">
			Case Study List
		</p>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/case-study">Case Study List</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span><?php the_title(); ?></span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<?php get_template_part('inc/template-single-case-study'); ?>

<?php get_footer(); ?>