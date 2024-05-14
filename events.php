<?PHP	include("ecoblueDB.php");	
		$connect = mysqli_connect("localhost","root", "0000", "ecoblueDB" );		//		
		$eid = 0 ;   $usn = 0; 
		function fillAttendants($connect, $eid)   {  
			$output = ''; 	    
			$rec = mysqli_query ($connect, "SELECT COUNT(* ) AS COUNT FROM ATTENDANCE WHERE ATTENDANCE.EID = $eid " );		
			$record = mysqli_fetch_array ($rec) ;
			if ($record)	{	  $output .=  $record ['COUNT']	;       }
			return $output;  
		}
		function fillLikes($connect, $eid)   {  
			$output = ''; 	    
			$rec = mysqli_query ($connect, "SELECT COUNT(* ) AS COUNT FROM LIKES WHERE LIKES.EID = $eid " );		
			$record = mysqli_fetch_array ($rec) ;
			if ($record)	{	  $output .=  $record ['COUNT']	;       }
			return $output;  
		}
		
			
?>

<!DOCTYPE html>
<html>
	<head>	<title>  Events 	</title>	<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="w3.css">
				<script src="jquery-3.7.0.min.js"></script>		<!--			-->			
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="icon" href="Images/logoWhite.png" >		
		<STYLE>	
			.navbar {  margin: 5px ;   background-color: #555;   overflow: auto; align-items: center; }
			.navbar a {  float: left;  width: 25%;  padding: 5px;  color: white;  text-align: center;  text-decoration: none;  font-size: 18px;}
			.navbar a:hover {  background-color: #000;}
			
			.active {  background-color: #04AA6D;}
			
			#mazingiraMap, #gastoniaMap, #kidunduMap	 { height: 360px; } 
			.smallFont {  font-size: 0.75em;  text-align: left;  }
			.largeFont {  font-size: 1.2em;  font-style: bold ; }
			.act {  font-style: bold ;  }
			
			.item {      background-color: #DDD;    padding: 8px;    float: left;    margin: 4px;}
				.item button {    width: 48%; font-size: 0.9em; }
				.item img {    width: 100%;}
				.item .name {    font-size: 18px;  font-style: bold; text-align: center; }
				.item .showMore {   text-align: center;  cursor: pointer;     margin: 2px; 	  background: blue ;  border-radius: 3px; 	}	
			
			#report {    padding: 5px;  }
				#report button {    width: 32%;  font-size: 0.9em; }
			
			#addEvent img ,  #addTrees img {   margin: 3px; width: 40px; height:40px; align:left; border-radius: 50%;  }
					
			.banner {  width: 100%;}
				.banner ul {  display: flex;   list-style-type: none;  padding-left: 0;  margin: 0;}
				.banner li {  width: 100%;  }
								
				@keyframes "bannermove" {  0% {    transform: translateX(0);  }  100% {    transform: translateX(-55%);  }	}
						
			@media screen and (max-width: 500px) {  .navbar a {    float: none;    display: block;  }		}
			
		</STYLE>
		
		<style>		/* Style the tab */
			.tab {   overflow: hidden;  border: 1px solid #ccc;  background-color: white;}
			/* Style the buttons inside the tab */
			.tab button {  background-color: inherit; border-radius: 10px 0px 0px 0px;   float: left;
			  border: none;  outline: none;  cursor: pointer;  padding: 14px 16px;  transition: 0.3s;  font-size: 17px;
			}

			/* Change background color of buttons on hover */
			.tab button:hover {  background-color: cadetblue; z-index:2; border-radius: 10px 0px 0px 0px;   }

			/* Create an active/current tablink class */
			.tab button.active {  background: green; color: orange; font-size: 1.1em;  border-radius: 10px 0px 0px 0px; border-top: 3px solid blue; }

			/* Style the tab content */
			.tabcontent {  display: none;  	height: 65vh;  		  padding: 6px 12px;  border: 1px solid #ccc;  border-top: none;   -webkit-animation: fadeEffect 3s;  animation: fadeEffect 3s;}

			//.tab::after {  content: "";  clear: both;  display: table;}
			

			/* Fade in tabs */
			@-webkit-keyframes fadeEffect {  from {opacity: 0;}  to {opacity: 1;}}
			@keyframes fadeEffect {  from {opacity: 0;}  to {opacity: 1;}}
	
				</style>
		
		<style> 		/* The Modal (background) */
			.modal , .modal1{  display: none;   position: fixed;   z-index: 1;   left: 0;  top: 0;
			  width: 100%;   height: 100%;   overflow: auto;   background-color: #474e5d;  padding-top: 20px;
			}

			/* Modal Content/Box */
			.modal-content {  background-color: #fefefe;  margin: 5% auto 15% auto;  border: 1px solid #888;  width: 80%; }

			/* Style the horizontal ruler */
			hr {
			  border: 1px solid #f1f1f1;
			  margin-bottom: 25px;
			}
			 
			/* The Close Button (x) */
			.close {  position: absolute;  right: 35px;  top: 15px;  font-size: 40px;  font-weight: bold;  color: #f1f1f1;}
			.close:hover,.close:focus {  color: #f44336;  cursor: pointer;}
			
			.cancelbtn {  padding: 14px 20px;  background-color: #f44336;}
			/* Float cancel and signup buttons and add an equal width */
			.cancelbtn, .signupbtn {  float: left;  width: 50%;}

			/* Clear floats */
			.clearfix::after {  content: "";  clear: both;  display: table;}

			/* Change styles for cancel button and signup button on extra small screens */
			@media screen and (max-width: 300px) {  .cancelbtn, .signupbtn {     width: 100%;  }			}
		</style>
		
		<STYLE>	/* OUTLINED INPUT STYLES */
			:root {
				--main-blue: #90caf9;
				--main-white: #fff;
				--main-grey: rgba(255, 255, 255, 0.23);
				--main-dark-grey: #121212;
				--main-ease: cubic-bezier(.65,.05,.36,1);
			}
			.outlined-input {    position: relative;}
			.outlined-input input, .outlined-input select {    color: var(--main-white);    height: 3rem;    outline: 1px solid var(--main-grey);    border-radius: 5px;    border: none;
				background-color: var(--main-dark-grey);    padding-left: 20px;    font-size: 20px;    transition: .1s var(--main-ease);
			}
			.outlined-input label {    position: absolute;    top: 50%;    left: 5%;    transform: translateY(-50%);    background-color: transparent;    color: rgba(255, 255, 255, 0.5);
				text-align: center;    transition: .2s var(--main-ease);    font-size: 1.5rem;    pointer-events: none;    padding: 0 5px;  
			}
			.outlined-input input:not(:placeholder-shown) ~ label,.outlined-input input:focus ~ label {    top: 0px;    left: 10px;    font-size: 1rem;}
			.outlined-input select:not(:placeholder-shown) ~ label,.outlined-input select:focus ~ label {    top: 0px;    left: 10px;    font-size: 1rem;}
			.outlined-input input:focus , .outlined-input select:focus{    outline: 1px solid var(--main-blue) !important;}
			.outlined-input input:hover, .outlined-input select:hover {    outline: 1px solid var(--main-white);}
			.outlined-input input:focus ~ label, .outlined-input select:focus ~ label {    color: var(--main-blue) !important;}

			.outlined-input textarea {    color: var(--main-white);    height: 6rem;  width: 100%;   outline: 1px solid var(--main-grey);    border-radius: 5px;    border: none;
				background-color: var(--main-dark-grey);    padding-left: 20px;    font-size: 15px;    transition: .1s var(--main-ease);
			}
			.outlined-input textarea:not(:placeholder-shown) ~ label,.outlined-input textarea:focus ~ label {    top: 0px;    left: 10px;    font-size: 1rem;}
			.outlined-input textarea:focus {    outline: 1px solid var(--main-blue) !important;}
			.outlined-input textarea:hover {    outline: 1px solid var(--main-white);}
			.outlined-input textarea:focus ~ label {    color: var(--main-blue) !important;}

			/* END OUTLINED INPUT STYLES */
		
		</STYLE>		

		<!--	mazingiraMap	gastoniaMap		kidunduMap			mazingiraTab		gastoniaTab			kidunduTab		-->
		<script> $(document).ready(function(){  		
					$("#mazingiraTab").click(function(){ 	$("#gastoniaMap	, #kidunduMap").hide().fadeOut(50);	;		$("#mazingiraMap").show().fadeIn(100);	;		});										
					$("#gastoniaTab").click(function(){ 	$("#mazingiraMap , #kidunduMap").hide().fadeOut(50);	;		$("#gastoniaMap").show().fadeIn(100);	;		});										
					$("#kidunduTab").click(function(){ 	$("#gastoniaMap	, #mazingiraMap").hide().fadeOut(50);	;		$("#kidunduMap").show().fadeIn(100);	;		});										
					
				}); 
				
				
			</script> 
			
	</head>
	<body> 
		<div class="w3-bar w3-top w3-black w3-large " style="z-index:4 ; width: 99%;  margin:  0px 5px; ">
		  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
		  <span class="w3-bar-item w3-left">   
				<img src="Images/logoBlack.png" class=" w3-margin-right" style="width:45px">
		  </span>
		  
		  <span class="w3-bar-item w3-right">Login</span>
		  <span class="w3-bar-item w3-right">Notification</span>
		  
		</div>
		
		<div class="w3-main" style=" width: 99%;  padding: 0px; margin: 5px ; margin-top:45px;  background: black; ">

			<div class="w3-container" >
				<div class="w3-col w3-threequarter w3-black" style = "height: 550px; align-items: center;  " >					<!--	<h5>Map</h5>		-->
					<div class="w3-row" >
						<!--	<h5 class = "w3-left" > <b>  Events  </b>  </h5>  		-->
						<div class ="w3-right" id='addEvent' >  <img src="Images/plusBlue.jpg" alt="addTrees"    >  </div>
					</div> 
					<div class=" w3-transparent " style = " margin: 5px; align-items: center; padding: 2px;  "  >
						<div class="tab"> 
						  <button class="tablinks" onclick="openTab(event, 'Upcoming')" id="defaultOpen"> Upcoming Events </button>
						  <button class="tablinks" onclick="openTab(event, 'Previous')">Previous Events </button>
						</div>
						<div id="Upcoming" class="tabcontent">		<!--				  <h3> Upcoming Events </h3>			-->
						<div class=" w3-transparent " style = " margin: 5px; align-items: center; display: grid;  grid-template-columns: 24% 24%  24% 24% ; grid-gap: 5px;  "  >
							<!--
							<div class="item w3-white">
								<img src="Images/capitalism.jpeg"></img>
								<div class="name">Launch and Demo</div>
								<p class = "smallFont" > <b> Location: </b> Pwani University   </p>						
								<p class = "smallFont" > <b> DateTime: </b>   15/05/2024, 8:00 AM </p> 
								<button class="itemAttend">Attend</button>
								<button class="itemLike">Like</button>
								<button class="itemShare">Share</button>							
								<br />
								<a class="showMore w3-right" href="#"> Read More </a>
							</div>
							-->
							<?php	while ($row = mysqli_fetch_array ($resAllEvents)	)	{				$eid  =   $row['EID'] ;			?>									
								<!--
									// EVENT : EID, POSTER, ENAME, ELOCATION, EDATE, ETIME, ETYPE, REGLINK, ORGANIZER, PARTNER, THEME, ABOUT
									//	FORM:			eventName, eventLoc, eventDate, eventTime, eventType, eventLink, eventOrg, eventPartn, eventTheme,
									//					eventDesc, posterDisplay posterImage
									//	BUTTONS:  save, refresh							
								-->
								<div class="item w3-white">  <input type='hidden' name='EID' id='EID' value="<?php	 echo $eid ; ?>">
									<img src ="<?php	echo $row['POSTER'] ;	?>"  name="POSTER"	id="POSTER"  />
									<div class="name">  	<?php	echo $row['ENAME'] ;	?> </div>
								
									<p class = "smallFont" > <b> Location: </b>  	<?php	echo $row['ELOCATION'] ;	?>   </p>						
									<p class = "smallFont" > <b> Date-Time: </b>  <?php	echo $row['EDATE'] ;	?>- <?php	echo $row['ETIME'] ;	?>  </p> 
									<button   onclick="document.getElementById('attendance').style.display='block'"  class="itemAttend"> 
										<span>   	<?php 			echo fillAttendants($connect, $eid);	$usn =  $eid;	?>  	</span>  Attending
									</button>
									<button  onclick="document.getElementById('likes').style.display='block'" class="itemLike">
											<span>   	<?php 			echo fillLikes($connect, $eid);	  $usn =  $eid;	?>  	</span> Likes	
										<!--		</A>	-->
												
												
									</button>
									<!--	<button class="itemShare">Share</button>		-->					
									<br />
									<a class="showMore w3-right" href="#"> Read More </a>
								</div>
							<?php		}						?>	
							
						</div>
				
						  
						</div>
						
						<div id="Previous" class="tabcontent">							<!--	<h3>Previous Events </h3>			-->
							<h4 style="padding-top:20px; padding-left: 20px; ">  					0 Previous Events. 					</h4>
						</div>

						
					</div>
				
				</div>
				
				<div class=" w3-col w3-quarter w3-white">			<!--	WEATHER WIDGET		-->
					<h5 class = 'w3-center' > Weather Widget Coming Soon</h5>
					<p> Features include:  </p>
					<div class = 'w3-row w3-padding w3-margin w3-pink ' > Rain Patterns </div> 
					<div class = 'w3-row w3-padding w3-margin w3-red ' > Wind Speed and Directions Patterns </div> 
					<div class = 'w3-row w3-padding w3-margin w3-purple ' > Tide and Sea Conditions </div> 
			
					<div class='w3-container  w3-col w3-blue ' id='report' > 
						<h5 class="w3-center" >  <i class="fa fa-fw fa-exclamation-triangle"></i> <b> File a Report  </b> </h5>  <!--     illegal fishing   --> 
						<button class="">Illegal Logging</button>
						<button class="">Illegal Fishing</button>
						<button class="">Ocean Disaster</button>
									
						 
					</div>
				</div>
			</div>
		
		</div>	
		
		
		<div class=" navbar">
		  <a href="home.html"><i class="fa fa-fw fa-home"></i> Home</a> 
		  <a  class="active" href="#"><i class="fa fa-fw fa-search"></i> Events </a> 
		  <a href="growTrees.php"><i class="fa fa-fw fa-envelope"></i> Grow Trees</a> 
		  <a href="#"><i class="fa fa-fw fa-user"></i> Resources </a>
		</div>
		
		
		
		<!--	MODALS   -->
		<div id="attendance" class="modal">
		  <span onclick="document.getElementById('attendance').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <form class="modal-content" id= "attendance" name= "attendance" action="#">
			<div class="w3-container">		<!--	ATTENDANCE : AID,   EID, ATTENDEE , EMAIL  ,CONFIRMED,  ATTENDED ,     DOE ;			-->
			  <h3>Register Attendance</h3>
			<p>This module is still under development.</p>
			  
			 </div>
		  </form>
		</div>

		<div id="likes" class="modal">
		  <span onclick="document.getElementById('likes').style.display='none'" class="close" title="Close Modal">&times;</span>
		  <form class="modal-content" id= "likes" name= "likes"  METHOD="POST" ACTION= "ecoblueDB.php">
			<div class="w3-container">		<!--	LIKES ( LID,   EID, LIKER, EMAIL,     DOE ;			-->
			  <h3>Register Like</h3>
			  <p>This module is still under development.</p>
			  <hr>				
			</div>
		  </form>
		</div>

		<script>	// Get the modal
			var modal = document.getElementById('attendance');
			var modal1 = document.getElementById('likes');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {		if (event.target == modal) {		modal.style.display = "none";	  }			
													if (event.target == modal1) {		modal.style.display = "none";	  }			
			}
			
			
		</script>

		
		<script>
			function openTab(evt, tabName) {  var i, tabcontent, tablinks;
			  tabcontent = document.getElementsByClassName("tabcontent");
			  for (i = 0; i < tabcontent.length; i++) {    tabcontent[i].style.display = "none";  }
			  tablinks = document.getElementsByClassName("tablinks");
			  for (i = 0; i < tablinks.length; i++) {    tablinks[i].className = tablinks[i].className.replace(" active", "");  }
			  document.getElementById(tabName).style.display = "block";
			  evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();

	</script>
	
	</body>
</html>