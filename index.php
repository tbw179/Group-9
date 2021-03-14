<!DOCTYPE html>
<html>
  <head>
    <title>Group 9</title>
    <link rel="stylesheet" type="text/css" href="./mysite/CSS/style.css"/>
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

<?php include ("./mysite/PHP/connect.php"); ?>
<?php include ("./mysite/PHP/register.php"); ?>
<!--$reg = @$_POST['reg'];
$fn = ""; // First Name
$ln = ""; // Last Name
$un = ""; // Username
$pswd = ""; // Password

$u_check = ""; // Check if username exists
// Registration form
$fn = strip_tags(@$_POST['fname']);
$ln = strip_tags(@$_POST['lname']);
$un = strip_tags(@$_POST['username']);
$pswd = strip_tags(@$_POST['password']);

if ($reg) {
$u_check = mysqli_query($conn, "SELECT username FROM users WHERE username='$un'");
$check = mysqli_num_rows($u_check);
if ($check == 0) {
if ($fn&&$ln&&$un&&$pswd) {
if (strlen($un)>25||strlen($fn)>25||strlen($ln)>25) {
echo "The maximum limit for username/first name/last name is 25 characters.";
}
else {
if (strlen($pswd)>30||strlen($pswd)<5) {
echo "Your password must be between 5 and 30 characters long.";
}
else {
$pswd = md5($pswd);
$query = mysqli_query($conn, "INSERT INTO users VALUES ('$un', '$fn', '$ln', '$pswd')");
die("<h2>Welcome to Group-9</h2>Login to your account to get started.");
}
}
}
else {
echo "Please fill in all of the fields.";
}
}
else {
echo "Username already taken.";
}
}
?>-->

    <div class="tableWrapper">
      <table>
        <tr>
          <td width="50%" valign="top">
            <h2>Join Group-9 Today</h2>
          </td>
          <td width="50%" valign="top">
            <h2>Create Account Below</h2>
            <form action="#" method="POST">
              <input type="text" name="fname" size="25" placeholder="First Name"/><br><br>
              <input type="text" name="lname" size="25" placeholder="Last Name"/><br><br>
              <input type="text" name="username" size="25" placeholder="username"/><br><br>
              <input type="text" name="password" size="25" placeholder="Password"/><br><br>
              <input type="submit" name="reg" value="Create Account"/>

            </form>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>