<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$age = 17; 

if ($age >= 18) {
    echo "Vous pouvez entrer";
} elseif ($age >= 16 && $age < 18) {
    echo "Vous êtes presque majeur";
} elseif ($age >= 14 && $age < 16) {
    echo "Vous êtes jeune";
} else {
    echo "Vous êtes trop jeune";
}
?>

    
</body>
</html>