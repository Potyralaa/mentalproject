<?php
    get_header();

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