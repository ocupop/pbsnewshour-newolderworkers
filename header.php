<?php

// All chapters.
$chapters = array(
  '1' => array('title' => 'Rethinking Retirement',               'slug' => '1-rethinking-retirement' ),
  '2' => array('title' => 'A Snapshot',                          'slug' => '2-a-snapshot' ),
  '3' => array('title' => 'Working for the Nest Egg',            'slug' => '3-working-for-the-nest-egg' ),
  '4' => array('title' => 'Working in &lsquo;Retirement&rsquo;', 'slug' => '4-working-in-retirement' ),
  '5' => array('title' => 'Moving Forward',                      'slug' => '5-moving-forward' )
  );

// Deduce the current chapter from the script name including this file.
$current_chapter = $chapters[substr($_SERVER["PHP_SELF"], 1, 1)];

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PBS NewsHour: The Retiring of Retirement</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="http://fast.fonts.com/jsapi/9d4a68ce-e7a7-41f7-abd3-f2da36d975fa.js"></script>
</head>

<body class="chapter-<?php echo $current_chapter['slug']; ?>">

<!--[if lt IE 8]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

<header class="site_header <?php echo $current_chapter == '1' ? 'big' : null; ?>">
  <div class="contents">
    <p>PBS NewsHour Presents</p>
    <hr>
    <h1><small>The</small> <em>R</em><span>etiring</span> <small>of</small> <em>R</em><span>etirement</span></h1>
    <nav>
      <ul>
<?php
foreach ($chapters as $chapter)
  echo "\t" . '<li><a href="/chapter-' . $chapter['slug'] . '">' . $chapter['title'] . '</a></li>' . "\n";
?>
      </ul>
    </nav>
  </div>
</header>

<article>

