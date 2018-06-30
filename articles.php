<?php
  session_start();
  require_once "pdo.php";
    if(preg_match("/^[  0-9]+/", $_GET['pmid'])){
        $pmid = (!empty($_GET['pmid'])) ? $_GET['pmid'] : "";
        $sql = 'SELECT pmid, symbol, genename, chromosome, aliases, articletitle, journalabbr, journaltitle,
        description, pubyear, researchtype, effect, ethnicity, inheritance,
        method, no_case, no_control, phenotype, category, phenotypeabbr, commo,
        sample, subcategory, transcriptid, onset FROM articles WHERE pmid=:keyword ORDER BY pubyear DESC LIMIT 1';
        $sql2 = 'SELECT DISTINCT symbol, genename, chromosome, aliases FROM articles WHERE pmid=:keyword ORDER BY pubyear DESC';
        $stmt = $pdo->prepare($sql);
        $stmt2 = $pdo->prepare($sql2);
        $stmt->bindValue(':keyword',  $pmid, PDO::PARAM_STR);
        $stmt2->bindValue(':keyword',  $pmid, PDO::PARAM_STR);
        $stmt->execute();
        $stmt2->execute();
        if(!$stmt->rowCount()){
          //if the results is null
        $result = "no result found";}else{
          //found some row according to your search
          //do some operations based on your application
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $genes =  $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $num_rows = $stmt2->rowCount();
        $row = $rows[0];
    /*    $num=0;
        foreach($result as $value)
        {
          $num++;
        } */
}}
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
<h1>References</h1>
</div>

  <div class="well">
  <div class="container">
    <div class="col-md-10">

      <table border='1' class='table table-bordered table-striped table-hover'>
        <thead><tr><td colspan='8'>References</td></tr></thead>
        <tbody><tr>
                <th class='text-center'>PubMed ID</td>
                <th class='text-center'>Associated gene/s</td>
                <th class='text-center'>Epilepsy Phenotype</td>
                <th class='text-center'>Genetic Mutation</td>
                <th class='text-center'>Comorbidities</td>
                <th class='text-center'>Ethnicity</td>
                <th class='text-center'>Description</td></tr>
                <tr>
                <td><a href=http://www.ncbi.nlm.nih.gov/pubmed/?term=<?php echo $row['pmid']; ?> target=_blank><?php echo $row['pmid']; ?></a></td>
                <td><?php
                foreach ( $genes as $gene ) {
                echo($gene['symbol']);
                echo('<br>');}
                ?></td>
          <!--      echo $row['symbol']; ?> -->
                <td><?php echo $row['phenotype']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['commo']; ?></td>
                <td><?php echo $row['ethnicity']; ?></td>
                <td><?php echo $row['description']; ?></td>
              </tr></tbody></table>

      <table border='1' class='table table-bordered table-striped table-hover' width="700px">
        <tr><td rowspan="5" width="140px"><b>Basic ref Info.</b></td>
          <td width="120px"><b>PubMed ID</b></td>
          <td><a href=http://www.ncbi.nlm.nih.gov/pubmed/?term=<?php echo $row['pmid']; ?> target=_blank><?php echo $row['pmid']; ?></td></tr>
          <tr><td width="120px"><b>Article Title</b></td>
          <td><?php echo $row['articletitle']; ?></td></tr>
          <tr><td width="120px"><b>Journal</b></td>
          <td><?php echo $row['journaltitle']; ?></td></tr>
          <tr><td width="120px"><b>Journal Abbreviation</b></td>
          <td><?php echo $row['journalabbr']; ?></td></tr>
          <tr><td width="120px"><b>Publish Year</b></td>
          <td><?php echo $row['pubyear']; ?></td></tr>

          <tr><td rowspan="<?php echo 4*$num_rows+4; ?>" width="140px"><b>Related Gene Info.</b></td>
          <?php
          foreach ( $genes as $gene ) {
          echo('<td width="120px"><b>Gene Symbol</b></td>');
          echo("<td>");
          echo($gene['symbol']);
          echo("</td></tr>");
          echo('<tr><td width="120px"><b>Gene Name</b></td>');
          echo("<td>");
          echo($gene['genename']);
          echo("</td></tr>");
          echo('<td width="120px"><b>Aliases</b></td>');
          echo("<td>");
          echo($gene['aliases']);
          echo("</td></tr>");
          echo('<tr><td width="120px"><b>Band</b></td>');
          echo("<td>");
          echo($gene['chromosome']);
          echo("</td></tr>");
          }?>
          <tr><td width="120px"><b>Category</b></td>
          <td><?php echo $row['category']; ?></td></tr>
          <tr><td width="120px"><b>Subcategory</b></td>
          <td><?php echo $row['subcategory']; ?></td></tr>
          <tr><td width="120px"><b>Effect</b></td>
          <td><?php echo $row['effect']; ?></td></tr>
          <tr><td width="120px"><b>Description</b></td>
          <td><?php echo $row['description']; ?></td></tr>

          <tr><td rowspan="3" width="140px"><b>Epilepsy<br>Comorbidities<br>Info.</b></td>
          <td width="120px"><b>Epilepsy Phenotype</b></td>
          <td><?php echo $row['phenotype']; ?></td></tr>
          <tr><td width="120px"><b>Phenotype Abbreviation</b></td>
          <td><?php echo $row['phenotypeabbr']; ?></td></tr>
          <tr><td width="120px"><b>Comorbidities</b></td>
          <td><?php echo $row['commo']; ?></td></tr>

          <tr><td rowspan="6" width="140px"><b>Research Info.</b></td>
          <td width="120px"><b>Research Type</b></td>
          <td><?php echo $row['researchtype']; ?></td></tr>
          <tr><td width="120px"><b>Method</b></td>
          <td><?php echo $row['method']; ?></td></tr>
          <tr><td width="120px"><b>Sample</b></td>
          <td><?php echo $row['sample']; ?></td></tr>
          <tr><td width="120px"><b>No_case</b></td>
          <td><?php echo $row['no_case']; ?></td></tr>
          <tr><td width="120px"><b>No_control</b></td>
          <td><?php echo $row['no_control']; ?></td></tr>
          <tr><td width="120px"><b>Ethinicity</b></td>
          <td><?php echo $row['ethnicity']; ?></td></tr>

        </table>
  </div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
