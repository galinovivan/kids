<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 17:30
 */
?>
<?php
$imagesSrc = null;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page_heading">
                <h1 class="page_title">
                    <?=get_the_title();?>
                </h1>
            </div>
        </div>
        <div class="col-md-12">
            <div class="gallery_single">
                <div class="row">

                  <div class="col-md-12">
                    <div class="slick_slider" id="slickSlider">
                <?php while(have_posts()):
                the_post();
                $id = get_the_ID();
                ?>
                    <?php $imagesSrc = get_post_galleries_images($id);
                  foreach ($imagesSrc[0] as $src):
                   ?>

                             <div class="slide_thumb" style="background-image: url(<?=$src;?>)">

                             </div>

                      <?php endforeach; ?>
                <?php endwhile; ?>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="slider_nav" id="slickNav">
                        <?php foreach ($imagesSrc[0] as $src): ?>
                        <div>
                            <img src="<?=$src;?>" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=get_template_directory_uri();?>/assets/libs/slick/slick/slick.min.js"></script>