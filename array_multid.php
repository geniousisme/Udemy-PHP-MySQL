<!DOCTYPE html>
<html>
<head>
    <title>Multi Dimensional</title>
</head>
<body>
    <?php
        $teams = array
        (
            "Yankes" => array
            (
                    "Rivers",
                    "Jeter",
                    "Garder"
            ),
            "Mets" => array
            (
                "Dickies",
                "Andy",
                "John"
            ),
            "Red Sox" => array
            (
                "Ortiz",
                "Halman",
                "Peter"
            )
        );
        print($teams["Red Sox"][0]);
        print("<br/>");
        print($teams["Yankes"][1]);

    ?>
</body>
</html>