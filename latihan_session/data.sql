create database if not exists latihan;
use latihan;
-- create table if not exists data_manag(
--       no int auto_increment not null,
--       nama varchar(40) not null,
--       nisn int not null,
--       alamat varchar(60),
--       email varchar(30),
--       ket varchar(60),
--       primary key(no)
-- );

-- insert into data_manag values(
--       1,
--       "rio rifaldi",
--       324136,
--       "bekasi jakarta",
--       "riorifaldi2004@gmail.com",
--       "fresh graduate"
-- );
-- insert into data_manag values(
--       0,
--       "ucu zakiyah rahma nindya",
--       118351,
--       "karawang bekasi",
--       "uzky2003@gmail.com",
--       'berkuliah di universitas horizon bekasi karawang'
-- );

-- insert into data_manag values(
--       0,
--       "sekar dirgantari ayuning tyas",
--       123463,
--       "lamuk bukateja",
--       "sekardirgantari46@gmail.com",
--       "lulusan di smkn 1 bukateja (fresh graduate)"
-- );
-- insert into data_manag values(
--       0,
--       "rizka nur khasanah",
--       853573,
--       "bukateja",
--       "rizkanur89@gmail.com",
--       "lulusan di smkn 1 bukateja (fresh graduate)"
-- );
-- insert into data_manag values(
--       0,
--       "maulidya syafira",
--       736024,
--       "palembang sumatra selatan",
--       "myldfr33@gmail.com",
--       "bersekolah di sma jurusan ipa di sumatra selatan palembang"
-- );

-- select*from data_manag;



create table if not exists user(

      id int primary key auto_increment,
      username varchar(50) not null,
      password varchar(255) not null
);
desc user;