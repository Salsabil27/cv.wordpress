<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets\css\style.css">
</head>
<body>
 <h1>Curriculum Vitae</h1>
   <hr>
   <h3> Salsabil Aberkan 😍</h3>
   <img width="300" src="<?php echo get_template_directory_uri(); ?>/assets/img/sanji.jpg" 
        />

    <h2>Information Personnelles</h2>
<ul>
  <li>Nom : Aberkan</li>
   <li>Prénom : Salsabil</li> 
   <li>Date de Naissance : 27 juin 2002 (21 ans)</li>
   <li>Adresse : 45, Rue saint martin , 1080 Molenbeek saint jean, Belgique</li> 
    <li>Téléphone : <a href="telto:0032486793912">+32 486 79 39 12 </a></li>
   <li> Email :<a href="mailto:Aberkan.s@hotmail.com">Aberkan.s@hotmail.com</a></li>
</ul>
    <h2>formations</h2>
    <ul>
    <li>2020-2021: Arts Martiaux et Techniques de Combat de Jambe</li>
    <li>2022-2023: Certificat en Marketing en Ligne</li>
</ul>
   
   
    <?php 
   $xproList = new WP_Query([
     'post_type' => 'xpro',
   ]);
   ?>
    <?php if ($xproList->have_posts()):?>
    <h2>Expériences Professionnelles</h2>
    <ul>
    <?php while ($xproList->have_posts()): $xproList->the_post(); ?> 
    <li><?php the_title(); ?></li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>

   <?php 
   $skillsList = new WP_Query([
     'post_type' => 'skills',
   ]);
   ?>
    <?php if ($skillsList->have_posts()):?>
    <h2>Compétences</h2>
    <ul>
    <?php while ($skillsList->have_posts()): $skillsList->the_post(); ?> 
    <li><?php the_title(); ?></li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>

    <?php 
   $languesList = new WP_Query([
     'post_type' => 'langues',
   ]);
   ?>
    <?php if ($languesList->have_posts()):?>
    <h2>Langues</h2>
    <ul>
    <?php while ($languesList->have_posts()): $languesList->the_post(); ?> 
    <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
    <?php endif; ?>

    <?php 
   $InteretList = new WP_Query([
     'post_type' => 'interet',
   ]);
   ?>
    <?php if ($interetList->have_posts()):?>
    <h2> Centres d'Intérêt</h2>
    <ul>
    <?php while ($interetList->have_posts()): $interetList->the_post(); ?> 
    <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
    <?php endif; ?>



  <?php get_footer(); ?>
</body>
</html>

