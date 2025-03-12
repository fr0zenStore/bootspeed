<aside class="sidebar">
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <p>Sidebar vuota. Aggiungi widget dalla dashboard.</p>
    <?php endif; ?>
</aside>
