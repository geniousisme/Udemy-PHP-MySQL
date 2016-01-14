<!DOCTYPE html>
<html>
<head>
    <title>Simple Array</title>
</head>
<body>
    <?php
        $family = array("Jimmy", "July", "Hannah", "Chris");
        $vehicles[0] = "car";
        $vehicles[1] = "airplane";
        $vehicles[2] = "ship";
        $vehicles[3] = "train";

        print($family[0] . "just purchase a new " . $vehicles[0]);
        print("<br/>");
        print($family[3] . "vacations on a " .  $vehicles[3]);
        print("<br/>");
        print($family[10]);
        print("<br/>");

        for ($i = 0; $i < count($family); $i++) {
            print($family[$i] . "<br/>");
        }

    ?>
</body>
</html>