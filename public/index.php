<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Times.php';
require '../Modules/Reviews.php';
require '../Modules/Subscriptions.php';
require '../Modules/Users.php';
require '../Modules/Login.php';
require '../Modules/Logout.php';

session_start();

var_dump($_SESSION);
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    // Show all categories
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categorieën.php";
        break;

    // All equipment in the category
    case 'category':
        $titleSuffix = ' | Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            include_once "../Templates/sportapparaten.php";
        }else{
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
            break;

// Specific equipment in the category
        case 'product':
            if (isset($_GET['id'])) {
                $productId = $_GET['id'];
                $product = getProduct($productId);
                $name = getCategoryName($product->category_id);
                $titleSuffix = ' | ' . $product->name;
               // $reviewGiven = ['result' => NULL, 'message' => ''];
                if (isset($_POST['form-sort']) && $_POST['form-sort'] === 'review'){
                    $reviewGiven = postReviews($productId);
                }
                    $reviews=getReviews($productId);
                    //var_dump($reviews); die;
                    include_once "../Templates/sportapparaat_detail.php";
                }else{
                $titleSuffix = ' | Home';
                include_once "../Templates/home.php";
            }
        break;
        // Contact page
    case 'contact':
        $titleSuffix = ' | Contact';
        $times = getTimes();
        include_once "../Templates/contact.php";
        break;
        // About us page
    case 'overOns':
        $titleSuffix = ' | Over Ons';
        $packages = getPackages();
        include_once "../Templates/overOns.php";
        break;
        // News feed page
    case 'nieuwsFeed':
        $titleSuffix = ' | Nieuws';
        include_once "../Templates/nieuwsFeed.php";
        break;
    case 'register':
        $titleSuffix = ' | Register';
//FIRST check if form fields are set
    //var_dump($_POST);
    if (isset($_POST['first_name']) && !empty($_POST['first_name'])){
        if (isset($_POST['last_name']) && !empty($_POST['last_name'])){
            if (isset($_POST['email']) && !empty($_POST['email'])){
                if (isset($_POST['password']) && !empty($_POST['password'])){
                    if (isset($_POST['birthday']) && !empty($_POST['birthday'])){
                        $userExist = findEmail($_POST['email']);
                        $newUser = makeUser();
                    }
                }
            }
        }
    }
        include_once "../Templates/register.php";
        break;
    case 'admin':
        include_once 'admin.php';
        break;
    case 'member':
        include_once 'member.php';
        break;
    // Log in page
    case 'logIn':
        $titleSuffix = ' | Log in';
        if (isset($_POST['verzenden']))
        {
        $result =checkLogin();

            switch ($result)
            {
                case 'ADMIN' :
                    header("location:/admin/home");
                    include_once '../Templates/admin/home.php';
                    break;
                case 'MEMBER' :
                    header("location:/member/home");
                    include_once '../Templates/member/home.php';
                    break;
                case 'FAILURE' :
                    $message = "Email of wachtwoord is niet correct!";
                    include_once "../Templates/logIn.php";
                    break;
                case 'INCOMPLETE' :
                    $message = "Formulier niet volledig ingevuld";
                    include_once "../Templates/logIn.php";

            }
        }
        else
        {
            include_once "../Templates/logIn.php";

        }
//        if (isset($_POST['verzenden'])) {
//            //var_dump($_POST);
//                $loggedUser = getUser($_POST['email'] ,$_POST['password']);
//                if(!$loggedUser) {
//                    include_once "../Templates/logIn.php";
//                } else {
//                    $titleSuffix = ' | Welcome';
//                    include_once "../Templates/welcome_user.php";
//                }
//        } else {
//            include_once "../Templates/logIn.php";
//        }
        break;
    case 'logout':
        logOut();
        header("Location:/home");
        break;
        // Home page
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";

}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
