<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 15:00
 */
?>


<div class="gallery_list">
    <div class="container">
        <div class="row">
            <?php
            $galleryQuery = new WP_Query(array(
                    'post_type' => 'gallery',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
            ));
            if ($galleryQuery->have_posts()):
                while($galleryQuery->have_posts()):
                    $galleryQuery->the_post();
                    $thumbSrc = wp_get_attachment_image_src(get_post_thumbnail_id(),
                        'full', true)[0];
            ?>
                    <div class="col-md-6">
                        <div class="gallery_preview">

                                <div class="item_thumb">
                                    <img src="<?=$thumbSrc;?>" alt="<?=get_the_title();?>"
                                    class="with_border"/>
                                </div>
                                <div class="item_title">
                                    <a href="<?php the_permalink(); ?>">
                                    <h4><?=get_the_title();?></h4>
                                    </a>
                                </div>
                            <div class="item_desc">
                                    <?php the_excerpt(); ?>z
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
