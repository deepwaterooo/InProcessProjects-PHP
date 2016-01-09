<?php
include '../template/header.php';

class About {
	public function __construct() {
		echo "this is the About Me About page";
		$this->_other();
	}
	protected function _other() {
		echo "this is the other dlfkjdkjflldkfjdklfjd";
	}
}

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>About Me~~</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="body-color">
    <div id="Sign-Up">
      <fieldset style="width:30%"><legend>Me Items: </legend>
	<table border="0">
	  <tr><td>Name: </td><td><td>deepwaterooo</td></tr>
	  <tr><td>Gender: </td><td><td>Female</td></tr>
	  <tr><td>Hobie: </td><td><td>Programming...</td></tr>
	  <tr><td>Current Interest: </td><td><td>Programming & Programming...</td></tr>
	  <tr><td></td><td><td></td></tr>
	</table>
      </fieldset>
    </div>
  </body>
</html>

<?php
include '../template/footer.php';
?>

