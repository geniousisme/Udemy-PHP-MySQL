<!DOCTYPE html>
<html>
<head>
    <title>loop</title>
</head>
<body>
    <?php
        $i = 0;
        while($i < 101)
        {
            print($i);
            print("<br/>");
            $i += 10;
        }

        $airlines = array("American", "Southwest", "Delta", "United", "jetBlue");
        // if you want to run the loop only when the condition is true.
        $x = 0;
        while($x < count($airlines))
        {
            print($airlines[$x]);
            print("<br/>");
            $x++;
        }
        // if you want to let your loop run at least once
        // you should use do while loop
        $y = 100;
        do
        {
            print($y);
            print("<br/>");
            $y++;
        } while ($y < 35);
    ?>
</body>
</html>