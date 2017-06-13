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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                            <a href="#">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_about"></i>
                                </div>
                               <div class="label">
                                О нас
                               </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_developers"></i>
                                </div>
                                <div class="label">
                                Сотрудники
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_gallery"></i>
                                </div>
                                <div class="label">
                                Галерея
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <i class="nav_icon nav_icon_method"></i>
                                </div>
                                <div class="label">
                                Методики
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <div class="icon">
                                <i class="nav_icon nav_icon_contact"></i>
                            </div>
                                <div class="label">
                                Контакты
                                </div>
                            </a>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
