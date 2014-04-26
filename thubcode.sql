-- SQL FILE FOR transparencyhub FOI app --
CREATE TABLE users(
id int(11) NOT NULL AUTO_INCREMENT,
firstname varchar(100) NOT NULL,
lastname varchar(100) NOT NULL,
department varchar(255) NOT NULL,
email varchar(100) NOT NULL,
PRIMARY KEY(id)
);

-- Request table --

CREATE TABLE request(
id int(11) NOT NULL AUTO_INCREMENT,
title varchar(255) NOT NULL,
status varchar(30) NOT NULL,
time int(11) NOT NULL,
PRIMARY KEY(id)
);
