
<?php
  $thumbnailBgImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
?>

<div
    class="post"
    onclick="openModal('<?= $thumbnailBgImg[0] ?>', '<?php the_title(); ?>', '<?= $post->ID ?>', '<?php get_post_field('post_content', $post->ID) ?>' )"
    title="<?= the_title_attribute(); ?>"
>
    <div
        class="post-thumbnail"
        id="post-thumbnail"
        style="background-image: url('<?= $thumbnailBgImg[0]; ?>');"
    ></div>
    <div class="post-content">
        <h3 id="thumbnail-h3"><?php the_title(); ?></h3>
        <p id="thumbnail-p"><?php the_content(); ?></p>
    </div>
</div>
