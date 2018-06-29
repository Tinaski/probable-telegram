<?php
  session_start();
  require_once "pdo.php";
    if(isset($_GET['submit'])){
    if(preg_match("/^[  a-zA-Z]+/", $_GET['symbol'])){
        $symbol = (!empty($_GET['symbol'])) ? $_GET['symbol'] : "";
        $sql = 'SELECT symbol, genename, chromosome FROM genes WHERE symbol=:keyword ORDER BY pubyear DESC LIMIT 1';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':keyword',  $symbol, PDO::PARAM_STR);
        $stmt->execute();
        if(!$stmt->rowCount()){
          //if the results is null
        $result = "no result found";}else{
          //found some row according to your search
          //do some operations based on your application
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /*    $num=0;
        foreach($result as $value)
        {
          $num++;
        } */
}}}
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
<h1>Search Result</h1>
</div>

  <div class="well">
  <div class="container">
    <div class="col-md-7">
  <?php
    if (isset($rows)){
      echo("<table border='1' class='table table-bordered table-striped table-hover'>");
      echo("<thead><tr><td colspan='4'>Gene information</td></tr></thead><tbody>");
      echo("<tr><th class='text-center'>");
      echo("Gene symbol");
      echo("</td><th class='text-center'>");
      echo("Epilepsy subtype");
      echo("</td><th class='text-center'>");
      echo("Comobidities");
      echo("</td><th class='text-center'>");
      echo("Related articles");
      echo("</td></tr>\n");
  foreach ( $rows as $row ) {
      echo("<tr><td>");
      echo(htmlentities($row['symbol']));
      echo('<a href="detail.php?symbol='.$row['symbol'].'"> (info)</a>');
      echo("</td><td>");
      echo(htmlentities($row['genename']));
      echo('<a href="detail.php?symbol='.$row['symbol'].'"> (info)</a>');
      echo("</td><td>");
      echo(htmlentities($row['chromosome']));
      echo("</td><td>");
      echo(htmlentities($row['chromosome']));
      echo("</td></tr>\n");
  }
  echo("</tbody></table>\n");
  }else if(isset($result)){
    echo($result);
    unset($result);
  }
  ?>
  </div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
