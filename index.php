<?php
    get_header();

    include( 'functions/normalize_menu.php');
    
    get_template_part( 'layout-templates/mobile_nav');
    
    get_template_part( 'layout-templates/nav');

    get_template_part( 'onepage-templates/home');
?>
    
<main>
   
    <?php
    
        get_template_part( 'onepage-templates/about-project');

        get_template_part( 'onepage-templates/articles');

        get_template_part( 'onepage-templates/team');
    
    ?>
    
</main>

<?php
    
    get_footer();

?>
   
</body>
</html>