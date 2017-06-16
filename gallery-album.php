<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.06.17
 * Time: 17:30
 */
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
                <?php while(have_posts()):
                the_post();
                $id = get_the_ID();
                ?>

                   <?php $imagesSrc = get_post_galleries_images($id)[0];
                  foreach ($imagesSrc as $src):
                   ?>
                      <div>
                          <img src="<?=$src?>" class="img-responsive" />
                      </div>
                      <?php endforeach; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
