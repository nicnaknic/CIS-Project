<?php
//Insertion Array Variables
$staff = array_fill_keys(array('firstName', 'lastName', 'userName', 'password'), '');
$jobs = array('apptID'=>0, 'job#'=>0, 'name'=>'', 'date'=>'', 'type'=>'');
$personal = array('appnID'=>0, 'apptID'=>0, 'firstName'=>'', 'lastName'=>'', 'address#'=>0, 'street'=>'', 'city'=>'', 
'province'=>'', 'postal'=>'', 'homePhone'=>'', 'cellPhone'=>'', 'email'=>'', 'PCMethod'=>'', 'workType'=>'', 
'employerStatus'=>'', 'dateForm'=>'', 'findOKStaff'=>'');
$permanent = array('apptID'=>0, 'mainExpertise'=>'', 'roleInterest'=>'', 'perfectCandidate'=>'', 
'salaryExpect'=>'', 'mainTransport'=>'', 'filePath'=>'');
$citizenO = array('apptID'=>0, 'citizen'=>'', 'legalWork'=>'', 'crimeRecord'=>'', 'yesWhat'=>'', 'permission'=>'', 'noWhy'=>'', 
'pastBonding'=>'', 'eligibleBonding'=>'', 'certificates'=>'', 'lifting'=>'', 'driverLicense'=>'', 'driveClass'=>'', 'airBrake'=>'', 
'mainTransport'=>'', 'notice'=>'', 'hourlyRate'=>'', 'filePath'=>'');
$education = array('apptID'=>0, 'highSchool'=>'', 'associateDegree'=>'', 'bachelorDegree'=>'', 'masterDegree'=>'', 'doctorDegree'=>'', 
'technical'=>'', 'certificate'=>'', 'diploma'=>'', 'AShipTrade'=>'', 'AShipLevel'=>'', 'JManTrade'=>'', 'noEducation'=>'', 'student'=>'', 
'studyData'=>'', 'languageRead'=>'', 'languageWrite'=>'', 'languageSpeak'=>'');
$expertise = array('apptID'=>0, 'accountingEX'=>'', 'administrative'=>'', 'bookKeeping'=>'', 'business'=>'', 'construction'=>'', 
'customerService'=>'', 'dataEntry'=>'', 'engineering'=>'', 'equipment'=>'', 'foodService'=>'', 'generalLabour'=>'', 'healthSafety'=>'', 
'healthCare'=>'', 'hospitality'=>'', 'humanResources'=>'', 'infoTechnology'=>'', 'landscaping'=>'', 'legalAssistant'=>'', 'manufacture'=>'', 
'marketing'=>'', 'management'=>'', 'medical'=>'', 'oilGas'=>'', 'payrollEX'=>'', 'projectM'=>'', 'reception'=>'', 'sales'=>'', 'transport'=>'', 
'trades'=>'', 'warehouse'=>'', 'otherExpert'=>'');
$skillPrograms = array('apptID'=>0, 'accounting'=>'', 'banking'=>'', 'CRManagement'=>'', 'DBManagement'=>'', 'designDraft'=>'', 
'healthCare'=>'', 'spreadsheets'=>'', 'payroll'=>'', 'presentations'=>'', 'PManagment'=>'', 'publish'=>'', 'transript'=>'', 
'wordProcess'=>'', 'otherSkillP'=>'');
$moneySkills = array('apptID'=>0, 'payable'=>'', 'receivable'=>'', 'backups'=>'', 'bankR'=>'', 'collections'=>'', 'deposits'=>'', 
'financial'=>'', 'fullCycleAcc'=>'', 'journal'=>'', 'taxBusiness'=>'', 'taxPersonal'=>'', 'entities'=>'', 'payrollBenefits'=>'', 
'trialBalances'=>'', 'yearEndFin'=>'', 'otherMoneySkill'=>'');
$skills = array('apptID'=>0, 'MAssembly'=>'', 'MConstruction'=>'', 'MLine'=>'', 'MPieceWork'=>'', 'MPrinting'=>'', 'MShipping'=>'', 'MWarehouse'=>'', 
'EAKitting'=>'', 'EAPCBoards'=>'', 'TIQCAutomated'=>'', 'TIQCManual'=>'', 'TIQCFinal'=>'', 'MADiscDrive'=>'', 'MAMachineParts'=>'', 'HCatering'=>'', 
'HBartending'=>'', 'HHost'=>'', 'HWaitstaff'=>'', 'HCookChef'=>'');
$cities = array('apptID'=>0, 'armstrong'=>'', 'enderby'=>'', 'kamloops'=>'', 'kelowna'=>'', 'lakeCountry'=>'', 'OKFalls'=>'', 'oliver'=>'', 'osoyoos'=>'', 
'oyama'=>'', 'peachland'=>'', 'penticton'=>'', 'salmonArm'=>'', 'sicamous'=>'', 'summerland'=>'', 'vernon'=>'', 'westKelowna'=>'', 'winfield'=>'', 'otherCity'=>'');
$available = array('apptID'=>0, 'dayTimes'=>'', 'partTimes'=>'', 'fullTimes'=>'', 'evenings'=>'', 'weekends'=>'', 'monday'=>'', 'tuesday'=>'', 'wednesday'=>'', 
'thursday'=>'', 'friday'=>'', 'saturday'=>'', 'sunday'=>'');
$references = array('apptID'=>0, 'supervisorName1'=>'', 'superTitle1'=>'', 'companyName1'=>'', 'referenceEmail1'=>'', 'referencePhone1'=>'', 'supervisorName2'=>'', 'superTitle2'=>'', 
'companyName2'=>'', 'referenceEmail2'=>'', 'referencePhone2'=>'', 'supervisorName3'=>'', 'superTitle3'=>'', 'companyName3'=>'', 'referenceEmail3'=>'', 'referencePhone3'=>'');
//Table Creation Data
$tableStaff = "create table staff(
	firstName varchar(25),
	lastName varchar(25),
	passwords varchar(25),
	username varchar(25));";
