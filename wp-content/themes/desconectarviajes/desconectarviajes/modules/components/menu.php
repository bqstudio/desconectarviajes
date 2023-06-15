<?php $hasmenu=get_field('menu','option');?>
<?php if($hasmenu):?>
	<div class="site-menu">
		<?php 
		foreach($hasmenu as $menuItem):
			$submenu_type = $menuItem["submenu_type"];
			$first_level = $menuItem["first_level"];
			$first_level_only_text = $menuItem["first_level_only_text"];
			?>
			<div class="site-menu__item site-menu__item--<?php echo $submenu_type; ?>">
				<?php 
				if($first_level):
					if( $first_level ): ?>
						<a class="site-menu__first-level" href="<?php echo $first_level['url']; ?>"><?php echo $first_level['title']; ?></a>
						<button class="site-menu__first-level__btn"></button>
					<?php endif;
				elseif($first_level_only_text):
					echo ($first_level_only_text)? '<div class="site-menu__first-level site-menu__first-level--text">'.$first_level_only_text.'</div>':''; 
				endif;
				?>

				<?php if((is_array($menuItem["submenu"])) && (count($menuItem["submenu"]))): ?>
					<div class="submenu submenu--<?php echo $submenu_type; ?>">
						<?php foreach($menuItem["submenu"] as $submenu): ?>
							<?php if( $link = $submenu["link"] ): ?>
								<a class="submenu__item" href="<?php echo $link['url']; ?>" <?php echo (empty($link['target']))? '' : 'target="'. $link['target'].'"'; ?>>
									<?php if ($image = $submenu["image"]): ?>
										<div class="submenu__image">
											<?php get_template_part( 'modules/components/image', null, ['image' => $image] ); ?>
										</div>
                            					<?php endif; ?>
									<p class="submenu__title"><?php echo $link['title']; ?></p>
								</a>
							<?php endif; ?>
							<button class="back-btn"><?php esc_html_e( 'Back', 'palermo' ); ?></button>
						<?php endforeach;?>
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>

		<?php get_template_part('modules/header/account'); ?>
		<?php get_template_part('modules/header/search'); ?>
	</div>
<?php endif; ?>
