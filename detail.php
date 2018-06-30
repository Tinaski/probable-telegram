<?php
  session_start();
  require_once "pdo.php";
    if(isset($_GET['symbol'])){
    if(preg_match("/^[  a-zA-Z]+/", $_GET['symbol'])){
        $symbol = (!empty($_GET['symbol'])) ? $_GET['symbol'] : "";
        $sql = 'SELECT symbol, genename, chromosome, aliases FROM articles WHERE symbol=:keyword ORDER BY pubyear DESC LIMIT 1';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':keyword',  $symbol, PDO::PARAM_STR);
        $stmt->execute();
        if(!$stmt->rowCount()){
          //if the results is null
        $result = "no result found";}else{
          //found some row according to your search
          //do some operations based on your application
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $genename = $rows[0]['genename'];
        $chromosome = $rows[0]['chromosome'];
        $aliases = $rows[0]['aliases'];
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
        <li><a href="about.php">About</a></li>
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
<h1>Gene Information</h1>
</div>


  <div class="well">
  <div class="container">
    <div class="col-md-7">
  <?php
    if (isset($rows)){
      echo("<table border='1' class='table table-bordered table-striped table-hover'>");
      echo("<thead><tr><td colspan='3'>Gene information</td></tr></thead><tbody>");
      echo("<tr><th class='text-center'>");
      echo("Gene symbol");
      echo("</td><th class='text-center'>");
      echo("Gene name");
      echo("</td><th class='text-center'>");
      echo("Chromosome");
      echo("</td></tr>\n");
  foreach ( $rows as $row ) {
      echo("<tr><td>");
      echo(htmlentities($row['symbol']));
      echo("</td><td>");
      echo(htmlentities($row['genename']));
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
  <table border='1' class='table table-bordered table-striped table-hover' width="700px">
    <tr><td rowspan="7" width="140px"><b>Basic gene Info.</b></td>
      <td width="120px"><b>Gene symbol</b></td>
      <td><a href=http://www.ncbi.nlm.nih.gov/gene/?term=<?php echo $symbol; ?> target=_blank><?php echo $symbol; ?></a></td></tr>
      <tr><td width="120px"><b>Gene name</b></td>
      <td><?php echo $genename; ?></td></tr>
      <tr><td width="120px"><b>Synonyms</b></td>
      <td><?php echo $aliases; ?></td></tr>
      <tr><td width="120px"><b>Cytomap</b></td>
      <td><a href=http://genome.ucsc.edu/cgi-bin/hgTracks?db=hg19&position=<?php echo $chromosome; ?> target=_blank>UCSC genome browser: <?php echo $chromosome; ?></a></td></tr>
      <tr><td width="120px"><b>Type of gene</b></td>
      <td>protein-coding</td></tr><tr><td width="120px"><b>RefGenes</b></td>
      <td><a href=http://www.ncbi.nlm.nih.gov/gene/?term=<?php echo $symbol; ?> target=_blank>NCBI Gene<br></a></td></tr>
      <tr><td width="120px"><b>Modification date</b></td><td>20171101</td></tr>
      <tr><td rowspan="4" width="140px"><b>dbXrefs </b></td>
      <td colspan="2"><a href=https://www.genecards.org/cgi-bin/carddisp.pl?gene=<?php echo $symbol; ?>&keywords=<?php echo $symbol; ?> target=_blank>Gene Cards</td></tr>
      <tr><td colspan="2"><a href=https://www.genenames.org/cgi-bin/search?search_type=all&search=<?php echo $symbol; ?>&submit=Submit target=_blank>HGNC : HGNC<br></a></td></tr>
      <tr><td colspan="2"><a href=http://asia.ensembl.org/Human/Search/Results?q=<?php echo $symbol; ?>;site=ensembl;facet_species=Human target=_blank>Ensembl : Ensembl</td></tr>
      <tr><td colspan="2"><a href=http://vega.archive.ensembl.org/Homo_sapiens/Search/Results?q=<?php echo $symbol; ?>;site=vega;facet_species=Human target=_blank>Vega : Vega</td></tr>
      <tr><td width="140px"><b>Protein</b></td>
      <td colspan="2"><a href=http://www.uniprot.org/uniprot/?query=<?php echo $symbol; ?>_human target=_blank>UniProt: <?php echo $symbol; ?>_HUMAN </a><br><a href="#CrossReferencedDB">go to UniProt's Cross Reference DB Table</a></td></tr>
      <tr><td rowspan=2 width="140px"><b>Expression</b></td>
      <td colspan="2"><a href=http://cleanex.vital-it.ch/cgi-bin/cleanex_query_result.pl?out_format=NICE&Entry_0=HS_<?php echo $symbol; ?> target=_blank>CleanEX: HS_<?php echo $symbol; ?></a></td></tr>
      <tr><td colspan="2"><a href=http://biogps.org/\#goto=genereport&id=673 target=_blank>BioGPS: 673</a></td></tr>
      <tr><td rowspan="4" width="140px"><b>Pathway</b></td>
      <td colspan="2"><a href=http://pid.nci.nih.gov/search/intermediate_landing.shtml?molecule=<?php echo $symbol; ?>&Submit=Go target=_blank>NCI Pathway Interaction Database: <?php echo $symbol; ?> </a></td></tr>
      <tr><td colspan="2"><a href=http://www.kegg.jp/kegg-bin/search_pathway_text?map=hsa&keyword=<?php echo $symbol; ?>&mode=1&viewImage=true target=_blank>KEGG: <?php echo $symbol; ?> </a></td></tr>
      <tr><td colspan="2"><a href=http://www.reactome.org/content/query?q=<?php echo $symbol; ?>&species=Homo+sapiens&species=Entries+without+species&cluster=true target=_blank>REACTOME: <?php echo $symbol; ?> </a></td></tr>
      <tr><td colspan="2"><a href=http://www.pathwaycommons.org/pcviz/\#neighborhood/<?php echo $symbol; ?>&quickSearch=Quick+Search target=_blank>Pathway Commons: <?php echo $symbol; ?> </a></td></tr>
      <tr><td rowspan="3" width="140px"><b>Context</b></td>
      <td colspan="2"><a href=http://www.ihop-net.org/UniPub/iHOP/index.html?field=all&search=<?php echo $symbol; ?>&organism_id=0 target=_blank>iHOP: <?php echo $symbol; ?> </a></td></tr>
      <tr><td colspan="2"><a href=http://www.ncbi.nlm.nih.gov/pubmed/?term=<?php echo $symbol; ?>+and+ligand+and+mutation target=_blank>ligand binding site mutation search in PubMed: <?php echo $symbol; ?> </a></td></tr>
      <tr><td colspan="2"><a href=http://search2.ucl.ac.uk/search/search.cgi?query=<?php echo $symbol; ?>&collection=ucl-public-meta&Submit=GO target=_blank>UCL Cancer Institute: <?php echo $symbol; ?> </a></td></tr>
      </table><br>
</div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
