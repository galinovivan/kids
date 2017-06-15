<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.06.17
 * Time: 17:53
 * Template name: Методики
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