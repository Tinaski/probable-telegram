<?php
  session_start();
require_once "pdo.php";
// Insert into database
if ( isset($_POST['nam']) && isset($_POST['ema'])
     && isset($_POST['pmi']) && isset($_POST['sym'])) {
       // Data Validation
       if ( strlen($_POST['nam']) < 1 || strlen($_POST['ema']) < 1 ||
     strlen($_POST['pmi']) < 1 || strlen($_POST['sym']) < 1 ) {
         $_SESSION['error'] = "First 4 fields are required";
         header( 'Location: submit.php' ) ;
         return;
       } else if ( is_numeric($_POST['pmi']) == false){
         $_SESSION['error'] = "pmid must be numeric";
         header( 'Location: submit.php' ) ;
         return;
       } else if ( strpos($_POST['ema'],'@') === false ) {
        $_SESSION['error'] = 'E-mail incorrect';
        header("Location: submit.php");
        return;
      } else  {
         $sql = "INSERT INTO comments (name, email, pmid, symbol, comments)
                VALUES (:mk, :md, :yr, :mi, :co)";
         $stmt = $pdo->prepare($sql);
         $stmt->execute(array(
             ':mk' => $_POST['nam'],
             ':md' => $_POST['ema'],
             ':yr' => $_POST['pmi'],
             ':mi' => $_POST['sym'],
             ':co' => $_POST['com']));
         $_SESSION['success'] = "Success";
         header( 'Location: submit.php' ) ;
         return;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>EpilepsyDB</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
a{
  color: dimgray;
  text-decoration: none;
}
a:hover{
  color: black;
}

.jumbotron{
    background-color:grey;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
.navbar-header img{
  width: auto;
  height: 50px;
}
.footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}
.container .text-muted {
  margin: 20px 0;
}
</style>
</head>

<body>
<!-- Collapsible Navigation Bar -->
<div class="container">

<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
      <a class="pull-left" href="#"><img src="logosm.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Browse <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="browsegene.php">Browse by Genes</a></li>
                <li><a href="browsedisease.php">Browse by Diseases</a></li>
                <li><a href="browsecommobidity.php">Browse by Commobidities</a></li>
                <li class="divider"></li>
                <li><a href="browsepathway">Browse Pathways</a></li>
                <li><a href="browsepathway">Browse Functions</a></li>
            </ul>
        <li><a href="submit.php">Submit</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>

      <!-- navbar-left will move the search to the left -->
      <form class="navbar-form navbar-right" role="search"
      method="get" id="searchform" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"
          name="symbol">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Go</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br>

<div class="container">
<div class="page-header">
<h1>Submit</h1>
</div>
<div class="well">
<!-- INPUT GROUPS -->
<div class="container">

<?php
if ( isset($_SESSION["success"]) ) {
     echo('<p style="color:green">'.htmlentities($_SESSION["success"])."</p>\n");
     unset($_SESSION["success"]);
 }
if ( isset($_SESSION["error"]) ) {
    echo('<p style="color:red">'.htmlentities($_SESSION["error"])."</p>\n");
    unset($_SESSION["error"]);
}
?>
<form method='post'>
<!-- We can add text or buttons on the right and/or left of input elements. Use input-group-lg or input-group-sm for input sizing -->
<div class="input-group input-group-md col-xs-12 col-sm-4">
  <span class="input-group-addon">Your name</span>
  <input type="text" class="form-control" placeholder="enter your full name" name="nam">
</div><br>
<div class="input-group input-group-md col-xs-12 col-sm-4">
  <span class="input-group-addon">E-mail   </span>
  <input type="text" class="form-control" placeholder="enter your e-mail" name="ema">
</div><br>
<div class="input-group input-group-md col-xs-12 col-sm-4">
  <span class="input-group-addon">PMID</span>
  <input type="text" class="form-control" placeholder="enter pmid of the reference article" name="pmi">
</div><br>
<div class="input-group input-group-md col-xs-12 col-sm-4">
  <span class="input-group-addon">Symbol   </span>
  <input type="text" class="form-control" placeholder="enter gene symbol or other molecule symbol" name="sym">
</div><br>
<div class="input-group input-group-md col-xs-12 col-sm-4">
  <span class="input-group-addon">Comment  </span>
  <textarea class="form-control" rows='4' placeholder="enter comment here" name="com"></textarea>
</div><br>
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
</div>
</div>
</div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
