
 EVENT : EID, POSTER, ENAME, ELOCATION, EDATE, ETIME, ETYPE, REGLINK, ORGANIZER, PARTNER, THEME, ABOUT; 

CREATE TABLE IF NOT EXISTS EVENTS (  EID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
        POSTER VARCHAR( 255 ) NOT NULL DEFAULT 'Images/addPoster.png' , 
        ENAME  VARCHAR(155) NOT NULL,        ELOCATION  VARCHAR(55) NOT NULL, 
        EDATE  VARCHAR(55) NOT NULL,        ETIME VARCHAR(10),  
        ETYPE VARCHAR(30),                  REGLINK VARCHAR(30),
        ORGANIZER VARCHAR(20),              PARTNER VARCHAR(50), 
        THEME TEXT NOT NULL,                DESCRIPTION TEXT NOT NULL,   
        DOE  TIMESTAMP( 100 ) NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB ; 

INSERT INTO EVENTS (  POSTER ,  ENAME ,  ELOCATION  ,  EDATE ,  ETIME ,  
        ETYPE ,  REGLINK ,   ORGANIZER ,     PARTNER , THEME ,  DESCRIPTION)
        VALUES  ( 'Images/PLPGRADUATION.jpeg', 'LAUNCH AND DEMO' , 'PWANI UNIVERSITY' , '05/15/2024', '8:00 AM',
                   'SYSTEM DEMO', '', 'PLP' , 'KCG' ,'ONE MILLION DEVS FOR AFRICA', '' ),
                ( 'Images/MANGROVE.jpeg', 'MANGROVE PLANTNG' , 'GASTONIA BEACH' , '05/18/2024', '8:00 AM',
                   'SYSTEM DEMO', '', 'KCCGP' , 'KCG' ,'ONE BILLION MANGROVES FOR KILIFI', '' )  ; 
 

SELECT * FROM EVENTS ; 
describe EVENTS;

DROP TABLE EVENTS; 


ATTENDANCE : AID,   EID, ATTENDEE , EMAIL  ,CONFIRMED,  ATTENDED ,     DOE ;

CREATE TABLE IF NOT EXISTS ATTENDANCE (  AID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
        EID INT(10) NOT NULL REFERENCES `EVENTS` (`EID`),
        ATTENDEE  VARCHAR(55) NOT NULL,           EMAIL  VARCHAR(55) NOT NULL, 
        CONFIRMED TINYINT(1) NOT NULL DEFAULT 1,  ATTENDED TINYINT(1) NOT NULL DEFAULT 0, 
        DOE  TIMESTAMP( 100 ) NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB ; 

INSERT INTO ATTENDANCE (   EID, ATTENDEE , EMAIL  ,CONFIRMED )
        VALUES  (  2 , 'SAMSON MENZAH'  ,  'sakhadzeeh21@gmail.com' , 1    ); 
SELECT * FROM ATTENDANCE ; 
SELECT COUNT(* ) FROM ATTENDANCE WHERE EID = 2;
SELECT EID, COUNT( *)  FROM ATTENDANCE GROUP BY EID ;


SELECT COUNT(* ) AS COUNT FROM ATTENDANCE WHERE ATTENDANCE.EID = 1;  

describe ATTENDANCE;

/*  LIKES : LID, EID, LIKER, EMAIL, DOE  ;      */
CREATE TABLE IF NOT EXISTS LIKES (  LID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
        EID INT(10) NOT NULL REFERENCES `EVENTS` (`EID`),
        LIKER  VARCHAR(55) NOT NULL,           EMAIL  VARCHAR(55) NOT NULL, 
        DOE  TIMESTAMP( 100 ) NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB ; 

INSERT INTO LIKES (   EID, LIKER, EMAIL  )
        VALUES  (  1 , 'SAMSON MENZAH'  ,  'sakhadzeeh21@gmail.com'    ); 
SELECT * FROM LIKES ; 
describe LIKES;


/* GROWTREE : GID, EID, EDATE,  ONSITE, GIS, LOCATION, TREETYPE,  QUANTITY, ABOUT, DOE
    FORM:		gid, eventID, edate,onsite, gis, location, treeType,  quantity,  about, doe
    BUTTONS:  saveTrees, refresh
*/		
CREATE TABLE IF NOT EXISTS GROWTREE (  GID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
        EID INT(10) NOT NULL REFERENCES `EVENTS` (`EID`),  EDATE  VARCHAR(55) NOT NULL, 
        ONSITE TINYINT(1) NOT NULL DEFAULT 0,  GIS  TEXT NOT NULL, 
        LOCATION  VARCHAR(55) NOT NULL,        TREETYPE  VARCHAR(55) NOT NULL, 
        QUANTITY  INT(15) NOT NULL,             ABOUT  TEXT NOT NULL,             
        DOE  TIMESTAMP( 100 ) NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB ; 

INSERT INTO GROWTREE (   EID, EDATE,  ONSITE, GIS, LOCATION, TREETYPE,  QUANTITY, ABOUT )
        VALUES  (  1 ,'05/10/2024' , 0, '', 'Mazingira' , 'Mangrove'  ,2500,   ''    ),
                 (  1 ,'05/12/2024' , 1, '', 'Mazingira' , 'Mangrove'  ,200,   ''    ); 
SELECT * FROM GROWTREE ; 
describe GROWTREE;
