<!DOCTYPE html>
<html>
<head>
    <title>variable php doc</title>
</head>
<body>
    <?php
        // all variable in php are non-type, which means
        // php is a loosy type language.
        $age = 37;
        $name = "Chris Hsu";
        $taxRate = .06;

        print($age);
        print("<br/>");
        print($name);
        print("<br/>");
        print($name . " is " . $age . " years old!");
        print("<br/>");
        printf("The tax rate is %0.2f", $taxRate);

        // lets see how assignment works!
        $value = 37 * 3 / 14 + 75 - 6 + 0.03 / 6;
        print("<br/>");
        print("Value: " . $value);
    ?>
</body>
</html>