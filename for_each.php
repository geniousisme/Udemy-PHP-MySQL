<!DOCTYPE html>
<html>
<head>
    <title>for each loop</title>
</head>
<body>
    <?php
        $gpas;
        $gpas["Fred"] = 3.62;
        $gpas["Mary"] = 2.75;
        $gpas["Jen"] = 4.00;
        $gpas["Jason"] = 2.10;
        $gpas["Mark"] = 2.87;

        $total_gpa = 0;

        foreach($gpas as $key => $value)
        {
            print("<br/>Name: " . $key);
            print("<br/>GPA: " . $value);
            print("<br/>");
            $total_gpa += $value;
        }

        print("Total GPA: " . $total_gpa);

        $avg = $total_gpa / count($gpas);
        print("<br/> Average GPA: " . $avg);
    ?>
</body>
</html>