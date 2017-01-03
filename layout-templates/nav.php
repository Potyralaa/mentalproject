<nav id="navbar">
    <div class="navbar_container container">
        <div class="logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 58.4 66" style="enable-background:new 0 0 58.4 66;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#33BB9B;}
                </style>
                <path id="XMLID_14_" class="st0" d="M58.4,22.9l-4-14.5L42,0.6L25.1,0l-15,8.5L5.5,19.2l0.9,9.5l-3.1,5.3L0,38.1v2.5L5.2,42
                    l-1.4,4.9l1.5,1l2.1,0.1l-1.9,2.1l0.2,1.4L9,53.7l0.7,4.6l3.4,2.3l8.1-2l1.8,7.3h23.5l-0.7-16.2l8.5-11.2L58.4,22.9z M45,8.8
                    l1.4-1.3l4.9,5.3L46.3,17h-2.7l0.1-3l1.5-1.9L45,8.8z M43.6,5.1l-0.3,7.1L40.8,16l-1.5-0.6l0.2-4.3l-4.1-1.4l3.5-5.4L43.6,5.1z
                     M27.6,10l0-6h6.2l2.8,1.4l-3.6,5.2l4.9,1.6v2.9l-1.4,2.7L30,18.2v-1.2l-0.7-0.3L28.5,20l-2.8,1.2l-3.9-2.9l1.7-2.9l2.4,1.1l0.7-1.6
                    l-1.5-1l0.8-1.8l4.8,1.9l1.7-0.9L27.6,10z M16.2,12H22l-4.5-1.9l1.1-2.3L25,5.3V10h-4l3.2,1.7L21.1,17h-5.4L16.2,12z M21.7,23.2
                    l-6-5.2h4.2l5.2,3.8L21.7,23.2z M38.1,36l-5.3-5.4l3.7-0.8l4.3,4.8L38.1,36z M47,29.8l-6.6,1.6l-2.9-2.5l1.1-2.7l8.4,0.1V29.8z
                     M53.4,26.1l-5.9,0L45,23.7l-3.7,1.5l-2.7-0.2l2.2-2.2l-5.3-0.3l1.9,2.7L35.7,29h-9.4L23,26.8v-3.2l2.2-1.2l7.9,3.2l0.4-1.8
                    l-3.8-1.5l0.3-2.6l5.9,0.2l4.8-3l5.1,1.7l5.5-4.2l2.9,5l-7,0.4l-1.1,3l2.7,0.4l-1.8-1l0.3-1.5l6.2-0.2L53.4,26.1z"/>
            </svg>
            <div class="title">Mental Project</div>
            <a href="<?php echo get_home_url(); ?>#strona-startowa" class="responsive-link smoothlink"></a>
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


<div class="burger-menu">
    <div class="burger-click-region">
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
    </div>
</div>