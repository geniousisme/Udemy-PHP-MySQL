<!DOCTYPE html>
<html>
<head>
    <title>Conditional</title>
</head>
<body>
    <?php
        $age = 19;
        $citizen = True;

        if ($age >= 18 && $citizen == true)
        {
            print("<strong> You are eligible to vote! </strong>");
        }
    ?>
</body>
</html>