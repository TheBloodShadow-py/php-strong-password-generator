<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <?php

    require_once(__DIR__."/getRandomPass.php");

    $password_string="aBcDeFgHiJkLmNoPqRsTuVwXyZ0123456789!@#$%^&*()";

    $leng = $_GET["pass_len"] ?? 0;
    ?>

    <form method="get" action="">
        <input min="1" type="number" name="pass_len">
        <button>Genera password</button>
        <?php

    if ($leng ==! 0) {
        echo "<p>".getRandomPass($leng, $password_string)."</p>";
    }
        ?>
    </form>
    
</body>
</html>