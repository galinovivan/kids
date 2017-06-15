<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.06.17
 * Time: 16:34
 */
?>
<main class="content gray_base_background
<?php is_front_page() ? print 'font_page' : print 'secondary_page'?>">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (!is_front_page()):?>
            <div class="page_heading">
                <h1 class="page_title"><?=get_the_title();?></h1>
            </div>
            <?php endif; ?>
            <div class="page_thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php if (is_front_page()): ?>
            <div class="page_heading">
                <h1 class="page_title"><?=get_the_title();?></h1>
            </div>
            <?php endif; ?>
            <div class="page_content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
</main>
