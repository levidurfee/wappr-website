<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
<?php
  $description = "The Wappr team. Some of the members don't want their names listed.";
  $modified = date("Y-m-d H:i:s.", filemtime('index.php'));
?>
  <title>The Team - Wappr</title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="author" content="wappr team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content= "Wappr" />
  <meta property="og:image" content="https://tlcdn.net/i/1/11445041693.png" />
  <meta property="og:url" content="https://wappr.co/the-team/" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="wappr, web, developers, projects, php, ticket, system" />
  <meta name="description" content="<?php echo $description; ?>" />
  <meta http-equiv="last-modified" content="<?php echo $modified; ?>">
  <link rel='canonical' href='https://wappr.co/the-team/' />
  <link href="/styles.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
    <div id="header">
        <h1>The Team</h1>
    </div><!-- /#header -->
    <div id="content">
        <p class="lead"><?php echo $description; ?></p>
        <h2>Levi Durfee</h2>
        <h3>Project Lead</h3>
        <p>Levi has been writing PHP since 2000 and has experienced all sorts of challenges, some he is still trying to figure out.</p>
        <h2>Pretty Boy</h2>
        <p>Pretty boy is good at graphic design and event better at HTML/CSS/jQuery.</p>
    </div><!-- /#content -->
    <div id="footer">
        <p>Copyright &copy; wappr.co 2015.</p>
    </div><!-- /#footer -->
  <!-- <?php echo php_uname(); ?> -->
</body>
</html>
