create database theme_admin;
use theme_admin;

create table film(
	id_film int auto_increment primary key,
    name varchar(255),
    count_eps int,
    describ text,
    actor varchar(255),
    director varchar(255)
);

insert into film values
(null, 'Name 1', 5, 'Day la phim ngu ngoc nhat ma toi muon cho ban xem! hehe!', 'Dien vien quan chung', 'Dao dien phen nhat');

select * from film;