<?php
session_strat();
if(isset($_SESSION['name'])){
	echo $_SESSION['name'];
}

?>