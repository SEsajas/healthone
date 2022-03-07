<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM product WHERE category_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product" );
    return $result;
}

function getAllProducts(int $categoryId):array
{
    global $pdo;
    $query=$pdo->prepare("SELECT product.id, product.name, product.picture, product.category_id AS categories_name 
                                FROM product 
                                JOIN categories
                                ON product.category_id = categories.id
                                WHERE category_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product" );
    return $result;
}

function addProduct($name,$categoryId,$description,$picture){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO product (name , category_id ,description, picture) VALUES (:name,:category_id,:description,:picture)');
        $query->bindParam('name',$name);
        $query->bindParam('category_id',$categoryId);
        $query->bindParam('description',$description);
        $query->bindParam('picture',$picture);

        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function removeProduct($id){
    try{
        global $pdo;
        $query=$pdo->prepare('DELETE FROM product WHERE id = :id');
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function updateProduct($newName,$newCategoryId,$newDescription,$id){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE product SET
                                                         name=:name,
                                                         category_id=:category_id,
                                                         description=:description,
                                                         WHERE id=:id');
        $query->bindParam('name',$newName);
        $query->bindParam('category_id',$newCategoryId);
        $query->bindParam('description',$newDescription);
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function getProduct(int $productId)
{
    global $pdo;
    try
    {
        $query=$pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam("id", $productId);
        $query->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $query->execute();
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $query->fetch();
}

function getProductAdmin($product_id){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT product.* , category.name AS category_name 
                                                         FROM product
                                                         JOIN category
                                                         ON product.category_id=category.id WHERE product.id =:id');
        $query->bindParam('id',$product_id);
        $query->execute();
        $product=$query->fetchAll(PDO::FETCH_CLASS);

        return $product;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
function getAdminProducts(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT product.* , category.name AS category_name 
                                                         FROM product
                                                         JOIN category
                                                         ON product.category_id=category.id');
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS);

        return $products;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
