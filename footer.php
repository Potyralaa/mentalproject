<footer>

    <div class="arrow">
        <svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M16.714,11.297c-0.389-0.389-1.039-0.389-1.429,0l-8.999,8.976  c-0.394,0.394-0.394,1.033,0,1.426c0.394,0.394,1.034,0.394,1.428,0L16,13.436l8.285,8.264c0.395,0.394,1.034,0.394,1.429,0  c0.394-0.394,0.394-1.033,0-1.426L16.714,11.297z" fill="#121313" id="Expand_Less"/></svg>
        <a href="<?php echo get_home_url(); ?>#strona-startowa" class="responsive-link smoothlink"></a>
    </div>


    <div class="footer-container container">

        <div class="info">

            <div class="logo">
                <div class="floating-block">
                    <figure>
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/logo.png" alt="logo">
                        <figcaption>MENTAL PROJECT</figcaption>
                    </figure>
                </div>
            </div>

            <div class="navigation">
                <div class="floating-block">
                    <div class="caption">Skróty</div>
                    <ul>
                        <?php foreach(normalize_menu() as $page): ?>
                            <li>
                                <a href="<?php echo get_home_url(); ?>#<?php echo $page->post_name; ?>" class="smoothlink"><?php echo $page->post_title; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="social">
                <div class="floating-block">
                    <div class="caption">Media
                        <br /> Społecznościowe</div>
                    <ul>

                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="2256.129 987.229 7.924 14.656" class="icon">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <path id="Path_12" data-name="Path 12" class="cls-1" d="M29.7,0,27.8,0a3.338,3.338,0,0,0-3.515,3.607V5.27H22.376a.3.3,0,0,0-.3.3v2.41a.3.3,0,0,0,.3.3h1.911v6.08a.3.3,0,0,0,.3.3h2.493a.3.3,0,0,0,.3-.3V8.277h2.234a.3.3,0,0,0,.3-.3V5.569a.3.3,0,0,0-.3-.3H27.378V3.86c0-.678.161-1.022,1.044-1.022H29.7a.3.3,0,0,0,.3-.3V.3A.3.3,0,0,0,29.7,0Z" transform="translate(2234.052 987.229)" />
                                </svg>Facebook
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="2252.468 1025.403 17.005 11.968" class="icon">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <path id="XMLID_823_" class="cls-1" d="M16.342,46.944c-.614-.73-1.747-1.027-3.912-1.027H4.574c-2.214,0-3.366.317-3.978,1.094-.6.757-.6,1.873-.6,3.418v2.944c0,2.992.707,4.512,4.574,4.512h7.857c1.877,0,2.917-.263,3.59-.907.69-.66.984-1.739.984-3.605V50.429C17.005,48.8,16.959,47.677,16.342,46.944Zm-5.425,5.363L7.35,54.172a.549.549,0,0,1-.8-.486V49.968a.549.549,0,0,1,.8-.487l3.568,1.853a.549.549,0,0,1,0,.973Z" transform="translate(2252.468 979.486)" />
                                </svg>YouTube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact">
                <div class="floating-block">
                    <div class="caption">Kontakt</div>
                    <ul>

                        <li>
                            <a href="mailto:mentalproject@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="2252 1117.156 17.844 17.844" class="icon">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                            
                                            .cls-2 {
                                                fill: none;
                                            }
                                        </style>
                                    </defs>
                                    <g id="ic_email_white_24px" transform="translate(2252 1117.156)">
                                        <path id="Path_6" data-name="Path 6" class="cls-1" d="M15.383,4H3.487a1.485,1.485,0,0,0-1.48,1.487L2,14.409A1.491,1.491,0,0,0,3.487,15.9h11.9a1.491,1.491,0,0,0,1.487-1.487V5.487A1.491,1.491,0,0,0,15.383,4Zm0,2.974L9.435,10.691,3.487,6.974V5.487L9.435,9.2l5.948-3.717Z" transform="translate(-0.513 -1.026)" />
                                        <path id="Path_7" data-name="Path 7" class="cls-2" d="M0,0H17.844V17.844H0Z" />
                                    </g>
                                </svg>kontakt@mentalproject.pl
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="2252 1154.156 17.844 17.844" class="icon">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }
                                            
                                            .cls-2 {
                                                fill: none;
                                            }
                                        </style>
                                    </defs>
                                    <g id="ic_location_on_white_24px" transform="translate(2252 1154.156)">
                                        <path id="Path_8" data-name="Path 8" class="cls-1" d="M10.2,2A5.2,5.2,0,0,0,5,7.2c0,3.9,5.2,9.665,5.2,9.665s5.2-5.762,5.2-9.665A5.2,5.2,0,0,0,10.2,2Zm0,7.063A1.859,1.859,0,1,1,12.063,7.2,1.859,1.859,0,0,1,10.2,9.063Z" transform="translate(-1.283 -0.513)" />
                                        <path id="Path_9" data-name="Path 9" class="cls-2" d="M0,0H17.844V17.844H0Z" />
                                    </g>
                                </svg>Rzeszow
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="copyrights">
        &copy; Mental project. Wszystkie prawa zastrzeżone.
    </div>

</footer>

<script src="<?php echo get_template_directory_uri() . "/vendor/js/jquery.js "; ?>"></script>

<script src="https://cdn.jsdelivr.net/sharer.js/latest/sharer.min.js"></script>

<script src="<?php echo get_template_directory_uri() . "/vendor/js/owl.carousel.min.js "; ?>"></script>

<script src="<?php echo get_template_directory_uri() . "/main.js "; ?>"></script>

<?php wp_footer(); ?>