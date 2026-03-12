-- Show each status (Available, Borrowed, Lost) and how many books belong to each.
select status_book, count(status_book) as Status_Books
from library_books 
group by status_book;

-- Show the total value of books owned by each author.
select author, count(author) as Total_Books
from library_books
group by author;

-- Show only the authors whose total book value is greater than 500 MAD
select author, sum(price) as Total_price
from library_books
group by author
having Total_price > 300;