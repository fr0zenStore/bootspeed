<?php get_header(); ?>
<div class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('mb-4'); ?>>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>Nessun contenuto trovato.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
