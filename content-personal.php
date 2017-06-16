<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 12:51
 */
?>
<div class="personal_list">
    <div class="container">
        <div class="row">
            <?php
            $personalQuery = new WP_Query(array(
                'post_type' => 'personal',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));
            if ($personalQuery->have_posts()):
                while($personalQuery->have_posts()):
                    $personalQuery->the_post();
            $thumbSrc = wp_get_attachment_image_src(get_post_thumbnail_id(),
                'full', true)[0];
            ?>
            <div class="col-md-4">
                <div class="item_thumbnail">
                    <a href="<?=$thumbSrc;?>" data-fancybox>
                    <img src="<?=$thumbSrc;?>" class="img-responsive" />
                    </a>
                </div>
                <div class="item_title">
                    <h3><?=get_the_title();?></h3>
                </div>
                <div class="item_position">
                    <?=get_field('position');?>
                </div>
                <div class="item_desc">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
