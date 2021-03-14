<?php
session_start();
include ("connect.php");
if (!isset($_SESSION["user_login"])) {
}
else {
//header("location: home.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Group 9</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <div class="header">
      <div class="headerWrapper">
        <div class="headerLogo">
          Group-9
        </div>
        <div class="headerSearch">
          <form action="./PHP/search.php" method="GET" id="search">
            <input type="text" name="q" size="60" placeholder="Search ..."/>
          </form>
        </div>
        <div class="headerMenu">
          <a href="#" >Home</a>
          <a href="#" >About</a>
          <a href="#" >Create Account</a>
          <a href="#" >Sign In</a>
        </div>
      </div>
    </div>
