<?php
function validate($name)
{
 if( $name==' ')
 {
 return'Please enter any username';
 }
 if(str.len($name)<3)
 {
 return"Username is too short.";
 }
 switch($name)
 {
 case 'xyz':
 case 'pqr':
 case 'abc':
 case 'ppp':
 return"Username already exists.";
 }
 return"Username is valid.";
 }
 echo validate(trim($_REQUEST["name"]));
?>