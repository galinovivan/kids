<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.06.17
 * Time: 13:10
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1180">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=get_the_title();?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="header_logo">
                    <div class="logo">
                        <a href="/">
                            <?php  the_custom_logo(); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="header_nav">
                    <ul class="nav inline_nav">
                        <li>
                            <a href="<?=get_page_link(12);?>">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_about"></i>
                                </div>
                               <div class="label">
                                О нас
                               </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=get_page_link(37);?>">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_developers"></i>
                                </div>
                                <div class="label">
                                Сотрудники
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=get_page_link(71);?>">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_gallery"></i>
                                </div>
                                <div class="label">
                                Галерея
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=get_page_link(22);?>">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_method"></i>
                                </div>
                                <div class="label">
                                Методики
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=get_page_link(91);?>">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_group"></i>
                                </div>
                                <div class="label">
                                    Группы
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=get_page_link(30);?>">
                            <div class="icon">
                                <i class="nav_icon nav_icon_contact"></i>
                            </div>
                                <div class="label">
                                Контакты
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
