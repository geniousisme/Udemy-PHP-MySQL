<!DOCTYPE html>
<html>
<head>
    <title>Switch Case Break</title>
</head>
<body>
    <?php
        $grade = "b";

        switch($grade)
        {
            case 'A':
            case 'a':
                print("That's a great grade!");
                break;

            case 'B':
            case 'b':
                print('B is above average.');
                break;

            case 'C':
            case 'c':
                print("C is an average grade.");
                break;

            case 'D':
            case 'd':
                print("D is a low passing grade.");
                break;

            case 'F':
            case 'f':
                print("F is a falling grade. You must retake the course.");
                break;

            default:
                print("letter grade not recognized.");
        }
    ?>
</body>
</html>