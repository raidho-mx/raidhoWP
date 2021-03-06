<?php
if (get_sub_field('choose') == 'slider-right') : ?>
	<div class="bl-party-img-slider" id="img-slider-one<?php echo $count; ?>">
		<div>
			<picture>
				<?php
				$image = get_sub_field('img');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</picture>
		</div>
		<div>
			<style>
				.bl-party-img-slider ul.centered-btns_tabs li a{
					border: 4px solid <?php the_sub_field('bg-color'); ?>;}
				.bl-party-img-slider a.centered-btns_nav.next:hover,
				.bl-party-img-slider a.centered-btns_nav.prev:hover{
					background-color: <?php the_sub_field('bg-color'); ?>;}
				.bl-party-img-slider ul.centered-btns_tabs li a:hover,
				.bl-party-img-slider ul.centered-btns_tabs li.centered-btns_here a{
					background-color: <?php the_sub_field('bg-color'); ?>;
					border: 4px solid <?php the_sub_field('bg-color'); ?>;}
			</style>
			<?php
			$images = get_sub_field('gallery');
			if($images) : ?>
				<div class="wide_slider">
					<ul class="rslides slider2"><?php
						foreach( $images as $image ): ?>
							<li>
								<img src="<?php echo $image['sizes']['larger']; ?>" alt="<?php echo $image['alt']; ?>" />
							</li><?php
						endforeach;	?>
					</ul>
				</div><?php
			endif; ?>
		</div>
	</div>


<?php
elseif (get_sub_field('choose') == 'slider-left') : ?>
	<div class="bl-party-img-slider" id="img-slider-two<?php// echo $v_two++?>">
		<div>
			<style>
				.bl-party-img-slider ul.centered-btns_tabs li a{
					border: 4px solid <?php the_sub_field('bg-color'); ?>;}
				.bl-party-img-slider a.centered-btns_nav.next:hover,
				.bl-party-img-slider a.centered-btns_nav.prev:hover{
					background-color: <?php the_sub_field('bg-color'); ?>;}
				.bl-party-img-slider ul.centered-btns_tabs li a:hover,
				.bl-party-img-slider ul.centered-btns_tabs li.centered-btns_here a{
					background-color: <?php the_sub_field('bg-color'); ?>;
					border: 4px solid <?php the_sub_field('bg-color'); ?>;}
			</style>
			<?php
			$images = get_sub_field('gallery');
			if($images) : ?>
				<div class="wide_slider">
					<ul class="rslides slider2"><?php
						foreach( $images as $image ): ?>
							<li>
								<img src="<?php echo $image['sizes']['larger']; ?>" alt="<?php echo $image['alt']; ?>" />
							</li><?php
						endforeach;	?>
					</ul>
				</div><?php
			endif; ?>
		</div>
		<div>
			<picture>
				<?php
				$image = get_sub_field('img');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</picture>
		</div>
	</div>
<?php
endif; ?>
