<?php

require_once 'db.php';

$stmt = $conn->query("SELECT * FROM users");

if (isset($_POST['addUser'])) {
    $nomComplet = $_POST['nomComplet'];
    $position = $_POST['position'];
    $departement = $_POST['departement'];
    $shiftTime = $_POST['shiftTime'];

    $sql =  "INSERT INTO users (nomComplet, position, departement, shiftTime ) VALUES 
    (:nomComplet , :position , :departement, :shiftTime )";


    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nomComplet', $nomComplet);
    $stmt->bindParam(':position', $position);
    $stmt->bindParam(':departement', $departement);
    $stmt->bindParam(':shiftTime', $shiftTime);


    $stmt->execute();

    header('Location:users.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Car Rental</title>
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
            <form action="users.php" method="POST" class="p-10   grid grid-cols-4  gap-3 max-w-6xl mx-auto">
                <label for="">Nom Complet : </label>
                <input type="text" name="nomComplet" id="" class="border px-10 py-1 rounded-md">
                <label for="">Position : </label>
                <input type="text" name="position" id="" class="border px-10 py-1 rounded-md">
                <label for=""> Departement : </label>
                <input type="text" name="departement" id="" class="border px-10 py-1 rounded-md">
                <label for="">Shift Time : </label>
                <input type="text" name="shiftTime" id="" class="border px-10 py-1 rounded-md">
                <button type="submit" name="addUser" class="rounded-md bg-blue-600 text-white  px-5 py-1 font-bold"> + Enregistrer</button>
            </form>
            <div class="relative overflow-x-auto p-10">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nom Complet
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Position
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Departement
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Shift Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stmt as $user) { ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $user->nomComplet ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $user->position ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $user->departement ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $user->shiftTime ?>
                                </td>
                                <td class="px-6 py-4 flex items-center">
                                    <img src="./images/edit.png" alt="" class="h-6 w-6">
                                    <img src="./images/trash.png" alt="" class="h-6 w-6">
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


</body>

</html>