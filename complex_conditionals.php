<!DOCTYPE html>
<html>
<head>
    <title>Complex COndtionals</title>
</head>
<body>
    <?php
    $age = 37;
    $citizen = false;
    if ($age >= 18 && $citizen) {
        print("<strong> You are eligible to votes.</strong>")
    }
    else {
        print("<strong>You are not eligble to view.</strong>")
    }
    ?>

</body>
</html>