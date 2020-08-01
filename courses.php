<?php

function get_value($param, $default = null){
    if(isset($_GET[$param])){
        $value = $_GET[$param];

    }else {
        $value = $default;
    }
    return $value;
}

$math = get_value('math', 0);
$prog = get_value('prog', 0);

// if($math){
//     if($prog){
//     $title = 'Math and programming';

// } else{
//     $title = 'Math courses';
// }
//     } else {
//     if($prog){
//         $title = 'progrmming courses';
//     }else{
//     $tile = 'courses';
// }
// }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title;?> </title>
</head>
<body>
   <h1>Recommendded Courses</h1> 
   <?php if($math):?>
   <h2>Math Courses</h2>
   <ul>
   <li>Calculus and analysis</li>
   <li>Algebra</li>
   <li>	Geometry and topology</li>
   <li>Number theory</li>
   </ul>
   <?php endif; ?>

   <?php if($prog): ?>
   <h2>Programming Courses</h2>
   <ul>
   <li>Web developer</li>
   <li>Java</li>
   <li>Python</li>
   <li>PHP</li>
   </ul>
   <?php endif; ?>
   <?php if(!$math && !$prog): ?> 
       <h3>Sorry, your inquiery is not avaliable.</h3>
   <?php endif; ?>
   <hr>
   <br>
    <a  href="newcourses.php" class="myButton">Home Page</a>
   
</body>
</html>
