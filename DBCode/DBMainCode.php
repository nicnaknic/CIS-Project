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
//Function Staff Selection
function StaffSelectTest($temp, $query){
	$tempResult = $temp->query($query);
	if($tempResult->num_rows > 0) {
		while($row = $tempResult->fetch_assoc()){
			echo "<br>Staff Name: ".$row["firstName"]." ".$row["lastName"].
			"<br>Password: ".$row["passwords"]." Username: ".$row["username"]."<br>";
		}
	} else {
    echo "0 results";
	}
}
//Function Permanent Selection
function PermanentSelectTest($temp, $query){
	$tempResult = $temp->query($query);
	if($tempResult->num_rows > 0) {
		while($row = $tempResult->fetch_assoc()){
			echo "<br>IDapp: ".$row["applicationID"]."ID: ".$row["applicantID"]." Name: ".$row["firstName"]." ".$row["lastName"]."<br>".
			" Address: ".$row["addressNum"]." ".$row["street"].", ".$row["city"]." ".$row["province"].", ".
			$row["postal"]."<br>Home: ".$row["homePhone"]." Cell: ".$row["cellPhone"]." Email: ".
			$row["email"]." Preffered: ".$row["PCMethod"]."<br>Work Type: ".$row["workType"].
			" Work Status: ".$row["employerStatus"]." Date: ".$row["dateForm"].", ".$row["findOKStaffing"]."<br>".
			$row["mainExpertise"].", ".$row["roleInterest"].", ".$row["perfectCandidate"].", ".$row["salaryExpect"].", ".
			$row["mainTransport"].", File Path: ".$row["filePath"].
			"<br>Job# ".$row["jobNum"]." Job: ".$row["jobName"]." Date: ".$row["jobDate"]." Type: ".$row["jobType"]."<br>";
		}
	} else {
    echo "0 results";
	}
}

