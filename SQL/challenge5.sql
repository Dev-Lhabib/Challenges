-- Total Inventory Value: The sum of all book prices. 
select sum(price) as Total 
from library_books;

-- Stock Count: The total number of books currently marked as 'Available'.
select count(status_book) as Aviable 
from library_books
where status_book = "Lost";

-- Price Extremes: The most expensive and the cheapest book in one query.
select max(price) as Expensive, min(price) as Cheapest 
from library_books;

-- Average Cost: The average price of all books in your library.
select avrg(price) as Average_books 
from library_books;

