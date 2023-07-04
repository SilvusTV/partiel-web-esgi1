<!DOCTYPE html>
<html>
<head>
    <title>Résultat du quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="result_body">
    <!-- Afficher le résultat -->
<?php
/*var_dump($_POST);
var_dump($_POST["response-1"] === '1');*/
$result = 0;
if($_POST['response-1'] === '0'){
    $result++;
}
if($_POST['response-2'] === '1'){
    $result++;
}
if($_POST['response-3'] === '1'){
    $result++;
}
?>
<div class="result">
    <img src="./images/result.png" alt="image résultat">
    <h2>Votre score :</h2>
    <p>Vous avez bien répondu à <b><?=$result?></b> questions sur <b>3</b></p>
    <h1>Un grand bravo !</h1>
</div>

</body>
</html>
