<?php session_start();
global $langClass;
$langClass = "en"; ?>
<?php global $langPath;
$langPath = home_url() . "/en"; ?>
<?php get_header(); ?>

<section class="p-lowerMv">
	<div class="p-lowerMv__inner">
		<h1 class="p-lowerMv__heading">
			Solution list
		</h1>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Solution List</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<?php get_template_part('inc/template-archive-solution'); ?>

<?php get_footer(); ?>