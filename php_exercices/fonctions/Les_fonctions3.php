<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function check_mdp_format($mdp)
{
$reg = "^(?=.*[az])(?=.*[AZ])(?=.*\d)[a-zA-Z\d]{8,}$";


	$verifi = preg_match($reg , $mdp);
	
	if (preg_match($verifi ,$mdp))
	{
		return true;
	}
	else 
		return false;
}

if (check_mdp_format("ddsdT355ttrfretT") != true)
{
	echo "Format non correct";	
}
else 
	echo "Format correct";
?>


</body>
</html>