$tableJobs = "create table jobs(
	applicantID int,
	jobNum int,
	jobName varchar(80),
	jobDate varchar(10),
	jobType varchar(25));";
$tablePersonal = "create table personal(
	applicationID int,
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
	employerStatus varchar(50),
	dateForm varchar(10),
	findOKStaff varchar(50));";
$tablePermanentData = "create table permanentData(
	applicantID int,
	mainExpertise varchar(100),
	roleInterest varchar(100),
	perfectCandidate varchar(100),
	salaryExpect varchar(50),
	mainTransport varchar(10),
	filePath varchar(50));";
$tableCitizenOther = "create table citizenOther(
	applicantID int,
	citizen varchar(3),
	legalWork varchar(3),
	crimeRecord varchar(3),
	yesWhat varchar(100),
	permission varchar(3),
	noWhy varchar(100),
	pastBonding varchar(3),
	eligibleBonding varchar(3),
	certificates varchar(50),
	lifting varchar(3),
	driverLicense varchar(3),
	driveClass int,
	airBrake varchar(3),
	mainTransport varchar(10),
	notice varchar(50),
	hourlyRate varchar(10),
	filePath varchar(50))";
$tableEducation = "create table education(
	applicantID int, 
	highSchool varchar(3),
	associateDegree varchar(3),
	bachelorDegree varchar(3),
	masterDegree varchar(3),
	doctorDegree varchar(3),
	technical varchar(3),
	certificate varchar(3),
	diploma varchar(3),
	AShipTrade varchar(25),
	AShipLevel int,
	JManTrade varchar(25),
	noEducation varchar(3),
	student varchar(3),
	studyData varchar(50),
	languageRead varchar(50),
	languageWrite varchar(50),
	languageSpeak varchar(50));";
