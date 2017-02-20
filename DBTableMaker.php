<?php
//connect to database
$mysqli = mysqli_connect("localhost", "OkStaff", 'staffing', "okstaff");
//TODO report failure

//if database is connected
//rename applicantID to ApllicationID
// split queries int two the definition and data
//try function
//spacing
//comments
//multip file php: http://php.net/manual/en/function.include.php
//DBFunctions.php		contains functions to connect insert into database, queries...
//DBFunctionsTest.php	clears db, creates tables(calls DBTableMaker.php, inserts test data and tests searches

function tableTest($temp, $query, $lineNumber){
	if($temp->query($query) === true) {
		echo nl2br("Created Table. (Line:".$lineNumber.")\n");
	}else{
	   echo nl2br("Already Made Table. (Line:".$lineNumber.")\n");
	}
}

function tableInsert($temp, $query, $lineNumber){
	if($temp->query($query) === true) {
		echo nl2br("Insertion of Data was success. (Line:".$lineNumber.")\n");
	}else{
	   echo nl2br("Insertion Failed. (Line:".$lineNumber.")\n");
	}
}

function tableSelectTest($temp, $query){
	$tempResult = $temp->query($query);
	if($tempResult->num_rows > 0) {
		while($row = $tempResult->fetch_assoc()){
			echo "ID: ".$row["applicantID"]." Name: ".$row["firstName"]." ".$row["lastName"]."<br>".
			" Address".$row["addressNum"]." ".$row["street"].", ".$row["city"]." ".$row["province"].", ".
			$row["postal"]."<br>Home: ".$row["homePhone"]." Cell: ".$row["cellPhone"]." Email:".
			$row["email"]." Preffered: ".$row["PCMethod"]."<br>Work Type: ".$row["workType"].
			" Work Status: ".$row["workStatus"]." Date: ".$row["dateForm"]." File Path: ".$row["filePath"].
			"<br>Job# ".$row["jobNum"]." Job: ".$row["jobName"]." Date: ".$row["jobDate"]." Type: ".$row["jobType"]."<br>";
		}
	} else {
    echo "0 results";
	}
}

$tableCreation = "create table staff(
	firstName varchar(25),
	lastName varchar(25),
	password varchar(25),
	username varchar(25));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table personal(
	applicantID int,
	firstName varchar(25),
	lastName varchar(25),
	addressNum int,
	street varchar(25),
	city varchar(20),
	province varchar(3),
	postal varchar(7),
	homePhone varchar(15),
	cellPhone varchar(15),
	email varchar(50),
	PCMethod varchar(10),
	workType varchar(4),
	workStatus varchar(25),
	dateForm varchar(10));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table expertise(
	applicantID int,
	accounting varchar(3),
	administrative varchar(3),
	bookKeeping varchar(3),
	customerService varchar(3),
	dataEntry varchar(3),
	legalOffice varchar(3),
	management varchar(3),
	medicalOffice varchar(3),
	payroll varchar(3),
	reception varchar(3),
	salesMarketing varchar(3),
	other varchar(25));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table skills(
	applicantID int,
	MSAccess int,
	MSExcel int,
	MSWord int,
	MSOutlook int,
	MSPowerPoint int,
	MSPublisher int,
	quickBooks int,
	SAccountingS int,
	ACCPAC int,
	SAP int,
	otherSW int,
	correspondence int,
	dataEntries int,
	dictaphone int,
	legal int,
	medical int,
	minuteTaking int,
	typingWPM int,
	multiLinesLow int,
	multiLinesMiddle int,
	multiLinesHigh int,
	accountingP int,
	accountingR int,
	BURecovery int,
	bankR int,
	collections int,
	deposits int,
	financialS int,
	payroll int,
	taxReturns int,
	trialB int,
	otherA int);";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table otherStatusTransport(
	applicantID int,
	citizen varchar(3),
	legalWork varchar(3),
	crimeRecord varchar(3),
	permission varchar(3),
	car varchar(3),
	bus varchar(3),
	bike varchar(3),
	otherTP varchar(10),
	notice varchar(25),
	salaryE varchar(10),
	filePath varchar(50));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table cities(
	applicantID int,
	armstrong varchar(3),
	enderby varchar(3),
	kamloops varchar(3),
	kelowna varchar(3),
	lakeCountry varchar(3),
	OKFalls varchar(3),
	oliver varchar(3),
	osoyoos varchar(3),
	oyama varchar(3),
	peachland varchar(3),
	penticton varchar(3),
	salmonArm varchar(3),
	sicamous varchar(3),
	summerland varchar(3),
	vernon varchar(3),
	westKelowna varchar(3),
	winfield varchar(3),
	otherOne varchar(3),
	otherTwo varchar(3),
	otherThree varchar(3));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table jobs(
	applicantID int,
	jobNum int,
	jobName varchar(80),
	jobDate varchar(10),
	jobType varchar(25));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table applicantReferences(
	applicantID int,
	supervisorName varchar(25),
	superTitle varchar(25),
	companyName varchar(25),
	referenceEmail varchar(50),
	referencePhone varchar(15));";
