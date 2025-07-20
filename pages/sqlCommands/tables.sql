DROP DATABASE IF EXISTS uiuClubForum;
CREATE DATABASE IF NOT EXISTS uiuClubForum;
USE uiuClubForum;

create table admin
(
    id int AUTO_INCREMENT,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(100) UNIQUE,
    phone_number varchar(50),
    passwords VARCHAR(20),
    gender varchar(20) not null,
    primary key(id)
);

create table general_user(
    id int AUTO_INCREMENT,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(100) UNIQUE,
    phone_number varchar(50),
    passwords VARCHAR(20),
    gender varchar(20) not null,
    primary key(id)
);

create table forumRep(
    id int AUTO_INCREMENT,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(100) UNIQUE,
    phone_number varchar(50),
    passwords VARCHAR(20),
    gender varchar(20) not null,
    primary key(id)
);


CREATE TABLE categories (
  id int(11) NOT NULL,
  cat_name varchar(255) NOT NULL,
  cat_order varchar(255) NOT NULL
);

INSERT INTO `categories` (`id`, `cat_name`, `cat_order`) VALUES
(1, 'Events', '1'),
(2, 'Job Post', '2');

CREATE TABLE posts (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY key,
  title varchar(255) NOT NULL,
  description longtext NOT NULL,
  img varchar(255) NOT NULL,
  old_img varchar(255) NOT NULL,
  cat_id varchar(255) NOT NULL,
  date varchar(255) NOT NULL,
  view int(11) NOT NULL,
  f_email varchar(50) not null
);

create table post_comment(
    id int (5) AUTO_INCREMENT,
    cDates date,
    cTime time,
    content varchar(1000),
    cLike int,
    post_id int,
    PRIMARY key(id) 
);

ALTER TABLE post_comment ADD COLUMN name VARCHAR(250) After post_id;

-- admin panel:




CREATE table room1(

    id int AUTO_INCREMENT,
    forum_name VARCHAR(100),
    forumRep_id int, 
    primary key(id),
    active int(10) 
);


create table users(
    room_id int,
    users_id int,
    approve int, 

    Foreign Key (room_id) REFERENCES room1(id),
    Foreign Key (users_id) REFERENCES general_user(id)
);

create table chats(
    room_id int,
    users_id int,
    forumRep_id int,
    texts varchar(200), 
    sl_no int AUTO_INCREMENT PRIMARY KEY,
    dates date,
    mtime time,

    Foreign Key (room_id) REFERENCES room1(id),
    Foreign Key (users_id) REFERENCES general_user(id),
    Foreign Key (forumRep_id) REFERENCES forumRep(id)
);


