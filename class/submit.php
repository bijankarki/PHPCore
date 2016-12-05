<?php

  include('CsvActivity.php');

  $csvobj = new CsvActivity();

  // form variables
  echo $clientname = $_POST['client_name'];
  echo $gender = $_POST['optionsGenderRadio'];
  echo $phone = $_POST['phone'];
  echo $email = $_POST['email'];
  echo $address = $_POST['address'];
  echo $nationality = $_POST['nationality'];
  echo $dob = $_POST['dob'];
  echo $edubck = $_POST['edubck'];
  echo $prefmodcontact = $_POST['prefmodcontact'];

  echo $clientdata = $clientname.",".$gender.",".$phone.",".$email.",".str_replace(',','-',$address).",".$nationality.","
  .$dob.",".$edubck.",".$prefmodcontact;
  $csvobj -> writeCsv($clientdata);
 ?>
