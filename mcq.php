<?php

    $score = 0;
    echo  "=============Model Test==============\n\n";
    // Qus 01
    echo "1. What is the capital in bangladesh?\n\n";
    echo "a)Dhaka\n";
    echo "b)Ctg\n";
    echo "c)Kholna\n";
    echo 'Please enter your answer (a,b or c)';
    $answer1 =trim(fgets(STDIN));
        if ($answer1 == 'a') {
        $score = $score + 1;
        echo "Congratulation! It's Correct Ans\n\n";
    } else {
        echo "wrong answer! Correct ans is :a \n\n" ;
    }

    // Qus-2
      // Qus 01
    echo "2. What is the Sum of 3+5 ?\n\n";
    echo "a)6\n";
    echo "b)9\n";
    echo "c)8\n";
    echo "Please enter your answer (a,b or c)\n\n";
    $answer1 =trim(fgets(STDIN));
        if ($answer1 == 'c') {
        $score = $score + 1;
        echo "Congratulation! It's Correct Ans";
    } else {
        echo ' wrong answer! Correct ans is :c';
    }

    // Qus-3
      // Qus 01
    echo  "\n\n";
    echo "3. What is the national animal in Bangladesh ?\n\n";
    echo "a)Dog\n";
    echo "b)Tiger\n";
    echo "c)Cat\n";
    echo 'Please enter your answer (a,b or c)';
    $answer1 =trim(fgets(STDIN));
        if ($answer1 == 'b') {
        $score = $score + 1;
        echo "Well Done! It's Correct Ans";
    } else {
        echo "wrong answer! Correct ans is :b \n\n";
    }
    echo "======Quiz Finished \n\n ";
    echo "Congratulation ! You got $score "

    ?>