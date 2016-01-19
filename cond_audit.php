<!DOCTYPE html>
<html>
<head>
    <title>Checking your age!</title>
</head>
<body>
    <?php
        $age = $_POST['age'];
        $citizen = $_POST['citizen'];
        // print $age;
        // print $citizen;

        if ($age >= 18 && $citizen == "true" )
        {
            print("<strong>You are eligible to vote</strong>");
        }
    ?>
</body>
</html>