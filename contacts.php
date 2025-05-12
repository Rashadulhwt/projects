<?php


$name1 = '';
$number1 = '';


$name2 = '';
$number2 = '';



while (true) {
    echo "========Contact Manager======\n";
    echo "1.Add Contact\n";
    echo "2.View Contact \n";
    echo "3.Exit\n";
    echo "Select An Option\n";

    $takeInput = fgets(STDIN);
    if ($takeInput == 1) {
        //get name and number for contact1
        if ($name1 == '') {
            echo "Please enter name for Contact 1 \n\n";
            $contact1name = fgets(STDIN);
            $name1 = $contact1name;
            echo "Please enter name for number 1 \n\n";
            $contact1number = fgets(STDIN);
            $number1 = $contact1number;
        }
        //get name and number for contact2
        elseif ($name2 == '') {
            echo "Please enter name for Contact 2 \n\n";
            $contact2name = fgets(STDIN);
            $name2 = $contact2name;
            echo "Please enter name for number 2 \n\n";
            $contact2number = fgets(STDIN);
            $number2 = $contact2number;
        } else {
            echo "You have already 2 contacts\n\n";
        }
    } elseif ($takeInput == 2) {
        echo "2.View Contact \n";
        //view contact
        if ($name1 != '') {
            echo "Contact1 : $name1  | Number: $number2";
        }
         if ($name2 != '') {
            echo "Contact1 : $name2  | Number:  $number2";
        }
        if ($name1 == '') {
            echo "No contact found \n\n";
        }
    } elseif ($takeInput == 3) {
        //exit 
        echo "Thank Tou";
        break;
    } else {
        //invalid input
    }
}
