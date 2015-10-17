<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
<?php
  $description = "A group of web guys coming together to make web applications and useful packages.";
  $modified = date("Y-m-d H:i:s.", filemtime('index.php'));
?>
  <title>Wappr</title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="author" content="wappr team">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content= "Wappr" />
  <meta property="og:image" content="https://tlcdn.net/i/1/11445041693.png" />
  <meta property="og:url" content="https://wappr.co/" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="wappr, web, developers, projects, php, ticket, system" />
  <meta name="description" content="<?php echo $description; ?>" />
  <meta http-equiv="last-modified" content="<?php echo $modified; ?>">
  <link rel='canonical' href='https://wappr.co/' />
  <style>
    html {
        height:100%;
    }
    body {
        background-color:#2ecc71;
        height:100%;
        position:relative;
        margin:0;
        padding:0;
        font-size:62.5%;
    }
    #header {
      background-color: #2c3e50;
      border-bottom:5px solid #27ae60;
    }
    #content {
      background-color:#2c3e50;
      border-bottom:5px solid #27ae60;
      min-height:50%;
    }
    #footer {
      background-color: #2c3e50;
      border-bottom:5px solid #27ae60;
      bottom:;
    }
    #header, #content, #footer {
      width:80%;
      margin: auto;
      padding:2.5%;
    }
    h1 {
        font-size:4.8em;
        margin:0;
        padding:0;
    }
    h2 { font-size:3.8em;}
    p, li { font-size:2.5em; }
    p {margin-top:5px;}
    h1, h2, p, li, small {
        color:#ecf0f1;
        font-family: "Arial Narrow",Arial,sans-serif
    }
    .lead { font-size: 3.2em;}
    ul {
      margin-left:40px;
    }
    #footer p {
      font-size:small;
    }

    a {color:#2ecc71;}

    ::selection {
	  background: #2ecc71;
	}
	::-moz-selection {
	  background: #2ecc71;
	}

    @media screen and (max-width: 799px) {
      #header, #content, #footer {
        min-width:90%;
      }
      h1 { font-size:3.8em; }
      h2 { font-size:2.8em; }
      p, li { font-size: 1.8em;}
      ul {
        margin-left:0px;
      }
    }
  </style>
  <!--[if lt IE 9]>
  <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
    <div id="header">
        <h1>Wappr</h1>
    </div><!-- /#header -->
    <div id="content">
        <p class="lead"><?php echo $description; ?></p>
        <h2>Projects</h2>
        <p>Most of our projects will be in PHP. We will add more information about each project as we have time.</p>
        <ul>
            <li>support ticket system</li>
            <li>sqlite logging using PSR-3</li>
            <li>and more...</li>
        </ul>
        <h2>Goals</h2>
        <ul>
            <li><a href="https://secure.php.net/supported-versions.php" target="_BLANK">Develop for php 5.6.x and up</a></li>
            <li><a href="http://www.php-fig.org/" target="_BLANK">Follow PSR</a></li>
            <li>Write 100% code coverage with PHPUnit</li>
        </ul>
    </div><!-- /#content -->
    <div id="footer">
        <p>Copyright &copy; wappr.co 2015.</p>
    </div><!-- /#footer -->
  <!-- <?php echo php_uname(); ?> -->
</body>
</html>
