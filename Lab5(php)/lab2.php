<?php

    // Task 1: Area and Perimeter of a Rectangle 
    echo "<h3>Task 1: Rectangle</h3>";
    $length = 10;
    $width = 5;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area: " . $area . "<br>";
    echo "Perimeter: " . $perimeter . "<br>";


    // Task 2: VAT Calculation
    echo "<h3>Task 2: VAT</h3>";
    $amount = 1000;
    $vat = 0.15 * $amount;

    echo "Amount: " . $amount . "<br>";
    echo "VAT: " . $vat . "<br>";


    // Task 3: Odd or Even
    echo "<h3>Task 3: Odd or Even</h3>";
    $number = 15;

    if($number % 2 == 0){
        echo $number . " is Even";
    }else{
        echo $number . " is Odd";
    }


    // Task 4: Largest Number
    echo "<h3>Task 4: Largest Number</h3>";
    $num1 = 10;
    $num2 = 25;
    $num3 = 15;

    echo "Number 1 = ". $num1. " Number 2 = ". $num2. " Number 3 = ". $num3;
    echo "<br>";

    if($num1 > $num2 && $num1 > $num3){
        echo "Largest is: " . $num1;
    }elseif($num2 > $num1 && $num2 > $num3){
        echo "Largest is: " . $num2;
    }else{
        echo "Largest is: " . $num3;
    }


    // Task 5: Odd numbers between 10 to 100
    echo "<h3>Task 5: Odd Numbers (10-100)</h3>";
    
    for($i=10; $i<100; $i++){
        if($i % 2 != 0){
            echo $i . " ";
        }
    }

    // Task 6: Search element in Array
    echo "<h3>Task 6: Search in Array</h3>";
    $numbers = [10, 20, 30, 40, 50];
    $search = 30;
    $found = false;

    for($i=0; $i<5; $i++){
        if($numbers[$i] == $search){
            echo "Number " . $search . " found at index: " . $i;
            $found = true;
        }
    }
    
    if($found == false){
        echo "Number not found";
    }


    // Task 7: Print Shapes 
    echo "<h3>Task 7: Shapes</h3>";
    
    // Shape 1: Stars

    for($i=0; $i<3; $i++){
        for($j=0; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
    
    echo "<br>";

    // Shape 2: Numbers

    for($i=3; $i>0; $i--){
        for($j=1; $j<=$i; $j++){
            echo $j;
        }
        echo "<br>";
    }

    echo "<br>";

    // Shape 2: Alphabet

    $c = "A";
    for($i=0; $i<3; $i++){
        for($j=0; $j<=$i; $j++){
            echo $c. " ";
            $c++;
        }
        echo "<br>";
    }

        // Task 8: Shapes using 2D Array
    echo "<h3>Task 8: 2D Array Shapes</h3>";

    // Declaring array
    $stds = [
        [1, 2, 3, "A"],
        [1, 2, "B", "C"],
        [1, "D", "E", "F"]
    ];

    echo "<b>Shape 1 (Numbers):</b><br>";
    for($i=0; $i<3; $i++){
        for($j=0; $j<4; $j++){
             if(is_int($stds[$i][$j])){ 
                 echo $stds[$i][$j]. " ";
             }
        }
        echo "<br>";
    }

    echo "<br><b>Shape 2 (Letters):</b><br>";
    for($i=0; $i<3; $i++){
        for($j=0; $j<4; $j++){
             if(is_string($stds[$i][$j])){
                 echo $stds[$i][$j]. " ";
             }
        }
        echo "<br>";
    }

    ?>