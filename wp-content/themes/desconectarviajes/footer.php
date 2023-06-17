
		</main><!-- #content -->


	<footer class="site-footer">
	<div class="container">
			<div class="site-footer__cont">
				<div class="site-footer__container">
					<div class="site-footer__column">
						<?php get_template_part('modules/components/site-logo'); ?>
					</div>
					<?php get_template_part('modules/components/copyright'); ?>
					<div class="site-footer__bq">
						By <a href="https://bq-studio.com/" target="_blank" tabindex="0">BQ-Studio</a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->


</div><!-- #page -->
<?php if($whatsapp = get_field('whatsapp','option')): ?>
	<a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>&amp;text=Hola%20me%20estoy%20contactando%20desde%20el%20sitio%20web.&amp;source=&amp;data=" target="_blank"><i class="fab fa-whatsapp"></i></a>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