tableTest($mysqli, $tableCreation, __LINE__);
$tableCreation = "create table availability(
	applicantID int,
	dayTimes varchar(3),
	partTimes varchar(3),
	fullTimes varchar(3),
	evenings varchar(3),
	weekends varchar(3),
	monday varchar(3),
	tuesday varchar(3),
	wednesday varchar(3),
	thursday varchar(3),
	friday varchar(3),
	saturday varchar(3),
	sunday varchar(3));";
tableTest($mysqli, $tableCreation, __LINE__);

//Start of Application 1:
$tableInsertion = "insert into personal(applicantID,firstName, lastName, addressNum, street, 
	city, province, postal, homePhone, cellPhone, email, PCMethod, 
	workType, workStatus, dateForm) 
	values (21,'Daniel','Rozek',679,'Pimlico Rd.', 'Kelowna', 'BC', 'V1W2Z6', '778-477-4721', 
	'250-870-0919', 'drobpc@gmail.com', 'cellphone', 'OT', 'Student', '2017/02/10');";
tableInsert($mysqli, $tableInsertion, __LINE__);
$tableInsertion = "insert into expertise(applicantID, accounting, administrative, bookKeeping, 
	customerService, dataEntry, legalOffice, management, medicalOffice, 
	payroll, reception, salesMarketing, other) 
	values (21, 'NO', 'NO', 'NO', 'YES', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 'Organization');";
tableInsert($mysqli, $tableInsertion, __LINE__);
$tableInsertion = "insert into skills(applicantID, MSAccess, MSExcel, MSWord, MSOutlook, 
	MSPowerPoint, MSPublisher, quickBooks, SAccountingS, ACCPAC, SAP, 
	otherSW, correspondence, dataEntries, dictaphone, legal, medical, 
	minuteTaking, typingWPM, multiLinesLow, multiLinesMiddle, 
	multiLinesHigh, accountingP, accountingR, BURecovery, bankR, 
	collections, deposits, financialS, payroll, taxReturns, trialB, otherA)
	values (21,3,1,3,1,4,1,1,1,1,1,1,1,1,1,1,1,1,3,1,1,1,1,1,1,1,5,1,1,1,1,1,1);";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableInsertion = "insert into otherStatusTransport(applicantID, citizen, legalWork,
	crimeRecord, permission, car, bus, bike, otherTP, notice, salaryE, filePath) 
	values (21, 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES', 'NO', 'Email', '?>$15', 'files');";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableInsertion = "insert into cities(applicantID, armstrong, enderby, kamloops, kelowna, 
	lakeCountry, OKFalls, oliver, osoyoos, oyama, peachland, penticton, 
	salmonArm, sicamous, summerland, vernon, westKelowna, winfield, 
	otherOne, otherTwo, otherThree) 
	values (21, 'NO', 'NO', 'NO', 'YES', 'YES', 'YES', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'NO',
	'NO', 'YES', 'YES', 'NO', 'NO', 'NO', 'NO');";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableInsertion = "insert into jobs(applicantID, jobNum, jobName, jobDate, jobType)
	values (21,2121, 'SQL & PHP Code', '2017/01/21', 'Programmer');";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableInsertion = "insert into applicantReferences(applicantID, supervisorName, superTitle, 
	companyName, referenceEmail, referencePhone)
	values (21, 'Ken Chidlow', 'Java Teacher', 'OK College', 'ken@oc.com', '255-255-2552');";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableInsertion = "insert into availability(applicantID, dayTimes, partTimes, fullTimes, 
	evenings, weekends, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
	values (21, 'NO', 'YES', 'YES', 'NO', 'NO', 'YES', 'YES', 'YES', 'YES', 'YES', 'NO', 'NO');";
tableInsert($mysqli, $tableInsertion, __LINE__);
//end of application 1

$tableInsertion = "insert into staff(firstName, lastName, password, username)
	values ('Peter', 'Rogers', 'DodoBird', 'Mammoth');";
tableInsert($mysqli, $tableInsertion, __LINE__);

$tableSelection = "select p.applicantID, p.firstName, p.lastName, p.addressNum, p.street, 
    p.city, p.province, p.postal, p.homePhone, p.cellPhone, p.email, 
	p.PCMethod, p.workType, p.workStatus, p.dateForm, 
	ost.filePath, 
	j.jobNum, j.jobName, j.jobDate, j.jobType
	from personal p, otherStatusTransport ost, jobs j
	where p.applicantID = ost.applicantID
	and p.applicantID = j.applicantID
	and p.workType = 'OT';";
tableSelectTest($mysqli, $tableSelection);

?>