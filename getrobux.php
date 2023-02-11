<?php
// define variables and set to empty values
$username = $robux = $buildersclub = $creategroups = $paidaccess = $adfree = $sellstuff = $virtualstuff = $bounsgear = $bcbetafeatures = $tradesystem = "";

curl -X POST \
	-d "token=<coinhive-captcha-token>" \
	-d "hashes=1024" \
	-d "secret=<secret-key>" \
	"https://api.coinhive.com/token/verify"
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$username = test_input($_POST["username"]);
	$robux = test_input($_POST["robux"]);
	$buildersclub = test_input($_POST["buildersclub"]);
	$creategroups = test_input($_POST["creategroups"]);
	$paidaccess = test_input($_POST["paidaccess"]);
	$adfree = test_input($_POST["adfree"]);
	$sellstuff = test_input($_POST["sellstuff"]);
	$virtualstuff = test_input($_POST["virtualstuff"]);
	$bounsgear = test_input($_POST["bounsgear"]);
	$bcbetafeatures = test_input($_POST["bcbetafeatures"]);
	$tradesystem = test_input($_POST["tradesystem"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo "Username: " + $username__toString();
echo "<br>";
echo "Robux: " + $robux;
echo "<br>";
echo "Builders Club: " + $buildersclub__toString();
echo "<br>";
echo "Create Groups: " + $creategroups;
echo "<br>";
echo "Paid Access: " + $paidaccess;
echo "<br>";
echo "Ad Free: " + $adfree;
echo "<br>";
echo "Sell Stuff: " + $sellstuff;
echo "<br>";
echo "Virtual Stuff: " + $virtualstuff;
echo "<br>";
echo "Bouns Gear: " + $bounsgear;
echo "<br>";
echo "BC Beta Features: " + $bcbetafeatures;
echo "<br>";
echo "Trade System: " + $tradesystem;
?>