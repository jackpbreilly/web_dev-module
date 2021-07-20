<?php
    include("view/nav.php");
    include("view/register.php");

    switch(key($_GET)) {
            case 'article':
                include("view/article.php");
                include("view/comments.php");
                break;
            case 'category':
                include("view/category.php");
                break;
            case 'login':
                include("controller/login.php");
                break;
            case 'logout':
                include("controller/logout.php");
                break;
            case 'register':
                include("controller/register.php");
                break;
            default:
                include("view/home.php");
                break;
        }
?>