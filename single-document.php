<?php global $langClass;
$langClass = "ja"; ?>
<?php global $langPath;
$langPath = home_url(); ?>
<?php get_header(); ?>

<section class="p-lowerMv">
	<div class="p-lowerMv__inner">
		<p class="p-lowerMv__heading">
			Document Download
		</p>
		<nav class="p-lowerMv__bread">
			<ul class="p-lowerMv__bread__list">
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>/">TOP</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<a href="<?php echo $langPath; ?>">Document List</a>
				</li>
				<li class="p-lowerMv__bread__list__item">
					<span>Document Download</span>
				</li>
			</ul>
		</nav>
	</div>
</section>

<?php get_template_part('inc/template-single-document'); ?>


<?php get_footer(); ?>