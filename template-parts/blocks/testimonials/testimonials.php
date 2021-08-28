<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

?>
<section>
  <?php if (have_rows('testimonials')) : ?>
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> wrapper">
      <?php while (have_rows('testimonials')) : the_row();
        $text   = get_sub_field('testimonial');
        $author = get_sub_field('author');
        $year   = get_sub_field('year');
      ?>
        <blockquote class="testimonial">
          <span><?php echo $text; ?></span>
          <span>
            <?php echo "- $author"; ?>
            <?php echo ", $year"; ?>
          </span>
        </blockquote>
      <?php endwhile ?>
    </div>
  <?php endif; ?>
</section>
