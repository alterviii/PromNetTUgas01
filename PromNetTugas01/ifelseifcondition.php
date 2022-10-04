<div align="center">
    <?php
        $score = 77;

            if ($score > 90) {
                $grade = "A";
            } elseif($score > 75){
                $grade = "B";
            } elseif($score > 50){
                $grade = "C";
            } elseif($score > 25){
                $grade = "D";
            } else {
                $grade = "E";
            }

        echo "Your score : $score <br>";
        echo "Grade: $grade <br>";
        echo "Peace";
    ?>
</div>