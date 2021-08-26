<?php
// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

// Load values
$header = get_field('header') ?: 'Your testimonial here...';
$description = get_field('description') ?: 'Author name';
$image = get_field('image');
?>

<section class="<?php echo esc_attr($className); ?> wrapper">
  <?php if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div>
    <h1><?php echo $header; ?></h1>
    <p><?php echo $description; ?></p>
  </div>
</section>
