create database if not exists latihan;
use latihan;
create table if not exists data_manag(
      no int auto_increment not null,
      nama varchar(40) not null,
      nisn int not null,
      alamat varchar(60),
      email varchar(30),
      ket varchar(60),
      primary key(no)
);

-- insert into data_manag values(
--       ,
--       "",
--       ,
--       "",
--       "",
--       ""
-- );
-- insert into data_manag values(
--       2,
--       "ucu zakiyah rahma nindya",
--       118351,
--       "karawang bekasi",
--       "uzky2003@gmail.com",
--       'berkuliah di universitas horizon bekasi karawang'
-- );

-- insert into data_manag values(
--       3,
--       "sekar dirgantari ayuning tyas",
--       123463,
--       "lamuk bukateja",
--       "sekardirgantari46@gmail.com",
--       "lulusan di smkn 1 bukateja (fresh graduate)"
-- );
-- insert into data_manag values(
--       4,
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

select*from data_manag;