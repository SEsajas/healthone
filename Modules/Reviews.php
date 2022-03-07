<?php
function postReviews(int $productId)
{
    global $pdo;
    $productCheck = $_POST['product_id'];
    if (intval($productCheck) === $productId){
        $query = $pdo->prepare('INSERT INTO review(product_id, name, description, id)
                                      VALUES (:product_id, :name, :description, :id)');

        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_SANITIZE_NUMBER_INT);
        $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'reviewtext', FILTER_SANITIZE_STRING);

        $query->bindParam(':product_id', $product_id,PDO::PARAM_INT);
//        $query->bindParam(':rating', $rating,PDO::PARAM_INT);
        $query->bindParam(':name', $name,PDO::PARAM_STR);
        $query->bindParam(':description', $description,PDO::PARAM_STR);

        $query->execute();

// Empty the post
        $_POST = [];
//        return ['return' => true, 'message' =>''];
    };

//    return ['return' => false, 'message' =>''];
}
function getReviews(int $product_id)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM review WHERE product_id = :id");
    $query->bindParam("id", $product_id);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product" );
    return $result;
}




//$query->execute();
//$result=$query->fetchAll(PDO::FETCH_CLASS,"Review" );
//return $result;


