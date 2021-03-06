<?php

$n = 1;
while(have_rows('element')) : the_row(); ?>
	<div class="border_section">
		<div class="wrap"><?php

			if(get_sub_field('title')){
				echo '<h2 class="red Decima">'.$n++.'. '. get_sub_field('title').'</h2>';
			} ?>

			<div class="basic_grid two_col_grid">
				<div>
					<div><?php the_sub_field('content'); ?></div>
				</div>
				<div>
					<h4 class="Decima"><?php the_sub_field('service-title'); ?></h4>
					<div><?php the_sub_field('service-content'); ?></div>
				</div>
			</div><?php


			$images = get_sub_field('images');
			if($images): ?>
				<div class="bl-party-two-w-captions">
					<ul><?php
						foreach( $images as $image ): ?>
						<li><?php
							if($image['alt']){
								echo '<a href="'.$image['alt'].'">';
							} ?>
								<picture>
									<img class="full_width_image"
										 src="<?php echo $image['sizes']['large']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture><?php
								echo '<p>'.$image['title'];
								if($image['caption']) {
									echo ' <span class="Leitura">'. $image['caption'] .'</span>';
								}
								echo '</p>';
							if($image['alt']){
								echo '</a>';
							} ?>
						</li><?php
						endforeach; ?>
					<ul>
				</div><?php
			endif; ?>

		</div>
	</div><?php
endwhile; ?>
