Q1: <br>
<?php
$courses = array(6201,6202,6204,6205,6206,6209,6210);
echo "The 4th value is course ".$courses[3];
 ?>
<br>
<br>


Q2: <br>
<?php
$CourseTables = array(
        'Course1' => array('CourseNo' => 6201,'Title' => 'Info Sys Development', 'Instructor' =>'Dasgupta'),
        'Course2' => array('CourseNo' => 6202,'Title' => 'Database Management', 'Instructor' =>'Park'),
        'Course3' => array('CourseNo' => 6204,'Title' => 'Project Management', 'Instructor' =>'Carayannis'),
        'Course4' => array('CourseNo' => 6205,'Title' => 'Web App Development', 'Instructor' =>'Chen'),
        'Course5' => array('CourseNo' => 6206,'Title' => 'Security', 'Instructor' =>'White'),
        'Course6' => array('CourseNo' => 6209,'Title' => 'Web and Social', 'Instructor' =>'Duan')
);
echo "the title of the third course is ". $CourseTables['Course3']['Title'];
 ?>