$tableExpertise = "create table expertise(
	applicantID int,
	accountingEX varchar(3),
	administrative varchar(3),
	bookKeeping varchar(3),
	business varchar(3),
	construction varchar(3),
	customerService varchar(3),
	dataEntry varchar(3),
	engineering varchar(3),
	equipment varchar(3),
	foodService varchar(3),
	generalLabour varchar(3),
	healthSafety varchar(3),
	healthCare varchar(3),
	hospitality varchar(3),
	humanResources varchar(3),
	infoTechnology varchar(3),
	landscaping varchar(3),
	legalAssistant varchar(3),
	manufacture varchar(3),
	marketing varchar(3),
	management varchar(3),
	medical varchar(3),
	oilGas varchar(3),
	payrollEX varchar(3),
	projectM varchar(3),
	reception varchar(3),
	sales varchar(3),
	transport varchar(3),
	trades varchar(3),
	warehouse varchar(3),
	otherExpert varchar(50));";
$tableSkillPrograms = "create table skillPrograms(
	applicantID int,
	accounting varchar(25),
	banking varchar(25),
	CRManagement varchar(25),
	DBManagement varchar(25),
	designDraft varchar(25),
	healthCare varchar(25),
	spreadsheets varchar(25),
	payroll varchar(25),
	presentations varchar(25),
	PManagment varchar(25),
	publish varchar(25),
	transript varchar(25),
	wordProcess varchar(25),
	otherSkillP varchar(25));";
$tableMoneySkills = "create table moneySkills(
	applicantID int,
	payable varchar(3),
	receivable varchar(3),
	backups varchar(3),
	bankR varchar(3),
	collections varchar(3),
	deposits varchar(3),
	financial varchar(3),
	fullCycleAcc varchar(3),
	journal varchar(3),
	taxBusiness varchar(3),
	taxPersonal varchar(3),
	entities varchar(3),
	payrollBenefits varchar(3),
	trialBalances varchar(3),
	yearEndFin varchar(3),
	otherMoneySkill varchar(3));";
$tableOtherSkills = "create table otherSkills(
	applicantID int,
	MAssembly varchar(25),
	MConstruction varchar(25),
	MLine varchar(25),
	MPieceWork varchar(25),
	MPrinting varchar(25),
	MShipping varchar(25),
	MWarehouse varchar(25),
	EAKitting varchar(25),
	EAPCBoards varchar(25),
	TIQCAutomated varchar(25),
	TIQCManual varchar(25),
	TIQCFinal varchar(25),
	MADiscDrive varchar(25),
	MAMachineParts varchar(25),
	HCatering varchar(25),
	HBartending varchar(25),
	HHost varchar(25),
	HWaitstaff varchar(25),
	HCookChef varchar(25));";
$tableCities = "create table cities(
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
	otherCity varchar(3));";
$tableAvailability = "create table availability(
	applicantID int,
	dayTimes varchar(3),
	partTimes varchar(3),
	fullTimes varchar(3),
	evenings varchar(3),
	weekends varchar(3),
	monday varchar(50),
	tuesday varchar(50),
	wednesday varchar(50),
	thursday varchar(50),
	friday varchar(50),
	saturday varchar(50),
	sunday varchar(50));";	
$tableApplicantReferences = "create table applicantReferences(
	applicantID int,
	supervisorName1 varchar(50),
	superTitle1 varchar(50),
	companyName1 varchar(50),
	referenceEmail1 varchar(50),
	referencePhone1 varchar(15),
	supervisorName2 varchar(50),
	superTitle2 varchar(50),
	companyName2 varchar(50),
	referenceEmail2 varchar(50),
	referencePhone2 varchar(15),
	supervisorName3 varchar(50),
	superTitle3 varchar(50),
	companyName3 varchar(50),
	referenceEmail3 varchar(50),
	referencePhone3 varchar(15));";
	
