<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["height"])) {
            
            $height = intval($_POST["height"]);

            if ($height > 0) {
            for ($i = 1; $i <= $height; $i++) {
    
                for ($j = 1; $j <= $height - $i; $j++) {
                    echo '';
                }

                for ($j = 1; $j <= 2 * $i - 1; $j++) {
                    echo '*';
                }
                echo "<br>";
            }
        } else {
            echo "Invalid input. Please enter a positive integer for the height.";
        }

    }elseif (isset($_POST["inputString"])) {
        $inputString = $_POST["inputString"];

        $datePattern = '/(\d{2})(\d{2})(\d{4})/';

        if (preg_match($datePattern, $inputString, $matches)) {

            $month = $matches[1];  
            $day = $matches[2];    
            $year = $matches[3];   
           if (1 <= intval($month) && intval($month) <= 12 && 1 <= intval($day) && intval($day) <= 31)
            {
                echo "Valid date found: $month/$day/$year";
            } else {
                echo "Invalid date found";
            }
        } else {
            echo "No valid date found";
        }
    }
}
?>
