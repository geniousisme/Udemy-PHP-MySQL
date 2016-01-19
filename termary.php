<!DOCTYPE html>
<html>
<head>
    <title>Termary</title>
</head>
<body>
    <?php
        $age = 19;
        $voteString = ($age >= 18) ? "can vote" : "cannot vote";
        print $voteString;

        $testScore = 67;

        $pass = ($testScore >= 60) ? true : false;
        print("<br/>");
        print($pass);
    ?>
</body>
</html>