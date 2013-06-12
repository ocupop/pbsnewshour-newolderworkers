<?php

// $chapter = current chapter number

// All chapters.
$chapter_list = array(
  1 => array( 'title' => 'Rethinking Retirement',               'slug' => 'chapter-1-rethinking-retirement' ),
  2 => array( 'title' => 'A Snapshot',                          'slug' => 'chapter-2-a-snapshot' ),
  3 => array( 'title' => 'Working for the Nest Egg',            'slug' => 'chapter-3-working-for-the-nest-egg' ),
  4 => array( 'title' => 'Working in &lsquo;Retirement&rsquo;', 'slug' => 'chapter-4-working-in-retirement' ),
  5 => array( 'title' => 'Moving Forward',                      'slug' => 'chapter-5-moving-forward' )
  );

$current_chapter = $chapter_list[$chapter];

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
  <meta property="og:title" content="PBS NewsHour: New Adventures for Older Workers" />
  <meta property="og:url" content="PBS NewsHour: New Adventures for Older Workers" />
  <meta property="og:title" content="PBS NewsHour: New Adventures for Older Workers" />
  <meta property="og:type" content="article"/>
  <meta property="og:site_name" content="NewsHour" />
  <meta property="og:description" content="92% of Americans think there's a retirement crisis. And they're right." />
  <meta property="og:image" content="http://www.pbs.org/newshour/new-older-workers/img/share-facebook-1.jpg" />
  <meta property="og:image" content="http://www.pbs.org/newshour/new-older-workers/img/share-facebook-2.jpg" />
  <meta property="og:image" content="http://www.pbs.org/newshour/new-older-workers/img/share-facebook-3.jpg" />
  <meta property="og:image" content="http://www.pbs.org/newshour/new-older-workers/img/share-facebook-4.jpg" />

  <meta name="twitter:site" content="@NewsHour" />
  <meta name="twitter:url" content="http://www.pbs.org/newshour/new-older-workers/" />
  <meta name="twitter:title" content="PBS NewsHour: New Adventures for Older Workers">
  <meta name="twitter:image" content="http://www.pbs.org/newshour/new-older-workers/img/share-facebook-1.jpg"/>
  <meta name="twitter:description" value="92% of Americans think there's a retirement crisis. And they're right." />
  <meta name="twitter:card" value="summary" />

  <meta name="description" content="92% of Americans think there's a retirement crisis. And they're right." />

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <title>PBS NewsHour: New Adventures for Older Workers</title>
  <link rel="stylesheet" href="http://www-tc.pbs.org/newshour/new-older-workers/css/style.css">
  <script src="http://www-tc.pbs.org/newshour/new-older-workers/js/vendor/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="http://fast.fonts.com/jsapi/9d4a68ce-e7a7-41f7-abd3-f2da36d975fa.js"></script>
</head>

<body class="<?php echo $current_chapter['slug']; ?>">

<!--[if lt IE 8]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

<header class="site_header <?php echo $chapter !== 1 ? 'shown' : null; ?>">
  <div class="contents">
    <a class="pbs">PBS</a>
    <a class="title" href="./"><h1><em>New Adventures</em> <small>for</small> <em>Older Workers</em></h1></a>
    <nav>
      <ul>
        <?php
        foreach ($chapter_list as $index => $ch) {
          echo '<li';
          echo $chapter == $index ? ' class="current_chapter"' : null;
          echo '><a href="' . $ch['slug'] . '">' . $ch['title'] . '</a></li>';
        }
        ?>
      </ul>
    </nav>
  </div>
</header>

<article>
