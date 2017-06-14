<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.06.17
 * Time: 16:29
 */
?>
<?php get_header(); ?>

<main>
    <?php

    while(have_posts()) {
        the_post();
        get_template_part('content', 'base');
    }

    ?>
</main>

<?php get_footer(); ?>