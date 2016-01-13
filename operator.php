<!DOCTYPE html>
<html>
<head>
    <title>Operator</title>
</head>
<body>
    <?php
        $x = 12.55;
        $y = 13;
        $z = $x + $y;
        // parenthese will cause the variable to calculate first!
        echo($x . " + " . $y . " = " . ($x + $y));
        echo ("<br/>");
        echo($x . " - " . $y . " = " . ($x - $y));
        echo ("<br/>");
        echo($x . " * " . $y . " = " . ($x * $y));
        echo ("<br/>");
        echo($x . " / " . $y . " = " . ($x / $y));
        echo ("<br/>");
        echo(9 % 3);
        echo ("<br/>");
        echo(10 % 3);
        echo ("<br/>");
        echo(11 % 3);
        echo ("<br/>");
        $x++;
        $y--;
        echo($x);
        echo("<br/>");
        echo($y);
        echo("<br/>");

        $poem = "lalala";
        $poem .= ", heyhey";
        echo($poem);
        echo("<br/>");

        $operand1 = 12;
        $operand2 = 17;
        $operand1 += $operand2;
        echo($operand1);
    ?>

</body>
</html>