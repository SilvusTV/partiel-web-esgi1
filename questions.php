<?php
// Questions et réponses
$questions = [
    [
        'question' => 'Quelle est la capitale de la France ?',
        'reponses' => ['Paris', 'Lyon', 'Marseille bébé'],
        'answer' => "0"
    ],
    [
        'question' => 'Complétez l’expression : Avoir les yeux plus gros que le ____',
        'reponses' => ['Pied', 'Ventre', 'Nez'],
        'answer' => "1"
    ],
    [
        'question' => 'Que signifie en français le mot « Guten Tag » en allemand, « kalimera » en grec, « buongiorno » en italien ?',
        'reponses' => ['Merci', 'Bonjour', 'Au revoir'],
        'answer' => "1"
    ]
];
?>

<!DOCTYPE html>
<html class="quiz">
<head>
    <title>Questions Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="questions">
<form method="POST" action="resultat.php">
    <?php
    $i = 0;
    foreach ($questions as $question) {
        $i++
        ?>
        <div class="question_bloc">
            <img src="./images/question.png" alt="question image">
            <div class="right">
                <h1>Question n°<?= $i ?></h1>
                <p><?= $question['question'] ?></p>
                <div class="radio">
                    <?php
                    $value = 0;
                    foreach ($question['reponses'] as $response) {
                        ?>
                        <span>
                            <input type="radio" id="<?= $response ?>" name="response-<?= $i ?>" value="<?= $value ?>">
                            <label for="<?= $response ?>"><?= $response ?></label>
                        </span>
                        <?php
                        $value++;
                    }
                    ?>
                </div>
            </div>

        </div>


        <?php
    }
    ?>
    <!--

    Afficher la liste des questions

    -->
    <input type="submit" value="Valider" class="button">
</form>
</body>
</html>
