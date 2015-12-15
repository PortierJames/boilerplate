<?php

function processLogin($post)
{
	$conn = getConnection();
	
	$query = "select * from users where user='".$post['username']."' identified by '".$post['pass']."') LIMIT 1;";
	$results = mysql_query($query);
	
	if(mysql_numrows($results)>0)
	{
		$row = mysql_fetch_assoc($results);
		$_SESSION['id'] = $row["id"];
		$_SESSION['username'] = $row['username'];
		$_SESSION['loggedIn'] = true;	
		return true;
	}
	return false;
}

function displayErrorMessage($msg)
{
	echo "<div class='err'>{$msg}</div>";
}

function getConnection()
{
	$db = mysql_connect('', '', '');
	mysql_select_db('');
	
	return $conn;
}

?>
