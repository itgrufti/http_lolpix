$user = $_POST['lol_uname'];
$pass = md5($_POST['lol_passwd']);

if ($user&&$pass) {

include("content/connection.php");
$query = mysql_query("SELECT * FROM lol_users WHERE lol_uname='$lol_uname'");

$numrows = mysql_num_rows($query);

if ($numrows!=0) {
  while ($row = mysql_fetch_assoc($query))
  {
    $dbusername = $row['lol_uname'];
    $dbpassword = $row['lol_upass'];
  }
  else
      die("Incorrect username/password!");
}
else
  echo "User does not exist!";
} 
else
    die("Please enter a username and password!");
