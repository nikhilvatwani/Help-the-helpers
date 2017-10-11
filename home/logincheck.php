<?php
	$name = $_POST['EmailId'];
	$password = $_POST["Password"];

	$role = $_POST["roles"];
	
	if($role == '1')
	{
		if($name == 'sagar' && $password == '1234')
		{
			header('Location:../saboo_hacks/php_action/volunteer/ngo_index.php');		
		}
	}
	else if($role == '2')
	{
		if($name == 'parvez' && $password == '1234')
		{
			header('Location:../saboo_hacks/php_action/volunteer/index.php');		
		}
	}
	else if($role =='3')
	{
		if($name == 'rajeev' && $password == '1234')
		{
			header('Location:../saboo_hacks/php_action/volunteer/donor_dashboard.php');		
		}
	}
	header('Location', "login.html");
?>