<?php
include(__DIR__ . "/_/includes/init.php");


$adjective = ucwords($adjectives[rand(0,count($adjectives)-1)]);
$noun = ucwords($nouns[rand(0,count($nouns)-1)]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="_/css/global.css" />
    </head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Project Codename Generator</h2>
            <p>Having trouble thinking of a codename for your project?<br />
            Here's a free one just for you!</p>
            <p class="footnote">(Refresh the page to generate a new one)</p>
            <h1><?= $adjective . " " . $noun?></h1>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <p class="text-muted">
            A very silly project by <a href="http://mark.biek.org" class="btn btn-xs btn-info" target="_blank">Mark Biek</a>
            </p>
        </div>
    </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6890403-2', 'auto');
  ga('send', 'pageview');

  </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
