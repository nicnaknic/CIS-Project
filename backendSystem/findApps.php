<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applicant Tracking</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"> <!--Included CSS Files-->
    <link href="../css/sticky-footer.css" rel="stylesheet">
    <style>/**Minor CSS changes that didnt need their own file**/       
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus { /*Change the color of navbar items on hover*/
            background-color: #EEEEEE;
        }
        h1{
            color: rgb(28, 158, 203);
        }
        .no-link{
            color: #337ab7;
        }
		.panel-margins{
			margin-bottom: 40px;
		}
		.head-mod{
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <!--=======================NAVBAR ELEMENTS DOWN BELOW, THIS IS THE DEFAULT NAV SYSTEM====================-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a style="margin-right: 10px;" class="navbar-brand active" href="#">Welcome back _________ !</a> <!--In the space after "back" and before the "!" add the name of who is signed in -->
            </div>
			<div class="navbar-left"><!--This button brings up the search functionality in a bootstrap modal object. I have decided to do it this way to allow for the staff to make a search easily from the top navbar -->
				<button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#myModal">
					<span class="glyphicon glyphicon-search"></span>&nbsp;Search Applicants
				</button>
			</div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Manage Staff Accounts</a></li>
                    <li><a href="#">Manage Old Applications&nbsp;</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<!--=========================================END NAVBAR SECTION===========================================-->

	<div class="container" style="margin-top: 90px;">
		<div class="page-header">
                <h1>Latest Applicant submission results</h1><!--Change title depending on whether or not a search has been done. Ex change to "Search results" if a search has been made-->
        </div>
		<div class="row" style="margin-bottom: 35px;">
			<div class="col-sm-6">
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">24</span><!--Do a quick query to get these values-->
						New Applicant submissions this week:
					</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge">19</span>
						Old Applicants to be deleted: 
					</li>
				</ul>
			</div>
			
		</div>


		<!--Basic Template for returned search results. To show the rest of the users form info, click "Show All" Button-->
		<!--Wrap this Div container in a "for loop" that retrieves SQL query results-->
		<!--
		SIMPLE QUERY EXAMPLE:
		SELECT * FROM personal
		WHERE applicationID = "43" AND...
		ORDER BY dateForm;
		-->
		
		<?php
		//connect to database
		$mysqli = mysqli_connect("localhost", "OkStaff", 'staffing', "okstaff");
		
		$sql = "SELECT * FROM personal ORDER BY dateForm;"; 
		$query = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

		while ($row = mysqli_fetch_array($query)) {
		    $applicantID = $row['applicantID'];
			$firstName = $row['firstName'];
			$lastName = $row['lastName'];
			$street = $row['street'];
			$city = $row['city'];
			$province = $row['province'];
			$postal = $row['postal'];
			$homePhone = $row['homePhone'];
			$cellPhone = $row['cellPhone'];
			$email = $row['email'];
			$PCMethod = $row['PCMethod'];
			$dateForm = $row['dateForm'];
			$findOKStaff = $row['findOKStaff'];
			
			echo
			'<div class="panel panel-default panel-margins">
				<div class="panel-heading">
					<div class="row">
						<div class="col-sm-9"><strong>[#' . $applicantID . '] ' . $firstName .' ' . $lastName .':</strong></div>
						<div class="col-sm-3"><div class="pull-right">' . $dateForm . '</div></div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<p><strong>Home Phone Number:</strong> ' . $homePhone . '</p>
							<p><strong>Cell Phone Number:</strong> ' . $cellPhone . '</p>
							<p><strong>Email Address:</strong> ' . $email . '</p>
							<p><strong>Prefered Contact Method:</strong> ' . $PCMethod . '</p>
						</div>
						<div class="col-sm-6">
							<p><strong>Home Address:</strong> ' . $street . ', ' . $city . ' ' . $province . '</p>
							<p><strong>Postal Code:</strong> ' . $postal . '</p>
							<p><strong>How did you hear about Okanagan Staffing:</strong> ' . $findOKStaff . '</p>
						
							<form action="viewApp.php" method="post">
								<input type="hidden" name="AppID" value="' . $applicantID . '">
								<div class="pull-right"><input type="submit" class="btn btn-default" value="Show All"></div>
							</form>
						</div>
					</div>
				</div>
			</div>';
		}
		
		?>



	</div><!--END BODY CONTAINER ELEMENT-->
	

	  <!-- ==================Modal Object for search functionality======================-->
    <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<form><!--FORM CONTAINER FOR SEARCH FUNCTIONALITY-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><strong>Search for Applicants:</strong></h4>
					</div>
					<div class="modal-body"><!--MAIN FIELDS FOR SEARCH FUNCTIONS-->
						<div class="row">
							<div class="col-sm-12">
								<label for="searchType" style="margin-right: 3px;">Please select which Applicant type to search for:</label>	
								<div class="radio-inline">
									<input type="radio" name="searchType" value="temp" checked>Temporary
                                </div>
								<div class="radio-inline">
									<input type="radio" name="searchType" value="perm">Permanent
                                </div>
							</div>
						</div>

						<div class="page-header head-mod"></div>

						<div class="form-contol">
							<div class="row">								
								<div class="col-sm-6">
									<input type="text" maxlength="10" class="form-control" name="jobID" placeholder="Job Number"></br>
								</div>
								<div class="col-sm-6">
									<input type="text" maxlength="10" class="form-control" name="nameNum" placeholder="Applicant Name or Number">
								</div>
							</div>
						</div><!--END FORM CONTROL 1-->

					</div><!--END MODAL BODY-->
					<div class="modal-footer">
						<button type="button" class="btn btn-default">Search</button>
					</div>
				</div>
			</form>
		</div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--Required script references-->
    <script src="../js/bootstrap.min.js"></script>
</body> 