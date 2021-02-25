
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanber OOP PHP</title>
</head>
<body>
    <h1>OOP with PHP</h1>
    <?php

        require_once("animal.php");
        require_once("ape.php");
        require_once("frog.php");

        $sheep = new Animal("shaun");

        // echo $sheep->name; // "shaun"
        // echo $sheep->legs; // 2
        // echo $sheep->cold_blooded; // false
        $sheep->print();
        echo "<br>";

        $sungokong = new Ape("kera sakti");
        $sungokong->print();
        $sungokong->yell(); // "Auooo"
        echo "<br>";

        $kodok = new Frog("buduk");
        $kodok->print();
        $kodok->jump() ; // "hop hop"
        echo "<br>";
    ?>
    
</body>
</html>

