select title, author, price from library_books;


select * from library_books
-- where price > 100  and price <300;
where price between 100 and 300;

select * from library_books
where published_year > 2020;

select * from library_books
where title like '%php%';

select * from library_books
where status_book != "Lost"
order by published_year desc;

select distinct author from library_books;

select upper(title), round(price) from library_books;