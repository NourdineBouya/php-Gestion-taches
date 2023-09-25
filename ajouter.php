<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require_once 'Navbar.php' ?>
    <div class="flex">
        <div class="w-2/12">
            <?php require_once 'sidebare.php' ?>
        </div>

        <form action="" class=" w-6/12 rounded-md mx-auto flex flex-col gap-5 m-10 p-10  ">
            <label for="">Tache : </label>
            <input type="text" class="border  rounded-md  py-2 px-10" placeholder="Titre de la tache .. ">
            <label for="">Descreption : </label>
            <input type="text" class="border  rounded-md py-2 px-10 " placeholder="Descreption de la tache .. ">
            <label for="">Utilisateur : </label>
            <select name="" id="" class="border  rounded-md py-2 px-10 ">
                <option value="">Utilisateur</option>
                <option value="">Nourdine</option>
                <option value="">Mohamed</option>
            </select>
            <label for="">Priorite : </label>
            <select name="" id="" class="border  rounded-md py-2 px-10 ">
                <option value="">Type de Tache</option>
                <option value="">Urgent</option>
                <option value="">Meduim</option>
                <option value="">Daily</option>
            </select>
            <label for="">Deadline</label>
            <input type="date" name="" id="" class="border  rounded-md py-2 px-10 ">
            <button type="submit" name="ajouter" class="bg-blue-500 text-white font-bold py-1 w-1/3 rounded-md">Ajouter</button>
        </form>
    </div>
</body>

</html>