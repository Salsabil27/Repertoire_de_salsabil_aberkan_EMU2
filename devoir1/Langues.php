<?php
$Langues = [
    'Français (courant)',
    'Anglais (avancé)',
    'Néerlandais (avancé)'
];
?>
<h3>Langues<?= count($Langues) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($Langues as $Langue): ?>
        <li><?= $Langue; ?></li>
        <li><?php echo $Langue; ?></li>
    <?php endforeach; ?>
</ul>