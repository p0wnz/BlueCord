create table Blue_Media(
   	id int(11) not null primary key AUTO_INCREMENT,
   	_Type varchar(255) not null,
   	Aurthor varchar(255) not null,
	Link varchar(255) not null,
	prevlidge int(1) not null,
	DateUploaded  DATETIME DEFAULT  CURRENT_TIMESTAMP

    );
