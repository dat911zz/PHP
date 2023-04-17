<?php 
function executeReader($db, $user, $pass, $sql){
    $pdo = new PDO("mysql:host=localhost;dbname=".$db."", "".$user."", "".$pass."");
    $pdo->query("set names utf8");
    $st = $pdo->prepare($sql);
    $st->execute();
    if($st->rowCount() > 0){
      return $st->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
?>