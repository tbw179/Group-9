<?php
session_start();
include ("connect.php");
if (!isset($_SESSION["user_login"])) {
$username = "";
}
else {
$username = $_SESSION["user_login"];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Group 9</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <!--<div class="header">
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
-->

    <div class="header">
        <div class="headerWrapper">
          <div class="headerObject">
            <a href="#" class="headerLink" >Group 9 </a>
          </div>

          <?php
          if (isset($_SESSION["user_login"])) {
          echo '
          <div class="headerObject">
            <a href="'.$username.'" class="headerLink" >Profile</a>
          </div>
          <div class="headerObject">
            <a href="logout.php" class="headerLink" >Logout</a>
          </div>
          ';
          }
          else
          {
            echo '
            <div class="headerObject">
              <a href="index.php" class="headerLink" >Create Account </a>
            </div>
            <div class="headerObject">
              <a href="index.php" class="headerLink" >Login </a>
            </div>
            ';
          }
          ?>

          <div class="headerSearch">
            <form action="search.php" method="GET" id="search">
              <input type="text" name="q" size="60" placeholder="Search ..."/>
            </form>
          </div>
        </div>
      </div>
    </div>