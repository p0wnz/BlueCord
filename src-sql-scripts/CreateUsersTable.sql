create table Blue_Accounts(
   	id int(11) not null primary key AUTO_INCREMENT,
   	username varchar(255) not null,
   	name varchar(255) not null,
	email varchar(255) not null,
   	password_hash varchar(64) not null,
	profile_url varchar(255) not null DEFAULT '/content/Media/r32_pp.bmp' ,
	prevlidge int(1) not null,
	lastlogindate  DATETIME DEFAULT  CURRENT_TIMESTAMP,
	cookie varchar(255) not null,
	IPAddress varchar(255) not null,
	Activated TINYINT(1)  DEFAULT 0 not null
    );
