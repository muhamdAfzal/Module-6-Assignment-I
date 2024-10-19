<?php
function studentMarks($marks)
{
  $output = '';

  for ($i = 0; $i < count($marks); $i++) {


    //___ Mark Range Validation
    if ($marks[$i] < 0 || $marks[$i] > 100) {
      echo 'Mark range is invalid';
      return;
    }


    //___ Fail Condition
    if ($marks[$i] < 33) {
      $output = "Student Failed!";
      return $output;
    }
  }


  $totalMarks = array_sum($marks);  // Total Marks

  $averageMark = $totalMarks / count($marks); // Average Marks


  $grade = ' ';

  //___ Grade Calculation 
  switch ($averageMark) {
    case $averageMark >= 80:
      $grade = 'A+';
      break;

    case $averageMark >= 70:
      $grade = 'A';
      break;

    case $averageMark >= 60:
      $grade = 'A-';
      break;

    case $averageMark >= 50:
      $grade = 'B';
      break;

    case $averageMark >= 40:
      $grade = 'C';
      break;

    case $averageMark >= 33:
      $grade = 'D';
  };


  //___ Returning Final Result Output
  $output = ($grade == 'F') ? "Student Failed" : "Total Marks: $totalMarks </br > Average Mark: $averageMark </br > Grade: $grade";

  return $output;
};



echo studentMarks([51, 99, 88, 73, -19]);
echo "</br >";

echo studentMarks([38, 35, 17, 34, 50]);
echo "</br >";

echo studentMarks([90, 44, 90, 65, 39]);
