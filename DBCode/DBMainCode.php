<?php
//connect to database
$mysqli = mysqli_connect("localhost", "OkStaff", 'staffing', "okstaff");
//connect other php file
include 'DBFunctionData.php';

//Function Table Creation Test
function tableTest($temp, $query, $lineNumber){
	if($temp->query($query) === true) {
		echo nl2br("Created Table. (Line:".$lineNumber.")\n");
	}else{
	   echo nl2br("Already Made Table. (Line:".$lineNumber.")\n");
	}
}
//Function Table Insert
function tableInsert($temp, $query, $lineNumber){
	if($temp->query($query) === true) {
		echo nl2br("Insertion of Data was success. (Line:".$lineNumber.")\n");
	}else{
	   echo nl2br("Insertion Failed. (Line:".$lineNumber.")\n");
	}
}

//Table Creation Tests
tableTest($mysqli, $tableStaff, __LINE__);
tableTest($mysqli, $tableJobs, __LINE__);
tableTest($mysqli, $tablePersonal, __LINE__);
tableTest($mysqli, $tablePermanentData, __LINE__);
tableTest($mysqli, $tableCitizenOther, __LINE__);
tableTest($mysqli, $tableEducation, __LINE__);
tableTest($mysqli, $tableExpertise, __LINE__);
tableTest($mysqli, $tableSkillPrograms, __LINE__);
tableTest($mysqli, $tableMoneySkills, __LINE__);
tableTest($mysqli, $tableOtherSkills, __LINE__);
tableTest($mysqli, $tableCities, __LINE__);
tableTest($mysqli, $tableAvailability, __LINE__);
tableTest($mysqli, $tableApplicantReferences, __LINE__);

//Data Insertion Functions
$end = ");";
//Staff Table
$staffData = $staffInsertion . "'Peter', 'Rogers', 'DodoBird', 'Mammoth'" . $end;
tableInsert($mysqli, $staffData, __LINE__);
//Jobs Table
$jobsData = $jobsInsertion . "21, 2121, 'SQL & PHP Code', '2017/01/21', 'Programmer'" . $end;
tableInsert($mysqli, $jobsData, __LINE__);
//Personal Table
$personalData = $personalInsertion . " 41, 21,'Daniel','Rozek',679,'Pimlico Rd.', 'Kelowna', 'BC', 'V1W2Z6', '778-477-4721', 
	'250-870-0919', 'drobpc@gmail.com', 'cellphone', 'OT', 'Student', '2017/02/10', 'Online'" . $end;
tableInsert($mysqli, $personalData, __LINE__);

/*$expertiseData = $expertiseInsertion . "21, 'NO', 'NO', 'NO', 'YES', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 
	'Organization'" . $end;
tableInsert($mysqli, $expertiseData, __LINE__);
$skillsData = $skillsInsertion . "21,3,1,3,1,4,1,1,1,1,1,1,1,1,1,1,1,1,3,1,1,1,1,1,1,1,5,1,1,1,1,1,1" . $end;
tableInsert($mysqli, $skillsData, __LINE__);
$otherStatusTransportData = $otherStatusTransportInsertion . "21, 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES', 'NO', 'Email',
	'?>$15', 'files'" . $end;
tableInsert($mysqli, $otherStatusTransportData, __LINE__);

*/
//Cities
$citiesData = $citiesInsertion . "21, 'NO', 'NO', 'NO', 'YES', 'YES', 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'NO',
	'NO', 'YES', 'YES', 'NO', 'NO'" . $end;
tableInsert($mysqli, $citiesData, __LINE__);
//Availability Table
$availablilityData = $availabilityInsertion . "21, 'NO', 'YES', 'YES', 'NO', 'NO', 'YES', 'YES', 'YES', 'YES', 'YES',
	'NO', 'NO'" . $end;
tableInsert($mysqli, $availablilityData, __LINE__);
//ApplicantReferences
$applicantReferencesData = $applicantReferencesInsertion . "21, 'Ken Chidlow', 'Java Teacher', 'OK College', 'ken@oc.com',
	'255-255-2552', 'Alan Kennedy', 'SQL Teacher', 'OK College', 'alan@oc.com',	'250-250-2550', 'Michael Saad', 
	'English Teacher', 'OK College', 'msaad@oc.com', '252-252-2222'" . $end;
tableInsert($mysqli, $applicantReferencesData, __LINE__);
?>