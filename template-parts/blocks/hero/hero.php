<?php
/**
 * Create class attribute allowing for custom "className" and "align" values.
 *
 * @package underscores
 */

$class_name = 'hero';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
$header      = get_field( 'header' );
$description = get_field( 'description' );
$image       = get_field( 'image' );
?>

<section class="<?php echo esc_attr( $class_name ); ?> wrapper">
	<?php if ( ! empty( $image ) ) : ?>
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	<?php endif; ?>
	<div>
		<h1><?php echo $header; ?></h1>
		<p><?php echo $description; ?></p>
	</div>
</section>
