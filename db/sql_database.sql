CREATE DATABASE db_web_profile_ci;
USE DATABASE db_web_profile_ci;

CREATE TABLE menu (
	id_menu INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	controller varchar(100),
	icon varchar(100),
	namamenu VARCHAR(100),
	is_active TINYINT(4) DEFAULT 1,
);

CREATE TABLE configweb (
	id_config INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	title_web VARCHAR(50),
	sub_title_web VARCHAR(50),
	banner_img VARCHAR(200),
	banner_img2 VARCHAR(200),
);

CREATE TABLE administrator (
	id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(50),
	token VARCHAR(200),
    created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE profile (
	id_profile INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama VARCHAR(50) NOT NULL,
	tempat_lahir VARCHAR(20) NOT NULL,
	tanggal_lahir date,
	deskripsi VARCHAR(200),
	akun_github VARCHAR(50),
	akun_linkedin VARCHAR(50),
	akun_facebook VARCHAR(50),
	akun_ig VARCHAR(50),
	akun_twitter VARCHAR(50),
	akun_email VARCHAR(50),	
	gambar VARCHAR(200),
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE categori_project (
	id_categori_project INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nama_category_project VARCHAR(50),
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE category_skill_project (
	id_category_Skill_project INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_category_Skill_project VARCHAR(50),
	desk_category_Skill_project VARCHAR(50)
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE skill_project (
	id_skill_project INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_skill_project VARCHAR(100),
	deskripsi_skill_project VARCHAR(200),
	presentase_skill_project VARCHAR(20),
	category_Skill_project_id INT NOT NULL,
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

ALTER TABLE skill_project ADD FOREIGN KEY (category_Skill_project_id) REFERENCES category_skill_project(id_category_Skill_project);


CREATE TABLE portofolio (
	id_portofolio INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_project VARCHAR(50) NOT NULL,
	sub_desk_project VARCHAR(50),
	deskripsi_project VARCHAR(200) NOT NULL,
	deadline_project date,
	client_project VARCHAR(50),
	client_review varchar(50),
	gambar_project VARCHAR(200),
	demo_project VARCHAR(200),
	skill_project_id INT NOT NULL,
	category_project_id INT NOT NULL,
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

ALTER TABLE portofolio ADD FOREIGN KEY (category_project_id) REFERENCES categori_project(id_categori_project);
ALTER TABLE portofolio ADD FOREIGN KEY (skill_project_id) REFERENCES skill_project(id_skill_project);

CREATE TABLE resume (
	id_resume INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_resume VARCHAR(50),
	deskripsi_resume VARCHAR(100),
	place_resume VARCHAR(50),
	start_date date,
	end_date date
	gambar_resume VARCHAR(200),
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE service (
	id_service INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_service VARCHAR(100),
	deskripsi_service VARCHAR(100),
	harga_service INT(50),
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE user (
	id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_user VARCHAR(50),
	email_user VARCHAR(50),
	phone_user VARCHAR(12),
	gambar_user VARCHAR(200),
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

CREATE TABLE contact (
	id_contact INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	subject_user VARCHAR(50),
	message_user VARCHAR(100),
	user_id INT NOT NULL,
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

ALTER TABLE contact ADD FOREIGN KEY (user_id) REFERENCES user(id_user);

CREATE TABLE testimonial (
	id_testimonial INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	rating_testimonial INT(6),
	deskripsi_testimonial VARCHAR(100),
	user_id INT NOT NULL,
	created_at timestamp NOT NULL default now(),
    updated_at timestamp NOT NULL default now() on update now()
);

ALTER TABLE testimonial ADD FOREIGN KEY (user_id) REFERENCES user(id_user);

