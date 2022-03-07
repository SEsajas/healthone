<?php
global $params;

if (!isMember())
{
    logout();
    header("location:/home");
}else
{
    switch ($params[2])
    {
        case 'home':
            $titleSuffix = ' | Home';
            include_once "../Templates/member/home.php";
            break;
        case 'products':
            $titleSuffix = ' | Products';
            include_once "../Templates/member/products.php";
            break;
        // Home page
        default:
            $titleSuffix = ' | Home';
            include_once "../Templates/member/home.php";

    }
}