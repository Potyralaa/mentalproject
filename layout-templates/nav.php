<nav id="navbar">
    <div class="navbar_container container">
        <div class="logo">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/logo.png" alt="logo" />
            <div class="title">Mental Project</div>
            <a href="<?php echo get_home_url(); ?>#strona-startowa" class="responsive-link smoothlink"></a>
        </div>

        <div class="burger-menu">
            <div class="burger-click-region">
              <span class="burger-menu-piece"></span>
              <span class="burger-menu-piece"></span>
              <span class="burger-menu-piece"></span>
            </div>
        </div>

        <ul class="menu">
            <?php foreach(normalize_menu() as $page): ?>
            <li>
                <a href="<?php echo get_home_url(); ?>#<?php echo $page->post_name; ?>" class="smoothlink"><?php echo $page->post_title; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>