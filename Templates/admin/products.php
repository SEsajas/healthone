<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
 $products = getAdminProducts();
?>
<body>
<main>
    <br>
    <div>
        <h1>Welkom bij Health One Admin producten</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/admin/addProduct"><button class="btn btn-outline-secondary yellow btn-lg">Add</button></a>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th class="text-center">Foto</th>
                <th class="text-center">Naam product</th>
                <th class="text-center">Naam category</th>
                <th class="text-center">Details veranderen</th>
                <th class="text-center">Product verwijderen</th>
            </tr>
            <tbody>
            <!--        loop vanaf hier-->
            <?php
            foreach ($products as $product){
                echo"
    <tr>
            <td>
<!--                hier moet de image van de item-->
                <img class='w-25 h-25' src='$product->picture' alt='placeholder'>
            </td>
            <td>
<!--                hier moet de naam van het product-->
                <p>$product->name</p>
            </td>
            <td>
<!--                hier moert de prijs van het product-->
                <p>$product->category_name</p>
            </td>
            <td>
<!--                hier komt de button om te editen-->
                <a href='/admin/update/$product->id'><button class='btn btn-outline-primary'>Update</button></a>
            </td>
            <td>
<!--                hier komt de button om het product te deleten-->
                <a href='/admin/deleteProduct/$product->id'><button class='btn btn-outline-danger'>Delete</button></a>
            </td>
        </tr>
    
    ";
            }
            ?>
            <!--        loop eindigt hier-->
            </tbody>
        </table>
    </div>
</main>
<?php
include_once ('defaults/footer.php');
?>
</body>
</html>