//Function Tempory Selection
function TemporySelectTest($temp, $query){
	$tempResult = $temp->query($query);
	if($tempResult->num_rows > 0) {
		while($row = $tempResult->fetch_assoc()){
			echo "<br>IDapp: ".$row["applicationID"]."ID: ".$row["applicantID"]." Name: ".$row["firstName"]." ".$row["lastName"]."<br>".
			" Address: ".$row["addressNum"]." ".$row["street"].", ".$row["city"]." ".$row["province"].", ".
			$row["postal"]."<br>Home: ".$row["homePhone"]." Cell: ".$row["cellPhone"]." Email: ".
			$row["email"]." Preffered: ".$row["PCMethod"]."<br>Work Type: ".$row["workType"].
			" Work Status: ".$row["employerStatus"]." Date: ".$row["dateForm"].", ".$row["findOKStaff"]."<br>".
			"<br>Job# ".$row["jobNum"]." Job: ".$row["jobName"]." Date: ".$row["jobDate"]." Type: ".$row["jobType"].
			"<br>Citizen: ".$row["citizen"].", ".$row["legalWork"].", ".$row["crimeRecord"].", ".$row["yesWhat"].", ".$row["permission"].
			", ".$row["noWhy"].", ".$row["pastBonding"].", ".$row["eligibleBonding"].", ".$row["certificates"].", ".
			$row["lifting"].", ".$row["driverLicense"].", ".$row["driveClass"].", ".$row["airBrake"].", ".$row["mainTransport"].", ".
			$row["notice"].", ".$row["hourlyRate"].", File Path: ".$row["filePath"].
			"<br>Education: ".$row["highSchool"].", ".$row["associateDegree"].", ".$row["bachelorDegree"].", ".$row["masterDegree"].", ".
			$row["doctorDegree"].", ".$row["technical"].", ".$row["certificate"].", ".$row["diploma"].", ".$row["AShipTrade"].", ".
			$row["AShipLevel"].", ".$row["JManTrade"].", ".$row["noEducation"].", ".$row["student"].", ".$row["studyData"].", ".
			$row["languageRead"].", ".$row["languageWrite"].", ".$row["languageSpeak"].
			"<br>Expertise: ".$row["accountingEX"].", ".$row["administrative"].", ".$row["bookKeeping"].", ".$row["business"].", ".
			$row["construction"].", ".$row["customerService"].", ".$row["dataEntry"].", ".$row["engineering"].", ".$row["equipment"].", ".
			$row["foodService"].", ".$row["generalLabour"].", ".$row["healthSafety"].", ".$row["healthCare"].", ".$row["hospitality"].", ".
			$row["humanResources"].", ".$row["infoTechnology"].", ".$row["landscaping"].", ".$row["legalAssistant"].", ".
			$row["manufacture"].", ".$row["marketing"].", ".$row["management"].", ".$row["medical"].", ".$row["oilGas"].", ".
			$row["payrollEX"].", ".$row["projectM"].", ".$row["reception"].", ".$row["sales"].", ".$row["transport"].", ".$row["trades"].", ".
			$row["warehouse"].", ".$row["otherExpert"].
			"<br>Skill Programs: ".$row["accounting"].", ".$row["banking"].", ".$row["CRManagement"].", ".
			$row["DBManagement"].", ".$row["designDraft"].", ".$row["healthCare"].", ".$row["spreadsheets"].", ".$row["payroll"].", ".
			$row["presentations"].", ".$row["PManagment"].", ".$row["publish"].", ".$row["transript"].", ".
			$row["wordProcess"].", ".$row["otherSkillP"].
			"<br>Money Skills: ".$row["payable"].", ".$row["receivable"].", ".$row["backups"].", ".$row["bankR"].", ".
			$row["collections"].", ".$row["deposits"].", ".$row["financial"].", ".$row["fullCycleAcc"].", ".$row["journal"].", ".
			$row["taxBusiness"].", ".$row["taxPersonal"].", ".$row["entities"].", ".$row["payrollBenefits"].", ".$row["trialBalances"].", ".
			$row["yearEndFin"].", ".$row["otherMoneySkill"].
			"<br>Other Skills: ".$row["MAssembly"].", ".$row["MConstruction"].", ".$row["MLine"].", ".
			$row["MPieceWork"].", ".$row["MPrinting"].", ".$row["MShipping"].", ".$row["MWarehouse"].", ".$row["EAKitting"].", ".
			$row["EAPCBoards"].", ".$row["TIQCAutomated"].", ".$row["TIQCManual"].", ".$row["TIQCFinal"].", ".$row["MADiscDrive"].", ".
			$row["MAMachineParts"].", ".$row["HCatering"].", ".$row["HBartending"].", ".$row["HHost"].", ".
			$row["HWaitstaff"].", ".$row["HCookChef"].
			"<br>Cities: ".$row["armstrong"].", ".$row["enderby"].", ".$row["kamloops"].", ".$row["kelowna"].", ".$row["lakeCountry"].", ".
			$row["OKFalls"].", ".$row["oliver"].", ".$row["osoyoos"].", ".$row["oyama"].", ".$row["peachland"].", ".$row["penticton"].", ".
			$row["salmonArm"].", ".$row["sicamous"].", ".$row["summerland"].", ".$row["vernon"].", ".$row["westKelowna"].", ".
			$row["winfield"].", ".$row["otherCity"].
			"<br>Availability: ".$row["dayTimes"].", ".$row["partTimes"].", ".$row["fullTimes"].", ".$row["evenings"].", ".
			$row["weekends"].", ".$row["monday"].", ".$row["tuesday"].", ".$row["wednesday"].", ".$row["thursday"].", ".$row["friday"].", ".
			$row["saturday"].", ".$row["sunday"].
			"<br>References: ".$row["supervisorName1"].", ".$row["superTitle1"].", ".$row["companyName1"].", ".$row["referenceEmail1"].", ".
			$row["referencePhone1"].", ".$row["supervisorName2"].", ".$row["superTitle2"].", ".$row["companyName2"].", ".
			$row["referenceEmail2"].", ".$row["referencePhone2"].", ".$row["supervisorName3"].", ".$row["superTitle3"].", ".
			$row["companyName3"].", ".$row["referenceEmail3"].", ".$row["referencePhone3"];
		}
	} else {
    echo "0 results";
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
	'Computer Science Diploma',  '13$/hour', 'bike/bus', 'dsad/sdsa/sdsd.ccc'" . $end;
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
//Staff Selection
StaffSelectTest($mysqli, $StaffSelection);
PermanentSelectTest($mysqli, $PermanentSelection);
TemporySelectTest($mysqli, $TemporySelection);
?>