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
<script src="jquery.min.js"></script>
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
    background-color:#f5f5f5;
    color:#777777;
    border: 1px solid #ddd;
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
  position: relative;
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

        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Browse <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="browsegene.php">Browse by Genes</a></li>
                <li><a href="browsedisease.php">Browse by Diseases</a></li>
                <li><a href="browsecomorbidity.php">Browse by Commobidities</a></li>
                <li class="divider"></li>
                <li><a href="browserna.php">Browse RNAs</a></li>
                <li><a href="browseepi.php">Browse Epigenetic Changes</a></li>
                <li><a href="browsetf.php">Browse Transcriptive Factors</a></li>
            </ul>

        <li><a href="about.php">Help</a></li>
        <li><a href="submit.php">Feedback</a></li>
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
<!--<h5 class="text-muted">An integrated human epilepsy database</h5>
-->
<h1>Welcome to EpilepsyDB <small>  An integrated human epilepsy database</small></h1>
</div>

<div class="jumbotron">
    <h3>Why EpilepsyDB?</h3>
    <p><small>The goal is to collate all association studies in epilepsy, whether published or unpublished.
      This will help researchers in this area identify all the available gene-disease associations,
      as well as facilitate future meta-analyses and studies on publication bias.
      It is also hoped that it will foster collaboration between the different epilepsy genetics groups
      around the world, and faciliate formation of a network of investigators in epilepsy genetics.</small>

</p>
</div>
</div>

<!-- Thumbnails -->
<div class="container">
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="thumbnail">
      <div class="caption">
        <h3> Statistics</h3>
        <p><ul><li>Number of articles: 317</li>
              <li>Number of genes: 78</li>
              <li>Number of epilepsy phenotypes: 42</li>
              <li>Number of comobidities: 48</li></ul></p><br><br>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="thumbnail">
      <div class="caption">
        <h3> Links</h3>
         <ul>
            <li><a href="https://www.ncbi.nlm.nih.gov/pubmed/?term=epilepsy">
              Search on PubMed</a></li>
            <li><a href="https://www.epilepsydiagnosis.org/">ILAE Commission</a></li>
            <li><a href="https://www.ncbi.nlm.nih.gov/pubmedhealth/PMHT0023036/">
              PubMed Health</a></li>
            <li><a href="https://medlineplus.gov/epilepsy.html#cat_78">MedlinePlus</a></li>
          </ul>
          <br><br>
      </div>
      </div>
  </div>
</div>
</div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
