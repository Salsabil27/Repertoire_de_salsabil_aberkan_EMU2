<?php
$experiences = [
    [
        'date' => 'Avril 2016 - Présent',
        'info' =>'Développeur Front-End, Société TechVision, Bruxelles',
        'detail' =>  [ 'Conception et développement d\'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript',
    'Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.',
    'Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.',
    'Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.',
    'Intégration de services RESTful et utilisation de Git pour le contrôle de version.'
    ]
    ],
    [
        'date' => 'Juin 2015 - Mars 2016',
        'info' =>'Stagiaire en Développement Web, Startup WebCraft, Liège',
        'detail' =>  [ 'Assistance dans la création dune application web responsive utilisant les dernières technologies front-end.',
    'Participation à l\'optimisation des performances du site et à l\'assurance de sa compatibilité avec différents navigateurs.',
    'Contribution à la mise en place d\'une méthodologie de développement Agile au sein de l\'équipe.'
    ]
    ],
];

?>
<?php if (count($experiences)) { ?>
 <h3>expérience<?php if (count($experiences) > 1) { echo 's'; } ?></h3>
  <ul>
   <?php foreach ($experiences as $experience) { ?>
  <li>
 <?= $experience['date'] ?> : <b><?= $experience['info'] ?></b>
  <ul>
   <?php foreach ($experience['detail'] as $detail) { ?>
 <li><?= $detail ?></li>
   <?php } ?>
  </ul>
  </li>
   <?php } ?>
 </ul>
<?php } ?>
