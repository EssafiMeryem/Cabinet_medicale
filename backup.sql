

CREATE TABLE `appointment` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_booked` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO appointment VALUES("1","mouna","latifa","F","0675240864","2021-04-05","la grippe","Pendding","2021-07-05");





CREATE TABLE `consultation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date_send` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO consultation VALUES("2","latifa","consultation"," Bonjour, Docteur! Je ne me sens pas bien  : je tousse beaucoup, j\'éternue et mon nez coule. 
Je me mouche toute la journée. J\'utilise au moins dix paquets de mouchoirs par jour.","2020-06-08 09:15:34","patient","latifa","doctor");
INSERT INTO consultation VALUES("5","latifa","urgence","j ai du mal a comprendre comment utilisé le  médicament","2020-05-08 10:15:34","patient","latifa","doctor");
INSERT INTO consultation VALUES("7","doctor","consultation","Bonjour essayé de prendre ce médicament \'XXX\'","2020-06-08 09:15:34","doctor","doctor","latifa");
INSERT INTO consultation VALUES("9","doctor","urgence","Tu dois prendre 1 comprimé le matin et 1 le soir","09:12:45 07:56","doctor","doctor","latifa");





CREATE TABLE `income` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `patient` varchar(100) NOT NULL,
  `date_discharge` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO income VALUES("1","latifa","2020-06-08 09:15:34","200","");
INSERT INTO income VALUES("2","Aicha","2020-06-08 09:15:34","200","");
INSERT INTO income VALUES("3","Hanane","2020-06-08 09:15:34","400","");
INSERT INTO income VALUES("4","sawsan","2020-12-08 10:15:50	","300","");





CREATE TABLE `info` (
  `hopital` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `specialites` varchar(100) NOT NULL,
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO info VALUES("Hopital de l\'ENSEM","075375978
","Agadir Hay el houda en face de pharmacie Titrit
","Chirurgie ,Cardiologie , Anesthésiologie ,Andrologie ,Allergologie.","4");





CREATE TABLE `multiuserlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(150) NOT NULL,
  `profile` varchar(50) DEFAULT 'patient',
  `firstname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dossier_medical` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

INSERT INTO multiuserlogin VALUES("meryem","meryem","1","","admin","","","","","","");
INSERT INTO multiuserlogin VALUES("ilham","ilham","2","","secretary","","","","","","");
INSERT INTO multiuserlogin VALUES("karima","karima","36","bg.svg","patient","","","","Grippe","","");
INSERT INTO multiuserlogin VALUES("soumia","soumia","38","bg.svg","patient","","","","Diabète","","");
INSERT INTO multiuserlogin VALUES("hanane","hanane","39","wave.png","patient","lola","F","08685635A7","Fièvre ","","");





CREATE TABLE `ordonnance` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `docteur` varchar(100) NOT NULL,
  `patient` varchar(100) NOT NULL,
  `ordonnance` varchar(200) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO ordonnance VALUES("1","D.Meryem Essafi","Latifa Belhaj","Acebutole 200mg cps voie orale
2cps/j pendant 1 mois
à renouveller 3 fois

SPECIALITE A
2cps 3 fois/j 

SPECIALITE B
1cp/j 1 mois","06567353534","docteurensem@gmail.com");



