<?PHP	include("ecoblueDB.php");	
		$connect = mysqli_connect("localhost","root", "0000", "ecoblueDB" );		//		
		$eid = 0 ;  
		function fillEvents($connect)   {  
			$output = ''; 	       $sql = "SELECT * FROM EVENTS";        $result = mysqli_query($connect, $sql)  ;
			while ($row = mysqli_fetch_array ($result)	)	{	 $output .= '<option value="'.$row["EID"].'">'.$row["ENAME"].'</option>';       }
			return $output;  
		}
		

		
?>
<!DOCTYPE html>
<html>
	<head>	<title>  Plant Trees 	</title>	<meta charset="UTF-8">
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
				.item button {    width: 30%;}
				.item img {    width: 100%;}
				.item .name {    font-size: 18px;  font-style: bold; text-align: center; }
				.item .showMore {   text-align: center;  cursor: pointer;     margin: 2px; 	  background: blue ;  border-radius: 3px; 	}	
			
			#report {    padding: 5px;  }
				#report button {    width: 32%;  font-size: 0.9em; }
			
			#treeForm  {   width: 95%;  margin: 10px auto ; padding: 5px;  BORDER: 1PX SOLID #BBBBBB;	BORDER-RADIUS: 5PX;	
			} 
			.msg	{		WIDTH:40%;	margin: 10px auto;	padding: 5px;	border-radius: 5px;	color: #3c763d;	background: #dff0d8;  border: 1px solid #3c763d;  text-align: center;	}
			
			#addEvent img, #addTrees img {   margin: 3px; width: 40px; height:40px; align:left; border-radius: 50%;  }
					
			@media screen and (max-width: 500px) {  .navbar a {    float: none;    display: block;  }		}
			
		</STYLE>
		
		<style>					
					/* Style the tab */
				.tab {   overflow: hidden;  border: 1px solid #ccc;  background-color: #f1f1f1;}
				/* Style the buttons inside the tab */
				.tab button {  background-color: inherit; border-radius: 10px 0px 0px 0px;   float: left;
				  border: none;  outline: none;  cursor: pointer;  padding: 14px 16px;  transition: 0.3s;  font-size: 17px;
				}

				/* Change background color of buttons on hover */
				.tab button:hover {  background-color: cadetblue; z-index:2; border-radius: 10px 0px 0px 0px;   }

				/* Create an active/current tablink class */
				.tab button.active {  background: green; color: orange; font-size: 1.1em;  border-radius: 10px 0px 0px 0px; border-top: 3px solid blue; }

				/* Style the tab content */
				.tabcontent {  display: none;  	height: 75vh;  		  padding: 6px 12px;  border: 1px solid #ccc;  border-top: none;   -webkit-animation: fadeEffect 3s;  animation: fadeEffect 3s;}

				//.tab::after {  content: "";  clear: both;  display: table;}
				

				/* Fade in tabs */
				@-webkit-keyframes fadeEffect {  from {opacity: 0;}  to {opacity: 1;}}
				@keyframes fadeEffect {  from {opacity: 0;}  to {opacity: 1;}}

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
			.outlined-input input, .outlined-input select { width: 100%;    color: var(--main-white);    height: 3rem;    outline: 1px solid var(--main-grey);    border-radius: 5px;    border: none;
				background-color: var(--main-dark-grey);    padding-left: 20px;    font-size: 18px;    transition: .1s var(--main-ease);
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
		
		<script> $(document).ready(function(){  $(".msg").delay(4000).fadeOut(100);							
					
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
					<div class=" w3-transparent " style = " margin: 5px; align-items: center; padding: 2px;  "  >
						<div class="tab">
						  <button class="tablinks" onclick="openTab(event, 'grow')" id="defaultOpen"> Grow Tree </button>
						  <button class="tablinks" onclick="openTab(event, 'nurture')"> Nurture Trees  </button>
						  <button class="tablinks" onclick="openTab(event, 'sequestration')">Carbon Sequestration </button>
						  <button class="tablinks" onclick="openTab(event, 'nursery')"> Nursery Management  </button> 
						</div>
						<div id="grow" class="tabcontent">
							  <div class="w3-row-padding w3-margin-bottom "  >
								<div class="w3-quarter">
								  <div class="w3-container w3-red w3-padding-8">
									<div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
									<div class="w3-right">
									  <h3>52</h3>
									</div>
									<div class="w3-clear"></div>
									<h4>Fruit Trees Planted</h4>
								  </div>
								</div>
								<div class="w3-quarter">
								  <div class="w3-container w3-blue w3-padding-8">
									<div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
									<div class="w3-right">
									  <h3>99</h3>
									</div>
									<div class="w3-clear"></div>
									<h4>Mangrove Planted </h4>
								  </div>
								</div>
								<div class="w3-quarter">
								  <div class="w3-container w3-teal w3-padding-8">
									<div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
									<div class="w3-right">
									  <h3>23</h3>
									</div>
									<div class="w3-clear"></div>
									<h4>Survival Rate</h4>
								  </div>
								</div>
								<div class="w3-quarter">
								  <div class="w3-container w3-orange w3-text-white w3-padding-8">
									<div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
									<div class="w3-right">
									  <h3>50</h3>
									</div>
									<div class="w3-clear"></div>
									<h4>Member's Engaged</h4>
								  </div>
								</div>
							  </div>

								<form id = "treeForm" class="w3-container w3-blue" style = "padding: 10px; "  METHOD="POST" ACTION= "ecoblueDB.php"> 	 <!-- style='display:none;'   -->  
									<!-- GROWTREE : GID, EID, EDATE,  ONSITE, GIS, LOCATION, TREETYPE,  QUANTITY, ABOUT, DOE
										FORM:		gid, eventID, edate,onsite, gis, location, treeType,  quantity,  about, doe
													BUTTONS:  saveTrees, refresh
									-->
									<div class="page-wrapper ">										
										<div class="outlined-input w3-left  w3-half w3-padding">  
											<input type="hidden" name="gid" placeholder=" "  value = "" >											
											<SELECT NAME= "eventID"  id='eventID'  >		<OPTION VALUE= "0"> Event ID  </OPTION>   		
												  <?php echo fillEvents($connect); ?>  														  
											</SELECT>
											<label for="eventName">Event:</label>
										</div>
										<div class="outlined-input w3-left  w3-half  w3-padding" >
											<input type="date" name="edate" placeholder=" ">
											<label for="edate"> Event Date:</label>
										</div>
										<div class="outlined-input w3-left w3-half  w3-padding">
											<SELECT NAME= "treeType"  id='treeType'  >		
													<OPTION VALUE= "Fruits"> FRUIT TREE </OPTION>   <OPTION VALUE= "Mangrove"> MANGROVE TREE </OPTION>   				
											</SELECT> 
											<label for="treeType"> Tree Type:</label>
										</div>										
										<div class="outlined-input w3-left w3-half w3-padding ">
											<input type="text" name="quantity" placeholder=" ">
											<label for="quantity"> Quantity:</label>
										</div>
										<div class="outlined-input w3-left l4  w3-padding">
											<input type="checkbox" name="onsite" placeholder=" "  style = "width: 200%; ">
											<label for="onsite"> Onsite:</label>
										</div>
										<div class="outlined-input w3-left  l4  w3-padding">
											<input type="text" name="gis" placeholder=" ">
											<label for="gis"> GIS Coordinates:</label>
										</div>
										<div class="outlined-input w3-right w3-half  w3-padding">
											<!--	<input type="text" name="location" placeholder=" ">				-->
											<SELECT NAME= "location"  id='location'  >		
													<OPTION VALUE= "Mazingira"> MAZINGIRA PARK </OPTION>   
													<OPTION VALUE= "Gastonia"> GASTONIA BEACH  </OPTION>  
													<OPTION VALUE= "Kidundu"> KIDUNDU BEACH  </OPTION>  													
											</SELECT>											
											<label for="location"> Location:</label>
										</div>
										<div class="outlined-input w3-left w3-row  "  style = "width: 99%; " >
											<textarea name="about"  placeholder="Write a Brief Description of the Planting exercise here..."></textarea> 
											<label for="about"> About Planting:</label>											
										</div>										
										<div class = 'w3-clear' >  </div>
										<div class = "buttons"> 
											<button name = "saveTrees" id = "saveTrees" class = " w3-left  w3-padding " > Save </button> 
											<button name = "refresh" id = "refresh"  class = " w3-right  w3-padding " > Refresh Page </button> 
											<div class="w3-clear" >  </div> 
										</div>
									</div> 
								</form>
													  
						</div>
						
						<div id="nurture" class="tabcontent">
						  <h3>Nurture Trees</h3>
						   <p>This module is still under development.</p>			 
						</div>

						<div id="sequestration" class="tabcontent">
						  <h3>Carbon Sequestration</h3>
						   <p>This module is still under development.</p>
						</div>						
						
						<div id="nursery" class="tabcontent">
						  <h3>Nursery Management  </h3>
						  <p>This module is still under development.</p>
						</div>
	
					</div>
				
				</div>
				
				<div class=" w3-col w3-quarter w3-white">
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
		  <a href="events.php"><i class="fa fa-fw fa-search"></i> Events </a> 
		  <a  class="active"  href="#"><i class="fa fa-fw fa-envelope"></i> Grow Trees</a> 
		  <a href="#"><i class="fa fa-fw fa-user"></i> Resources </a>
		</div>
		
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