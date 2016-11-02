<?php
require_once("braintree_init.php");
echo(Braintree\ClientToken::generate());
?>