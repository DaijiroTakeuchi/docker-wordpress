<aside class="sidebar leftcol">
    <p>左サイドバー</p>
    <?php if(is_active_sidebar('widget_sidebar-left')): ?>
    <ul id="sidebar-widget" class="sidebar-widget widget-container">
        <?php dynamic_sidebar('widget_sidebar-left'); ?>
    </ul>
    <?php endif; ?>
</aside>