 <?php

    require_once 'db.php'


    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

     <title>Gestion des Taches</title>
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
             <div class="flex justify-between items-center px-40">
                 <h1 class="p-4 text-xl font-bold">Liste des Taches Plannifier</h1>
                 <a href="ajouter.php"><button class="bg-blue-600 text-white font-bold px-5 py-1 rounded-md"> + Nouvelle Tache</button></a>
             </div>
             <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 px-20">
                 <div>
                     <h1 class="bg-green-200 text-center text-xl font-bold">Planning</h1>
                     <div class="bg-white shadow-md my-2 space-y-2 p-4 rounded-md">
                         <span class="bg-red-400 px-4 py-1 text-white font-bold rounded-full">Meduim</span>
                         <h1 class="text-l font-bold">Faire sortir les cmds</h1>
                         <p class="opacity-60">Quand tu fait sortir les commandes stp fait une copy de ces feuilles</p>
                         <p class="
                         font-semibold 

                          ">-Nourdine-</p>
                         <div class="flex justify-between items-center">
                             <p>30 min</p>
                             <button>Done</button>
                         </div>
                     </div>

                 </div>
                 <div>
                     <h1 class="bg-blue-200 text-center text-xl font-bold">Encoure</h1>
                     <div class="bg-white shadow-md my-2 space-y-2 p-4 rounded-md">
                         <span class="bg-red-900 px-4 py-1 text-white font-bold rounded-full">Urgent</span>
                         <h1 class="text-l font-bold">Faire sortir les cmds</h1>
                         <p class="opacity-60">Quand tu fait sortir les commandes stp fait une copy de ces feuilles</p>
                         <p class="
                         font-semibold 

                          ">-Nourdine-</p>
                         <div class="flex justify-between items-center">
                             <p>30 min</p>
                             <button>Done</button>
                         </div>
                     </div>
                 </div>
                 <div>
                     <h1 class="bg-yellow-200 text-center text-xl font-bold">Terminer</h1>
                     <div class="bg-white shadow-md my-2 space-y-2 p-4 rounded-md">
                         <span class="bg-green-400 px-4 py-1 text-white font-bold rounded-full">Daily</span>
                         <h1 class="text-l font-bold">Faire sortir les cmds</h1>
                         <p class="opacity-60">Quand tu fait sortir les commandes stp fait une copy de ces feuilles</p>
                         <p class="
                         font-semibold 

                          ">-Nourdine-</p>
                         <div class="flex justify-between items-center">
                             <p>30 min</p>
                             <button>Done</button>
                         </div>
                     </div>
                     <div class="bg-white shadow-md my-2 space-y-2 p-4 rounded-md">
                         <span class="bg-green-400 px-4 py-1 text-white font-bold rounded-full">Daily</span>
                         <h1 class="text-l font-bold">Faire sortir les cmds</h1>
                         <p class="opacity-60">Quand tu fait sortir les commandes stp fait une copy de ces feuilles</p>
                         <p class="
                         font-semibold 

                          ">-Nourdine-</p>
                         <div class="flex justify-between items-center">
                             <p>30 min</p>
                             <button>Done</button>
                         </div>
                     </div>
                     <div class="bg-white shadow-md my-2 space-y-2 p-4 rounded-md">
                         <span class="bg-green-400 px-4 py-1 text-white font-bold rounded-full">Daily</span>
                         <h1 class="text-l font-bold">Faire sortir les cmds</h1>
                         <p class="opacity-60">Quand tu fait sortir les commandes stp fait une copy de ces feuilles</p>
                         <p class="
                         font-semibold 

                          ">-Nourdine-</p>
                         <div class="flex justify-between items-center">
                             <p>30 min</p>
                             <button>Done</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


 </body>

 </html>