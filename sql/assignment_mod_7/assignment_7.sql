--Use the employees table to answer the following questions:
--a. Write a query to select all columns and rows from the employees table.

Select * FROM employees;
--(This SQL statement retrieves all the columns and rows from the employees table.
 --The * is a wildcard character that selects all columns from the table.)

--b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

select name,salary from employees where salary>50000;

--(This SQL statement selects only the name and salary columns from the employees table where the salary is greater than 50000.)
 
 --c. Write a query to calculate the average salary of all employees.

select avg(salary) from employees; 

--(Here displaying the average salaray using aggrate function 'avg' from the the employees table.)

--d. Write a query to count the number of employees who work in the "Marketing" department.

 select count(*) from employees join departments on employees.department_id=departments.id
and departments.name='marketing';

--(Here count(*)is used to count the number of employees who work in the Marketing department and join operation
--is excuted to join the employees and deparments table to get the desired result)

--e. Write a query to update the salary column of the employee with an id of 1001 to 60000.

update employees set salary=60000  where id=1001 ;

--(using update keyword i have updated the slaray of an employee and set the salary to 60000  using set=60000
--where employees id is 1001)

--f. Write a query to delete all employees whose salary is less than 30000.

DELETE FROM employees WHERE salary < 30000;

--(This SQL statement deletes rows from the employees table where the salary column is less than 30000)

--Use the departments table to answer the following questions:
--a. Write a query to select all columns and rows from the departments table.

Select * FROM departments;

--(This SQL statement retrieves all the columns and rows from the departments table.)

--b. Write a query to select only the name and manager columns of the "Finance" department.

select name,manager from departments where name='finance';

--(This SQL statement selects only the name and manager columns from the departments table where the name is "Finance".)

--c. Write a query to calculate the total number of employees in each department.

SELECT departments.name, COUNT(*) FROM employees 
JOIN departments ON employees.department_id = departments.id
 GROUP BY departments.name;

--(This query calculates the total number of employees in each department by joining the employees and departments tables on the department_id 
--and id columns respectively, grouping the results by department name, and counting the number of employees.)

--d. Write a query to insert a new department called "Research" with a manager named "John Doe".

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');

--(This SQL statement inserts a new row into the departments table with the values 'Research' for the name column and 'John Doe' for the manager column.)