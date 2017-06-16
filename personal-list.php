<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.06.17
 * Time: 17:51
 * Template name: Сотрудники
 */
?>

<?php get_header(); ?>

<main class="personal_page content secondary_page gray_base_background">
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

    <?php get_template_part('content', 'personal'); ?>


</main>


<?php get_footer(); ?>
