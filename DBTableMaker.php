<?php
$mysqli = mysqli_connect("localhost", "OkStaff", 'staffing', "okstaff");
function tableCreationTest($temp, $query){
	if($temp->query($query) === true) {
		echo nl2br("Created Table\n");
	}else{
	   echo nl2br("Already Made Table\n");
	}
}
$tableCreation = "create table staff(
	firstName varchar(25),
	lastName varchar(25),
	password varchar(25),
	username varchar(25));";
tableCreationTest($mysqli, $tableCreation);
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
	status varchar(25),
	dateForm varchar(10));";
tableCreationTest($mysqli, $tableCreation);
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
tableCreationTest($mysqli, $tableCreation);
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
tableCreationTest($mysqli, $tableCreation);
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
tableCreationTest($mysqli, $tableCreation);
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
tableCreationTest($mysqli, $tableCreation);
$tableCreation = "create table jobs(
	applicantID int,
	jobNum int,
	jobName varchar(80),
	jobDate varchar(10),
	jobType varchar(25));";
tableCreationTest($mysqli, $tableCreation);
$tableCreation = "create table applicantReferences(
	applicantID int,
	supervisorName varchar(25),
	superTitle varchar(25),
	companyName varchar(25),
	referenceEmail varchar(50),
	referencePhone varchar(15));";
tableCreationTest($mysqli, $tableCreation);
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
tableCreationTest($mysqli, $tableCreation);

?>