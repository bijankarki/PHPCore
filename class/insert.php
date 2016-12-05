<?php

// form variables
echo $name = $_GET['emp_name'];
echo $worktitle = $_GET['work_title'];
echo $duration = $_GET['duration'];
if(!empty($name) && !empty($worktitle) && !empty($duration)){
$query = "insert into worklog (`name`,`work_title`,`duration`)values('$name','$worktitle',$duration)";
$objqry -> insert($query);
header("Location: ../index.php?msg=Added success");
}else {header("Location: ../view/addemp.php?msg=Please input something");}
?>
