<div id="mobile_sidebar">
    <ul class="menu">
        <?php foreach(normalize_menu() as $page): ?>
            <li>
                <a href="<?php echo get_home_url(); ?>#<?php echo $page->post_name; ?>" class="smoothlink sidebar_link"><?php echo $page->post_title; ?></a>
            </li>
            <?php endforeach; ?>
    </ul>

</div>

<div class="overlay" id="black_overlay"></div>

<div class="overlay" id="white_overlay">
    <div id="share_modal">
        
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" id="exit_icon">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
        </svg>

        <div class="share_modal__field">
            <h4>Link:</h4>
            <input type="text" id="share_input">
            <button id="share_copy">Skopiuj</button>
            <div class="clearfix"></div>
        </div>

        <div class="share_modal__field">
            <h4>Udostępnij na:</h4>
            <button class="sharer fb-btn" data-sharer="facebook">Facebooku</button>
            <button class="sharer twitter-btn" data-sharer="twitter">Twitterze</button>
        </div>
    </div>
</div>



<div id="fb-root"></div>