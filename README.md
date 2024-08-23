# Candidate: Muhammad Asfund Yar

### Contact Info
**Phone:** [+92 331 5690929](https://wa.me/923315690929)

**Email:** mr.asfund@hotmail.com

**LinkedIn:** [https://www.linkedin.com/in/asfund/](https://www.linkedin.com/in/asfund/)

## How To Run the Project

1. **composer install** 
2. **php artisan migrate** 
3. **php artisan db:seed** 
4. **php artisan serve** 



## My Approach to Do this task
To make the search work well, I used Eloquent relationships to find and get related data with as few queries as possible. I have used whereHas method, So, I searched orders and items linked to each customer. So, I only get the customer data with their orders and items.

To improve performance, I used eager loading (with) to reduce the number of database queries and avoid problems with too many queries. Adding indexes to the search fields in the database (like email and order id) can also make searches faster, especially with large amounts of data.

This was a simple task so I didn't go deep but we can also do other techniques for optimizations and performance, will discuss if selected for next round.