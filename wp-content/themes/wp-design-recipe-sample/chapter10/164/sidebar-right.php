<aside class="sidebar leftcol">
    <p>右サイドバー</p>
    <?php if(is_active_sidebar('widget_sidebar-right')): ?>
    <ul id="sidebar-widget" class="sidebar-widget widget-container">
        <?php dynamic_sidebar('widget_sidebar-right'); ?>
    </ul>
    <?php endif; ?>
</aside>