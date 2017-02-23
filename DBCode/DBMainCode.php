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
tableTest($mysqli, $tableStaff, __LINE__); //4 Columns
tableTest($mysqli, $tableJobs, __LINE__); //5 Columns
tableTest($mysqli, $tablePersonal, __LINE__); //17 Columns
tableTest($mysqli, $tablePermanentData, __LINE__); //8 Columns
tableTest($mysqli, $tableCitizenOther, __LINE__); //18 Columns
tableTest($mysqli, $tableEducation, __LINE__); //18 Columns
tableTest($mysqli, $tableExpertise, __LINE__); //32 Columns
tableTest($mysqli, $tableSkillPrograms, __LINE__); //15 Columns
tableTest($mysqli, $tableMoneySkills, __LINE__); //17 Columns
tableTest($mysqli, $tableOtherSkills, __LINE__); //20 Columns
tableTest($mysqli, $tableCities, __LINE__); //19 Columns
tableTest($mysqli, $tableAvailability, __LINE__); //13 Columns
tableTest($mysqli, $tableApplicantReferences, __LINE__); //16 Columns

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
//Permanent Table
$permanentData = $permanentDataInsertion . "21,'Programming, Organizing, Sorting, TKD', 'Programming', 
	'Computer Science Diploma', 'No Job',  '13$/hour', 'bike/bus', 'dsad/sdsa/sdsd.ccc'" . $end;
tableInsert($mysqli, $permanentData, __LINE__);
//CitizenOther Table
$citizenOtherData = $citizenOtherInsertion. "21,'YES','YES','NO','NO','YES','YES','NO','YES','Food Safe Level 1','YES',
	'NO','NO','NO','Bike/Bus','Email','$13/hour','adsf/sdf/dsafsd.dfd'" . $end;
tableInsert($mysqli, $citizenOtherData, __LINE__);
//Education Table
$educationData = $educationInsertion . "21,'YES','NO','NO','NO','NO','YES','YES','YES','NO',0,'NO','NO','YES',
	'Computer Science', 'English', 'English', 'English, Czech'" . $end;
tableInsert($mysqli, $educationData, __LINE__);
//Expertise Table
$expertiseData = $expertiseInsertion . "21,'NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO',
	'NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO'" . $end;
tableInsert($mysqli, $expertiseData, __LINE__);
//SkillPrograms Table 
$skillProgramsData = $skillProgramsInsertion . "21,'NO','NO','NO','Heidi SQL', 'SketchUp','NO','Libre Office','NO',
	'Libre Office','NO','NO','NO','NO','Notepad++'" . $end;
tableInsert($mysqli, $skillProgramsData, __LINE__);
//MoneySkills Table
$moneySkillsData = $moneySkillsInsertion . "21,'NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO','NO',
	'NO','NO'" . $end;
tableInsert($mysqli, $moneySkillsData, __LINE__);
//Other Skills Table
$otherSkillsData = $otherSkillsInsertion . "21, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 
	'NO', 'NO', 'NO', 'NO', 'NO', 'NO'" . $end;
tableInsert($mysqli, $otherSkillsData, __LINE__);
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