<?php 
session_start();
	include( "Awskomfunction/connection.php" );
        include ( "Awskomfunction/Awskom.php" );
	if ( isset( $_SESSION['user_email'] ) ) {
	header( "location: home.php" );
	}else {
              include ('forum/header.php'); 
              include ('head/header/header_register.php');  
	      include( "head/header/registration-form.php" );
	      }?>
