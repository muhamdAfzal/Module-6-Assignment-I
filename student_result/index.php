<?php
function studentMarks($marks)
{

  //___ Mark Range Validation
  for ($i = 0; $i < count($marks); $i++) {

    if ($marks[$i] <= 0 || $marks[$i] >= 100) {
      echo 'Invalid Marks';
      return;
    }
  }

  $totalMarks = array_sum($marks);  // Total Marks

  $averageMark = $totalMarks / count($marks); // Average Marks
  echo $averageMark;
  echo "</br >";


  $grade = ' ';

  //___ Grade Calculation 
  switch ($averageMark) {
    case ($averageMark >= 80 && $averageMark <= 100):
      $grade = 'A+';
      break;

    case ($averageMark >= 70 && $averageMark <= 79):
      $grade = 'A';
      break;

    case ($averageMark >= 60 && $averageMark <= 69):
      $grade = 'A-';
      break;

    case ($averageMark >= 50 && $averageMark <= 59):
      $grade = 'B';
      break;

    case ($averageMark >= 40 && $averageMark <= 49):
      $grade = 'C';
      break;

    case ($averageMark >= 33 && $averageMark <= 39):
      $grade = 'D';
      break;

      // case $averageMark < 33:
    default:
      $grade = 'F';
  };

  echo "Grade is $grade";
  echo "</br >";

  //___ Returning Final Result Output
  $output = ($grade == 'F') ? "Student Failed" : "Total Marks: $totalMarks </br > Average Mark: $averageMark </br > Grade: $grade";
  return $output;
};

echo studentMarks([40, 35, 87, 44, 90]);
