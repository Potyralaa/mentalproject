<div id="mobile_sidebar">
    <ul class="menu">
        <?php foreach(normalize_menu() as $page): ?>
        <li>
            <a href="<?php echo get_home_url(); ?>#<?php echo $page->post_name; ?>" class="smoothlink sidebar_link"><?php echo $page->post_title; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>

</div>