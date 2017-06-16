<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.06.17
 * Time: 17:52
 * Template name: Галерея
 */
?>

<?php get_header(); ?>
<main class="content gray_base_background secondary_page gallery_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_heading">
                    <h1 class="page_title">
                        <?=get_the_title();?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('gallery', 'list'); ?>
</main>
<?php get_footer(); ?>
