<?php  
function calculateResult($marks) {  
    // Check mark range validation  
    foreach ($marks as $mark) {  
        if ($mark < 0 || $mark > 100) {  
            echo "Mark range is invalid.\n";  
            return;  
        }  
    }  

    // Check for fail condition  
    foreach ($marks as $mark) {  
        if ($mark < 33) {  
            echo "The student has failed.\n";  
            return;  
        }  
    }  

    // Calculate total and average marks  
    $totalMarks = array_sum($marks);  
    $averageMarks = $totalMarks / count($marks);  

    // Determine grade using switch-case  
    switch (true) {  
        case ($averageMarks >= 80 && $averageMarks <= 100):  
            $grade = 'A+';  
            break;  
        case ($averageMarks >= 70 && $averageMarks < 80):  
            $grade = 'A';  
            break;  
        case ($averageMarks >= 60 && $averageMarks < 70):  
            $grade = 'A-';  
            break;  
        case ($averageMarks >= 50 && $averageMarks < 60):  
            $grade = 'B';  
            break;  
        case ($averageMarks >= 40 && $averageMarks < 50):  
            $grade = 'C';  
            break;  
        case ($averageMarks >= 33 && $averageMarks < 40):  
            $grade = 'D';  
            break;  
        default:  
            $grade = 'F';  
            break; // This will not actually be reached since we check for failure earlier  
    }  

    // Output total marks, average marks, and grade  
    echo "Total Marks: " . $totalMarks . "\n";  
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n"; // formatted to 2 decimal points  
    echo "Grade: " . $grade . "\n";  
}  

// Example input for five subjects.  
$marks = [76, 85, 92, 45, 67]; // Replace these marks with user input  

calculateResult($marks);  
?>