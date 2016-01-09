<?php
include '../template/header.php';

class Contact {
	public function __construct() {
		echo "this is the Contact Me home page";
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
    <title>Sign-Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="body-color">
    <div id="Sign-Up">
      <fieldset style="width:30%"><legend>Contact Me~: </legend>
	<table border="0">
	  <tr><td>Email: </td><td>deepwaterooo@youknowme.com</td></tr>
	  <tr><td>Person to Person meet: </td><td>You know where I could be, and meet me there~!</td></tr>
	</table>
      </fieldset>
    </div>
  </body>
</html>

<?php
include '../template/footer.php';
?>
