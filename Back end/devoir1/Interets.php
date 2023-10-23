<?php
$Interets = [
    'Programmation créative',
    'Musique : Pratique de la guitare et de la composition musicale',
    'Randonnée : Exploration des magnifiques paysages naturels en Belgique et ailleurs',
];
?>
<h3>Interets<?= count($Interets) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($Interets as $interet): ?>
        <li><?= $interet; ?></li>
        <li><?php echo $interet; ?></li>
    <?php endforeach; ?>
</ul>
