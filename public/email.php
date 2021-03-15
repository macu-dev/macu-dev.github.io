<?php

function verifiedFields(){
  $fields = ['name', 'email', 'subject', 'message'];
  $errors = [];
  $iserr = false;

  
  foreach($fields as $field){
    global $iserr;
    if(!isset($_POST[$field])){
      array_push($errors, "!$field");
      global $iserr;
      $iserr = true;
    }
  }

  if($iserr) {
    error($errors);
  } else{
    $ret = validation();
    if($ret->isValid) {
      success();
    } else {
      error($ret->errors);
    }
  }
}

function success(){
  $result = new stdClass();
  $result -> success = true;
  $result -> status = '🥳';

  echo json_encode($result);
}

function error($fields){
  $result = new stdClass();
  $result -> success = false;
  $result -> error = 'data is required';
  $result -> fieldsErrors = $fields;
  $result -> status = '😞';

  echo json_encode($result);
}


function validation () {
  $isValid = true;
  $errors = [];

  if( isNotValidString (trim($_POST['name']), 2, 100)) {
    array_push($errors, 'nombre');
    global $isValid;
    $isValid = false;
  }


  if( isNotValidString (trim($_POST['subject']), 2, 80)) {
    array_push($errors, 'asunto');
    global $isValid;
    $isValid = false;
  }


  if( isNotValidString (trim($_POST['message']), 2, 200)) {
    array_push($errors, 'mensaje');
    global $isValid;
    $isValid = false;
  }


  if( isNotValidEmail (trim($_POST['email']))) {
    array_push($errors, 'email');
    global $isValid;
    $isValid = false;
  }

  
  $fieldsErrors = new stdClass();
  $fieldsErrors->isValid = $isValid;
  $fieldsErrors->errors = $errors;

  return $fieldsErrors;
  
}



function isNotValidString ($field, $min , $max){
  return empty($field) || 
        !preg_match("/^([a-zA-ZÀ-ÿ\x{00f1}\x{00d1} ,']+[a-zA-ZÀ-ÿ\x{00f1}\x{00d1}.]+)+$/", $field) ||
        !(strlen($field) >= $min && strlen($field) <= $max );
}

function isNotValidEmail($field){
 return empty($field) ||
       !preg_match("/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i", $field);     
} 





verifiedFields();