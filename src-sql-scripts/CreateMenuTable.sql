create table Blue_Menu(
   	id int(11) not null primary key AUTO_INCREMENT,
   	id_Pages varchar(1024) not null,
	prevlidge int(1) not null,
	_type varchar(255) not null,
	_name varchar(255) not null,
	DateCreated  DATETIME DEFAULT  CURRENT_TIMESTAMP

    );
