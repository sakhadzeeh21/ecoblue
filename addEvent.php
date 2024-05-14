<?PHP		include("ecoblueDB.php");		

?>
<!DOCTYPE html>
<html>
	<head>	<title>  Add Event 	</title>	<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="w3.css">
				<script src="jquery-3.7.0.min.js"></script>		<!--			-->			
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="icon" href="Images/logoWhite.png" >		
		<STYLE>	
			:root {
				--main-blue: #90caf9;
				--main-white: #fff;
				--main-grey: rgba(255, 255, 255, 0.23);
				--main-dark-grey: #121212;
				--main-ease: cubic-bezier(.65,.05,.36,1);
			}
			/* OUTLINED INPUT STYLES */
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
		
		<STYLE>
			.navbar {  margin: 5px ;   background-color: #555;   overflow: auto; align-items: center; }
			.navbar a {  float: left;  width: 25%;  padding: 5px;  color: white;  text-align: center;  text-decoration: none;  font-size: 18px;}
			.navbar a:hover {  background-color: #000;}
			
			.active {  background-color: #04AA6D;}
			TABLE { WIDTH:50%;	MARGIN:30PX AUTO;	BORDER-COLLAPSE: COLLAPSE; TEXT-ALIGN: LEFT; 	}
			TR 	{ 	BORDER-BOTTOM: 1PX SOLID #CBCBCB; }
			TH, TD { BORDER: NONE;	HEIGHT: 30PX;	PADDING: 2PX;	}
			TR:HOVER	{	BACKGROUND: blue;	}
			.EDITBTN	{  TEXT-DECORATION: NONE;	PADDING: 2PX 5PX;	BACKGROUND: #2E8B57;	COLOR: WHITE;	BORDER-RADIUS:	3PX; 	}	
			.DLTBTN	{		TEXT-DECORATION: NONE;	PADDING: 2PX 5PX;	BACKGROUND: #800000;	COLOR: WHITE;	BORDER-RADIUS:	3PX; }
		
			#eventForm  {   width: 90%; margin: 10px auto ; padding: 10px;  BORDER: 1PX SOLID #BBBBBB;	BORDER-RADIUS: 5PX;	
							display: grid; grid-gap: 5px; grid-template-columns: 60% auto ; 
			} 
			.msg	{		WIDTH:40%;	margin: 10px auto;	padding: 5px;	border-radius: 5px;	color: #3c763d;	background: #dff0d8;  border: 1px solid #3c763d;  text-align: center;	}
					
			.poster {   width: 95%;  BORDER: 1PX SOLID #BBBBBB;	BORDER-RADIUS: 5PX;	
							display: grid; grid-gap: 5px; grid-template-rows: 80% auto ; 
			} 
			.images { width: 100%, padding: 3px ; }
			.images img {    width: 99%;  margin: 3px auto;  }			
			
			@media screen and (max-width: 500px) {  .navbar a {    float: none;    display: block;  }		}
			
		</STYLE>
		<!--	mazingiraMap	gastoniaMap		kidunduMap			mazingiraTab		gastoniaTab			kidunduTab		-->
		<script> $(document).ready(function(){  $(".msg").delay(4000).fadeOut(100);							
					
				}); 
		</script> 
			
	</head>
	<body> 
		<div class="w3-main" style=" width: 99%;  padding: 2px; margin: 20px auto;   background: black; color: white; ">
				<h2 class="w3-center" > Add Event  </h2> 
				<TABLE  margin= 30px; padding=30px;  border=0;> 	<THEAD>	<TR>	<TH>	POSTER	</TH>	<TH>	NAME	</TH>	<TH COLSPAN=2> ACTION 	</TH>	</TR>	</THEAD>
					<TBODY>	<?php	while ($row = mysqli_fetch_array ($resAllEvents)	)	{	?>
							<TR>	<TD>	<?php	echo $row['POSTER'] ;	?>		</TD>		<TD>	<?php	echo $row['ENAME'] ;	?>	 	</TD>	
									<TD> <A  CLASS="EDITBTN"  HREF="#Edit"	> Edit </A>	</TD>	
									<TD> <A  CLASS="DLTBTN"  HREF="#Delete"  > Delete </A>	</TD>	
							</TR>
						<?php		}						?>
					</TBODY>
				</TABLE>
				<form id = "eventForm" class=" w3-blue" METHOD="POST" ACTION= "ecoblueDB.php"	enctype="multipart/form-data" > 	 <!-- style='display:none;'   -->  
					<!--	<div class="material-textfield">	<input placeholder="" type="text" />		<label> label</label>		</div>		-->
					<!-- EVENT : EID, POSTER, ENAME, ELOCATION, EDATE, ETIME, ETYPE, REGLINK, ORGANIZER, PARTNER, THEME, ABOUT
						FORM:			eventName, eventLoc, eventDate, eventTime, eventType, eventLink, eventOrg, eventPartn, eventTheme, eventDesc, posterDisplayposterImage
									BUTTONS:  save, refresh
					-->
					<?php	if (isset($_SESSION ['msg'] ) ) :	?>	<div  class='msg'>	<?php	echo $_SESSION ['msg']; 	unset($_SESSION ['msg'] );	?>		</div>		<?php	endif	?>
					<div class="page-wrapper ">
						<div class="outlined-input w3-left  w3-half w3-padding">
							<input type="text" name="eventName" placeholder=" ">
							<label for="eventName">Event Name:</label>
						</div>
						<div class="outlined-input w3-left w3-half  w3-padding">
							<input type="text" name="eventLoc" placeholder=" ">
							<label for="eventLoc"> Location:</label>
						</div>
						<div class="outlined-input w3-left w3-half  w3-padding">
							<input type="date" name="eventDate" placeholder=" ">
							<label for="eventDate"> Date:</label>
						</div>
						<div class="outlined-input w3-left  w3-half  w3-padding">
							<input type="text" name="eventTime" placeholder=" ">
							<label for="eventTime"> Time:</label>
						</div>
						<div class="outlined-input w3-left  w3-half w3-padding">
							<!--	<input type="text" name="eventType" placeholder=" ">		-->
							<SELECT NAME= "eventType"  id='eventType' >		<OPTION VALUE= ""> Event Type </OPTION>   		
											<OPTION VALUE= "cleanup"> Beach Cleanup</OPTION>	
											<OPTION VALUE= "mangrove"> Mangrove Restoration </OPTION> 	
											<OPTION VALUE= "summit"> Summit or Training </OPTION>   
							</SELECT>								
							<label for="eventType">Event Type:</label>
						</div>
						<div class="outlined-input w3-left w3-half  w3-padding">
							<input type="text" name="eventLink" placeholder=" ">
							<label for="eventLink"> Registration Link:</label>
						</div>
						<div class="outlined-input w3-left  w3-half w3-padding">
							<input type="text" name="eventOrg" placeholder=" ">
							<label for="eventOrg">Event Organization:</label>
						</div>
						<div class="outlined-input w3-left w3-half  w3-padding">
							<input type="text" name="eventPartn" placeholder=" ">
							<label for="eventPartn"> Partner:</label>
							
						</div>
						<div class="outlined-input w3-left w3-row  w3-padding"    style = "width: 99%; ">
							<input type="text" name="eventTheme" id="eventTheme" placeholder=" "    style = "width: 99%; ">
							<label for="eventTheme"> Theme:</label>
							
						</div>
						<div class="outlined-input w3-left w3-row  w3-padding"  style = "width: 99%; " >
							<textarea name="eventDesc"  placeholder="Write a Brief Description of the Event here..."></textarea> 
							<label for="eventDesc"> About Event:</label>
							
						</div>
						<div class = "w3-clear" >		</div>
						<!--	
							<div class="standard-input">	<input type="text" name="test" placeholder=" ">		<label for="test">Last name</label>	<span class="underline"></span>
							</div>
						-->
					</div>
				
					<div class = "poster w3-white " > 
						<div class="images w3-center">  <!--		<img src="Images/addPoster.png"></img> 				-->
							<img src ="Images/addPoster.png"  name="posterDisplay"	id="posterDisplay"    onclick="triggerClick()"/> 
							<INPUT TYPE = "file" accept="image/*" NAME= "posterImage" id="posterImage" onchange = "displayImage(this)" style="display: none; " > 	
						
						</div> 
						<div class = "buttons"> 
							<button name = "saveEvent" id = "saveEvent" class = " w3-left w3-margin w3-padding " > Save </button> 
							<button name = "refresh" id = "refresh"  class = " w3-right w3-margin w3-padding " > Refresh Page </button> 
							<div class="w3-clear" >  </div> 
						</div> 
					</div> 
				</form> 
				
		</div>
		
		<script>
				function triggerClick () {		document.querySelector ('#posterImage').click() ; 		}
						function displayImage (e) {
							if (e.files [0]) {		var reader = new FileReader ();
									reader.onload= function(e){ document.querySelector ('#posterDisplay').setAttribute('src' , e.target.result );														}
									reader.readAsDataURL (e.files [0] ) ;
							}
						}
			</script>
			
	
	</body>
</html>