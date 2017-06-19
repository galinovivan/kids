<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15.06.17
 * Time: 17:13
 */

?>

<main class="contacts_page gray_base_background content">
<div class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="map" id="map"></div>
            </div>
            <div class="col-md-6">
                <div class="contact_detail">
<!--                   <div class="title">-->
<!--                    <h4>Детский сад №5</h4>-->
<!--                    <h4>Петроградского района г. С-Пб</h4>-->
<!--                   </div>-->
<!--                    <div class="phone">-->
<!--                        <span class="phone_label">Телефон:</span>-->
<!--                        <span>+7 812 000 00 00</span>-->
<!--                        <span>+7 812 000 00 00</span>-->
<!--                    </div>-->
<!--                    <div class="adress">-->
<!--                        <span>197110, Санкт-Петербург,</span>-->
<!--                        <span>Морской проспект дом 5</span>-->
<!--                    </div>-->
<!--                    <div class="email">-->
<!--                        <span class="email_label">email:</span>-->
<!--                        <span>dc5@gmail.com</span>-->
<!--                    </div>-->
<!--                    <div class="desc">-->
<!--                        <p>По вопросам устройства ребёнка в детский сад,<br />-->
<!--                            обращайтесь, пожалуйста, в отделение МФЦ вашего района:<br />-->
<!--                            gu.spb.ru/mfc</p>-->
<!--                    </div>-->

                    <?php

                    while(have_posts()):
                    the_post();
                    ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
