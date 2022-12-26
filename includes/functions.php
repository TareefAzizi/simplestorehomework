<?php

function connectToDB(){
  return new PDO(
    'mysql:host=devkinsta_db;dbname=Simple_Store_',
     'root',
      'viLXjKTLEziaMJLz'
  );
}

$database = connectToDB();

function isLoggedIn(){
  // if the user is logged in will return true
  // if not it will return false
  return isset($_SESSION['user']); 
}

function logout() {
  // delete the session data so user can logout
  unset($_SESSION['user']);
}