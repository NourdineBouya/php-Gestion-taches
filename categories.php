<?php

require_once 'db.php';

$stmt = $conn->query("SELECT * FROM categories");

if (isset($_POST['addCategorie'])) {
    $nomCategorie = $_POST['nomCategorie'];
    $sql =  "INSERT INTO categories (nomCategorie) VALUES  (:nomCategorie)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nomCategorie', $nomCategorie);
    $stmt->execute();
    header('Location:categories.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>To do</title>
</head>

<body>
    <!-- Navbar -->
    <div class="flex">
        <div class=" w-2/12">
            <?php
            require_once('sidebare.php')
            ?>
        </div>

        <div class="w-10/12">
            <?php
            require_once('Navbar.php')
            ?>

            <form action="" class="p-10 space-x-4" method="POST">
                <label for="">Nom de La categorie : </label>
                <input type="text" name="nomCategorie" id="" class="border px-10 py-1 rounded-md">
                <button type="submit" name="addCategorie" class="rounded-md bg-blue-600 text-white  px-5 py-1 font-bold"> + Enregistrer</button>
            </form>
            <div class="flex space-x-4 p-10">
                <?php foreach ($stmt as $categorie) { ?>
                    <p class="bg-black text-white  font-bold py-1 px-4 rounded-full">
                        <?php $categorie->nomCategorie ?>
                    </p>
                <?php } ?>
            </div>
        </div>


</body>

</html>