<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
    $symbol = (!empty($_POST['symbol'])) ? $_POST['symbol'] : "";
$sql = 'SELECT * FROM search_page WHERE description LIKE :keyword ORDER BY id DESC ';
$pdo_conn = new PDO("mysql:host=server;dbname=dbname", "user", "pass");
$pdo_statement = $pdo_conn->prepare($query);
$pdo_statement->bindValue(':keyword', '%' . $symbol . '%', PDO::PARAM_STR);
$pdo_statement->execute();
if(!$pdo_statement->rowCount()){
//if the results is null
echo "no result found"}else{
//found some row according to your search
//do some operations based on your application
$result = $pdo_statement->fetchAll();
}
?>
<!--  $sql = "SELECT * FROM search_page WHERE MATCH (description) AGAINST (:keyword IN BOOLEAN MODE) ORDER BY MATCH (description) AGAINST (:keyword IN BOOLEAN MODE) DESC";
-->
