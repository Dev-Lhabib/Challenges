create database Books_Simplon;
use Books_Simplon
create table library_books(
  id int primary key auto_increment,
  title varchar(150),
  author varchar(100),
  published_year year,
  status_book enum('Available', 'Borrowed', 'Lost'),
  price decimal(10, 2)
)







