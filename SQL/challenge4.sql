-- Create a second table
create table categories (
  id int primary key,
  name_category varchar(30)
)

insert into categories values 
(10, "History"),
(20, "Dev"),
(30, "Dev"),
(40, "Liter")

-- A a column category_id
alter table library_books 
add category_id int;

-- Assign a category ID to each book
update library_books
set category_id = 10
where id = 1;

update library_books
set category_id = 20
where id = 2;

update library_books
set category_id = 30
where id = 3;

update library_books
set category_id = 40
where id = 4;

-- Joins both tables 
SELECT title, name_category 
FROM library_books b 
INNER JOIN categories c 
ON b.category_id = c.id;