<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $risposte = ["Venere" , "Terra", "Marte" , "Mercurio" , "Giove"];
        echo "<p style='font-size:35px;'><i>{$domanda}</i></p>";
        foreach($risposte as $value){
            echo "<input type = 'radio' name ='risposte' value='{$value}'>" . " <label>{$value}</label><br>";
        }
    ?>
</body>
</html>