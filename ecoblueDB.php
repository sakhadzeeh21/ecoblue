
<?php
		// EVENT : EID, POSTER, ENAME, ELOCATION, EDATE, ETIME, ETYPE, REGLINK, ORGANIZER, PARTNER, THEME, ABOUT
		//	FORM:			eventName, eventLoc, eventDate, eventTime, eventType, eventLink, eventOrg, eventPartn, eventTheme,
		//					eventDesc, posterDisplay posterImage
		//	BUTTONS:  save, refresh
		 $EID =0 ;  	$POSTER = "" ;	 $ENAME = "" ;		 $ELOCATION = "" ;	$EDATE = "" ;	 $ETIME = "" ;	
		 $ETYPE= "" ;	$REGLINK= "" ;	 $ORGANIZER= "" ;	 $PARTNER= "" ;		$THEME= "" ;	 $ABOUT = "" ;				
		
		// manage notifications with session variable
		session_start();	
		$conn = mysqli_connect("localhost","root", "0000", "ECOBLUEDB" );		//		
			
		if ( isset ($_POST ['save' ] ) ) {		
			//*
			$logoImageName =  $_FILES['posterImage']['name'];  // . '-'.time();	//	for unique image names
			$eventName = $_POST['eventName'];	$eventLoc = $_POST['eventLoc'];			$eventDate = $_POST['eventDate'];	$eventTime = $_POST['eventTime'];
			$eventType = $_POST['eventType'];	$eventLink = $_POST['eventLink'];		$eventOrg = $_POST['eventOrg']; 	$eventPartn = $_POST['eventPartn']; 
			$eventTheme = $_POST['eventTheme'];	$eventDesc = $_POST['eventDesc'];		
			
			// move uploaded file to a folder 
			$target = 'Images/'. $logoImageName ;
			if (empty($logoImageName))  {
					$sql = " INSERT INTO EVENTS (  POSTER ,  ENAME ,  ELOCATION  ,  EDATE ,  ETIME ,     ETYPE ,  REGLINK ,   ORGANIZER , 
						PARTNER , THEME ,  DESCRIPTION)   VALUES  ( 'Images/addPoster.png', '$eventName', '$eventLoc', '$eventDate', '$eventTime',
						'$eventType', '$eventLink', '$eventOrg', '$eventPartn', '$eventTheme','$eventDesc') " ; 
					if (mysqli_query($conn, $sql)){ 	$_SESSION ['msg'] = "Event Saved"	;				}		
					else {  $_SESSION ['msg'] = "Event Saving Failed"	;		}			
					
			}   else if ( move_uploaded_file ( $_FILES['posterImage']['tmp_name'] , $target ) ){ 		
					$sql = " INSERT INTO EVENTS (  POSTER ,  ENAME ,  ELOCATION  ,  EDATE ,  ETIME ,     ETYPE ,  REGLINK ,   ORGANIZER , 
							PARTNER , THEME ,  DESCRIPTION)   VALUES  ( '$target', '$eventName', '$eventLoc', '$eventDate', '$eventTime',
							'$eventType', '$eventLink', '$eventOrg', '$eventPartn', '$eventTheme','$eventDesc') " ; 
						if (mysqli_query($conn, $sql)){ 	$_SESSION ['msg'] = "Event Saved"	;				}		
						else {  $_SESSION ['msg'] = "Event Saving Failed"	;		}			
			}	else {	  $_SESSION ['msg'] = "Image Upload Failed"	;		}				//	die();
					header ( 'location:  addEvent.php') ; 
			// */
		}
		/*  
		//  LIKES : LID, EID, LIKER, EMAIL, DOE  ; 
		// FORM:		liker, mail
		if (isset( $_POST['saveLikes'])) { echo 'Saving'; 
			$EID = $_POST['eid'];	$LIKER = $_POST['liker']; 	$EMAIL = $_POST['mail']; 	
			$sql = "INSERT INTO LIKES ( EID, LIKER, EMAIL  ) VALUES ('$EID', '$LIKER' , '$EMAIL' )"; 
			if (mysqli_query($conn, $sql)){ 	$_SESSION ['msg'] = "Like Saved"	;				}		
			else {  $_SESSION ['msg'] = "Like Saving Failed"	;		}			
			 header ( 'location:  events.php') ; 
		}// end save
		*/
		/* GROWTREE : GID, EID, EDATE,  ONSITE, GIS, LOCATION, TREETYPE,  QUANTITY, ABOUT, DOE
			FORM:		gid, eventID, edate,onsite, gis, location, treeType,  quantity,  about, doe
			BUTTONS:  saveTrees, refresh
		*/
		if (isset( $_POST['saveTrees'])) { 		$EID = $_POST['eventID'];	
			$EDATE = $_POST['edate']; 			$ONSITE = $_POST['onsite']; 	
			$GIS = $_POST['gis']; 				$LOCATION = $_POST['locaton']; 	
			$TREETYPE = $_POST['treeType']; 	$QUANTITY = $_POST['quantity'];
			$ABOUT = $_POST['about'];  	
			
			
			$sql = "INSERT INTO GROWTREE (   EID, EDATE,  ONSITE, GIS, LOCATION, TREETYPE,  QUANTITY, ABOUT )
					VALUES  (  '$EID' ,'$EDATE' , $ONSITE, '$GIS', '$LOCATION' , '$TREETYPE'  , $QUANTITY,   '$ABOUT'    ) " ;		
			 
			if (mysqli_query($conn, $sql)){ 	/* $_SESSION ['msg'] = */   echo "Trees Saved"	;				}		
			else {  /* $_SESSION ['msg'] = */   echo "Trees Saving Failed"	;		}			
			 header ( 'location:  plantTrees.php') ; 
		}// end save
		
		if (isset( $_GET['del'])) { $id = $_GET['del'];	 mysqli_query( $conn , "DELETE FROM EVENTS  WHERE EID= $id " ) ;	
									$_SESSION ['msg'] = "Event Deleted";	header ( 'location:  addEvent.php') ; 		}
		
		
		$resAllEvents = mysqli_query( $conn , "SELECT * FROM EVENTS" ) ;
		$resAllTrees = mysqli_query( $conn , "SELECT * FROM TREES" ) ;
		$countAttendance = mysqli_query( $conn , "SELECT COUNT( *)  FROM ATTENDANCE GROUP BY EID ; " ) ;
		
	
	
?>