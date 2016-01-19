<!DOCTYPE html>
<html>
<head>
    <title>More complex</title>
</head>
<body>
    <?php
        $gpa = .2;
        if ($gpa == 4.0)
        {
            print("You have a perfect GPA");
        } elseif($gpa > 3.0)
        {
            print("You have a very good GPA");
        } elseif($gpa > 2.0)
        {
            print("The gpa is about average.");
        } elseif($gpa > 1.0) {
            print("Your gpa is poor. Time to hit the books");
        } else
        {
            print("Why r u even in school? ");
        }
    ?>
</body>
</html>