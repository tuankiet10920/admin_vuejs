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
(null, 'Name 1', 5, 
'Bộ phim này sẽ đưa bạn về thế kỷ 1 hehe!', 
'Dien vien quan chung', 'Dao dien phen nhat'),
(null, 'Name 2', 4, 
'Day la phim ngu ngoc nhat ma toi muon cho ban xem! hehe!', 
'Diễn viên bị gãy chân khi diễn :)))', 'Đạo diễn hơi bị xịn'),
(null, 'Name 3', 7, 
'Bộ này xem nhức đầu lắm, ai thích hack não thì xem :))', 
'Diễn viên quần chúng', 'Đạo diễn hơi bị xàm');

select * from film;