//Table Insertion Data
$staffInsertion = "insert into staff(firstName, lastName, passwords, username) values (";
$jobsInsertion = "insert into jobs(applicantID, jobNum, jobName, jobDate, jobType) values (";
$personalInsertion = "insert into personal(applicationID, applicantID, firstName, lastName, addressNum,
	street, city, province, postal, homePhone, cellPhone, email, PCMethod, workType, employerStatus, 
	dateForm, findOKStaff) values (";
$permanentDataInsertion = "insert into permanentData(applicantID, mainExpertise, roleInterest, perfectCandidate, 
	salaryExpect, mainTransport, filePath) values (";
$citizenOtherInsertion = "insert into citizenOther(applicantID, citizen, legalWork, crimeRecord, yesWhat, permission, 
	noWhy, pastBonding, eligibleBonding, certificates, lifting, driverLicense, driveClass, airBrake, mainTransport, 
	notice, hourlyRate, filePath) values (";
$educationInsertion = "insert into education(applicantID, highSchool, associateDegree, bachelorDegree, masterDegree, 
	doctorDegree, technical, certificate, diploma, AShipTrade, AShipLevel, JManTrade, noEducation, student, studyData, 
	languageRead, languageWrite, languageSpeak) values (";
$expertiseInsertion = "insert into expertise(applicantID, accountingEX, administrative, bookKeeping, business, construction, 
	customerService, dataEntry, engineering, equipment, foodService, generalLabour, healthSafety, healthCare, hospitality, 
	humanResources, infoTechnology, landscaping, legalAssistant, manufacture, marketing, management, medical, oilGas, 
	payrollEX, projectM, reception, sales, transport, trades, warehouse, otherExpert) values (";
$skillProgramsInsertion = "insert into skillPrograms(applicantID, accounting, banking, CRManagement, DBManagement, 
	designDraft, healthCare, spreadsheets, payroll, presentations, PManagment, publish, transript, wordProcess, 
	otherSkillP) values (";
$moneySkillsInsertion = "insert into moneySkills(applicantID, payable, receivable, backups, bankR, collections, deposits, 
	financial, fullCycleAcc, journal, taxBusiness, taxPersonal, entities, payrollBenefits, trialBalances, yearEndFin, 
	otherMoneySkill) values (";
$otherSkillsInsertion = "insert into otherSkills(applicantID, MAssembly, MConstruction, MLine, MPieceWork, MPrinting, 
	MShipping, MWarehouse, EAKitting, EAPCBoards, TIQCAutomated, TIQCManual, TIQCFinal, MADiscDrive, MAMachineParts, 
	HCatering, HBartending, HHost, HWaitstaff, HCookChef) values (";
$citiesInsertion = "insert into cities(applicantID, armstrong, enderby, kamloops, kelowna, 
	lakeCountry, OKFalls, oliver, osoyoos, oyama, peachland, penticton, salmonArm, sicamous, summerland, vernon, 
	westKelowna, winfield, otherCity) values (";
$availabilityInsertion = "insert into availability(applicantID, dayTimes, partTimes, fullTimes, 
	evenings, weekends, monday, tuesday, wednesday, thursday, friday, saturday, sunday) values (";
$applicantReferencesInsertion = "insert into applicantReferences(applicantID, supervisorName1, superTitle1, 
	companyName1, referenceEmail1, referencePhone1, supervisorName2, superTitle2, companyName2, referenceEmail2, 
	referencePhone2, supervisorName3, superTitle3, companyName3, referenceEmail3, referencePhone3) values (";

// Table Selection Data
$StaffSelection ="select s.firstName, s.lastName, s.passwords, s.username 
	from staff s;";
$PermanentSelection = "select distinct p.applicationID, p.applicantID, p.firstName, p.lastName, p.addressNum, 
	p.street, p.city, p.province, p.postal, p.homePhone, p.cellPhone, p.email, p.PCMethod, p.workType, 
	p.employerStatus, p.dateForm, p.findOKStaff,
	pd.mainExpertise, pd.roleInterest, pd.perfectCandidate, pd.salaryExpect, 
	pd.mainTransport, pd.filePath,
	j.jobNum, j.jobName, j.jobDate, j.jobType
	from personal p, permanentData pd, jobs j
	where p.applicantID = pd.applicantID
	and p.applicantID = j.applicantID
	and p.workType = 'OP';";

$TemporySelection = "select distinct p.applicationID, p.applicantID, p.firstName, p.lastName, p.addressNum, 
	p.street, p.city, p.province, p.postal, p.homePhone, p.cellPhone, p.email, p.PCMethod, p.workType, 
	p.employerStatus, p.dateForm, p.findOKStaff,
	j.jobNum, j.jobName, j.jobDate, j.jobType,
	co.citizen, co.legalWork, co.crimeRecord, co.yesWhat, co.permission, co.noWhy, co.pastBonding, co.eligibleBonding, 
	co.certificates, co.lifting, co.driverLicense, co.driveClass, co.airBrake, co.mainTransport, co.notice, 
	co.hourlyRate, co.filePath,
	ed.highSchool, ed.associateDegree, ed.bachelorDegree, ed.masterDegree, ed.doctorDegree, ed.technical, 
	ed.certificate, ed.diploma, ed.AShipTrade, ed.AShipLevel, ed.JManTrade, ed.noEducation, ed.student, ed.studyData, 
	ed.languageRead, ed.languageWrite, ed.languageSpeak,
	ex.accountingEX, ex.administrative, ex.bookKeeping, ex.business, ex.construction, ex.customerService, ex.dataEntry, 
	ex.engineering, ex.equipment, ex.foodService, ex.generalLabour, ex.healthSafety, ex.healthCare, ex.hospitality, 
	ex.humanResources, ex.infoTechnology, ex.landscaping, ex.legalAssistant, ex.manufacture, ex.marketing, 
	ex.management, ex.medical, ex.oilGas, ex.payrollEX, ex.projectM, ex.reception, ex.sales, ex.transport, ex.trades, 
	ex.warehouse, ex.otherExpert,
	sp.accounting, sp.banking, sp.CRManagement, sp.DBManagement, sp.designDraft, sp.healthCare, sp.spreadsheets, 
	sp.payroll, sp.presentations, sp.PManagment, sp.publish, sp.transript, sp.wordProcess, sp.otherSkillP,
	ms.payable, ms.receivable, ms.backups, ms.bankR, ms.collections, ms.deposits, ms.financial, ms.fullCycleAcc, 
	ms.journal, ms.taxBusiness, ms.taxPersonal, ms.entities, ms.payrollBenefits, ms.trialBalances, 
	ms.yearEndFin, ms.otherMoneySkill,
	os.MAssembly, os.MConstruction, os.MLine, os.MPieceWork, os.MPrinting, os.MShipping, os.MWarehouse, os.EAKitting, 
	os.EAPCBoards, os.TIQCAutomated, os.TIQCManual, os.TIQCFinal, os.MADiscDrive, os.MAMachineParts, os.HCatering, 
	os.HBartending, os.HHost, os.HWaitstaff, os.HCookChef,
	c.armstrong, c.enderby, c.kamloops, c.kelowna, c.lakeCountry, c.OKFalls, c.oliver, c.osoyoos, c.oyama, c.peachland,
	c.penticton, c.salmonArm, c.sicamous, c.summerland, c.vernon, c.westKelowna, c.winfield, c.otherCity,
	a.dayTimes, a.partTimes, a.fullTimes, a.evenings, a.weekends, a.monday, a.tuesday, a.wednesday, a.thursday,
	a.friday, a.saturday, a.sunday, 
	ar.supervisorName1, ar.superTitle1, ar.companyName1, ar.referenceEmail1, ar.referencePhone1, 
	ar.supervisorName2, ar.superTitle2, ar.companyName2, ar.referenceEmail2, ar.referencePhone2, 
	ar.supervisorName3, ar.superTitle3, ar.companyName3, ar.referenceEmail3, ar.referencePhone3
	from jobs j, personal p, citizenOther co, education ed, expertise ex, skillPrograms sp, moneySkills ms, 
	otherSkills os, cities c, availability a, ApplicantReferences ar
	where p.applicantID = j.applicantID
	and p.applicantID = co.applicantID
	and p.applicantID = ed.applicantID
	and p.applicantID = ex.applicantID
	and p.applicantID = sp.applicantID
	and p.applicantID = ms.applicantID
	and p.applicantID = os.applicantID
	and p.applicantID = c.applicantID
	and p.applicantID = a.applicantID
	and p.applicantID = ar.applicantID
	and p.workType <> 'OP';";
?>