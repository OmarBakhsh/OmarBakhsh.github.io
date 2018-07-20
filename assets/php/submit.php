<?php

$name = filterinput(Input_post, 'name');
$lastname = filterinput(Input_post, 'lastname');

if(!empty($name)) {
}
else {
	echo " Please Enter First Name";
}
?>