<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Wappr</title>
  <meta name="description" content="A group of web guys making stuff">
  <meta name="author" content="Levi Durfee">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
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
    }
    #header, #content, #footer {
      width:80%;
      margin: auto;
      padding:2.5%;
    }
    h1, h2, p, li {
        font-size:3.8em;
    }
    h1, h2, p, li, small {
        color:#ecf0f1;
        font-family: 'Oswald', sans-serif;
    }
    ul {
      margin-left:40px;
    }
    #footer p {
      font-size:small;
    }
    @media screen and (max-width: 799px) {
      #header, #content, #footer {
        min-width:90%;
      }
      h1, h2, p, li {
        font-size:2.8em;
      }
      ul {
        margin-left:10px;
      }
    }
  </style>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div id="header">
    <h1>Wappr</h1>
  </div>
  <div id="content">
    <p>A group of web guys coming together to make stuff.</p>
    <h2>What we know</h2>
    <ul>
      <li>websites</li>
      <li>servers</li>
      <li>things we would find useful</li>
    </ul>
  </div>
  <div id="footer">
    <p>Copyright &copy; wappr.co 2015. Don't try and contact us.</p>
  </div>
  <!-- <?php echo php_uname(); ?> -->
</body>
</html>
