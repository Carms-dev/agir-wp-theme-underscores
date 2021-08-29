<?php
/**
 * Testimonial Block Template.
 *
 * @package underscores
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$block_id = 'testimonial-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonials';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

?>
<section>
  <?php if ( have_rows( 'testimonials' ) ) : ?>
	<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?> wrapper">
		<?php 
		while ( have_rows( 'testimonials' ) ) :
			the_row();
			$text         = get_sub_field( 'testimonial' );
			$author       = get_sub_field( 'author' );
			$year_written = get_sub_field( 'year' );
			?>
		<blockquote class="testimonial">
		  <span><?php echo $text; ?></span>
		  <span>
			<?php echo "- $author"; ?>
			<?php echo ", $year_written"; ?>
		  </span>
		</blockquote>
		<?php endwhile ?>
	</div>
  <?php endif; ?>
</section>
