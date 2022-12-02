<?php
//1.Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...

for ($NI = 1; $NI < 150; $NI = $NI + 2) {
   echo "<b> $NI</b>";
}

//2.Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers

$a = 0;
while ($a < 500) {
   echo '<br>' . "Je dois faire des sauvegardes régulières de mes fichiers" . '<br>';
   $a++;
}
//..
for ($i = 0; $i < 500; $i++) {
   echo '<br>' . "Je dois faire des sauvegardes régulières de mes fichiers" . '<br>';
}
//..
$a = 0;
do {
   echo '<br>' . "Je dois faire des sauvegardes régulières de mes fichiers" . '<br>';
   $a++;
} while ($a < 500);

//3.Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant :

$x = 12;
$y = 12;

?> <table border>
   <thead>
      <tr>
         <th></th>
         <?php
         for ($i = 0; $i <= $x; $i++) { ?>

            <th> <?= $i ?> </th>
         <?php }
         ?>
      </tr>
   </thead>
   <tbody>
      <?php for ($row = 0; $row <= $x; $row++) { ?>
         <tr>
            <th><?= $row ?></th>
            <?php for ($col = 0; $col <= $y; $col++) { ?>
               <td><?= $row * $col ?></td>

            <?php } ?>
         </tr>
      <?php } ?>
   </tbody>

</table>