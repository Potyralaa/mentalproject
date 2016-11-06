<?php

    get_header(); 

?>

<div id="fullpage">

    <header class="section site-header" role="banner" data-anchor="strona-startowa" id="masthead" style="background-image: url(<?php header_image(); ?>)">

        <div class="container">

            <div class="row center-xs">
                <div class="col-xs-12">
                    <h1 class="header">Mental Project</h1>
                </div>
            </div>

            <div class="row center-xs">
                <div class="col-xs-12">
                    <h3>Provident ratione quibusdam. </h3>
                </div>
            </div>


            <div class="row center-xs">
                <div class="col-xs-12">
                    <h3>Sapiente optio aut, pariatur, officiis laboriosam totam?</h3>
                </div>
            </div>

            <div class="row center-xs">
                <div class="col-xs-12">
                    <a href="#przyklady-zaburzen" class="button">Przejdź dalej!</a>
                </div>
            </div>

        </div>

    </header>

    <div class="section" data-anchor="przyklady-zaburzen">
        <div class="container disabilities">
            <div class="row disability-list between-sm center-xs">

                <div class="box col-xs-12">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                    <h3 class="caption">Depresja</h3>
                    <a href="#przyklady-zaburzen" class="button">Czytaj więcej</a>
                </div>

                <div class="box col-xs-12">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                    <h3 class="caption">Schizofrenia</h3>
                    <a href="#przyklady-zaburzen" class="button">Czytaj więcej</a>
                </div>

                <div class="box col-xs-12">
                    <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                    <h3 class="caption">Nerwica</h3>
                    <a href="#przyklady-zaburzen" class="button">Czytaj więcej</a>
                </div>

            </div>
            
            <div class="row disability-pointer-wrapper between-sm">
                <div class="box col-xs-12">
                    <div class="disability-pointer active"></div>
                </div>
                <div class="box col-xs-12">
                    <div class="disability-pointer"></div>
                </div>
                <div class="box col-xs-12">
                    <div class="disability-pointer"></div>
                </div>
                
            </div>

            <div class="row disability-description">
                <div class="col-sm-5 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>

                <div class="col-sm-7 description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quam, asperiores, odit exercitationem eos commodi! Laudantium provident explicabo, iste totam modi blanditiis. Pariatur ullam laborum sapiente rerum, cum fugiat qui!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus autem nostrum ad accusantium culpa, minima sequi, eaque distinctio cupiditate, aliquid eligendi! Adipisci sit quia veritatis deserunt nulla aperiam commodi earum.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="section" data-anchor="artykuly">
        <div class="container articles">
           
            <div class="row article middle-xs">
                <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                <div class="col-sm-10 col-xs-12 text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et soluta, sunt, aperiam vitae expedita laudantium corporis deleniti molestias magni cum eum cupiditate sapiente eos dolore harum pariatur rem quo.
                </div>
            </div>
            
            <div class="row article middle-xs">
                <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                <div class="col-sm-10 col-xs-12 text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et soluta, sunt, aperiam vitae expedita laudantium corporis deleniti molestias magni cum eum cupiditate sapiente eos dolore harum pariatur rem quo.
                </div>
            </div>
            
            <div class="row article middle-xs">
                <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                <div class="col-sm-10 col-xs-12 text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et soluta, sunt, aperiam vitae expedita laudantium corporis deleniti molestias magni cum eum cupiditate sapiente eos dolore harum pariatur rem quo.
                </div>
            </div>
            
            <div class="row article middle-xs">
                <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                <div class="col-sm-10 col-xs-12 text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et soluta, sunt, aperiam vitae expedita laudantium corporis deleniti molestias magni cum eum cupiditate sapiente eos dolore harum pariatur rem quo.
                </div>
            </div>
            
            <div class="row article middle-xs">
                <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                <div class="col-sm-10 col-xs-12 text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque et soluta, sunt, aperiam vitae expedita laudantium corporis deleniti molestias magni cum eum cupiditate sapiente eos dolore harum pariatur rem quo.
                </div>
            </div>
            
        </div>
    </div>

    <div class="section" data-anchor="newsletter">
        <pre>

            <?php print_r(get_pages()); ?>

        </pre>
    </div>
</div>

<?php get_footer(); ?>