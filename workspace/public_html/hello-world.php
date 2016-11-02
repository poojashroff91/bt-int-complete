<?php require_once("../includes/braintree_init.php"); ?>

<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

//echo 'Hello world from Cloud9!';

echo($clientToken = Braintree\ClientToken::generate());


?>
</body>
</html>