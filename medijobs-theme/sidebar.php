<div id="mj-sidebar" class="mj-sidebar">
    <div class="sidebar__widget sidebar__widget--search">
        <div class="sidebar__widget-content">
            <form id="form" role="search" action="<?php echo site_url(''); ?>" method="get"  class="mj-search-blog mj-form">
                <input class="mj-input" name="s" type="text" placeholder="<?php the_field('search_text', 65); ?>" style="height:30px; border: 1px solid #00C1DE; margin-top:10px;">
                <input type="hidden" name="post_type" value="post" />
                <button type="submit" class="icon_button" style="position: absolute;width: 60px;height: 50px;cursor: pointer;opacity: 0;">Search</button>
            </form>
        </div>
    </div>
</div>