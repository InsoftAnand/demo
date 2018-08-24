<?php

require_once('include/classes/common_class.php');

$obj = new test();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$action = $_POST['action'];
	switch ($action)
	{
		case "updateId": 
		    $id = $_POST['Id'];
			echo $GroupNameResult=$obj->UpdateLeadsStatus($id);
			break;
		case "statusfilter": 

		   $filterId = $_POST['filterId'];
			 $LeadsResult=$obj->GetLeadsUserDetailsFilter($filterId);
			 
			 echo json_encode($LeadsResult);
			break;
	}
}