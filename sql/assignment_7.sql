Select * FROM employees;
(This SQL statement retrieves all the columns and rows from the employees table.
 The * in the SELECT clause is a wildcard character that selects all columns from the table.)

select name,salary from employees where salary>50000;
(This SQL statement selects only the name and salary columns from the employees table where the salary is greater than 50000.)
 
select avg(salary) as average_salaray from employees; 
(Here displaying the average salaray using aggrate function 'avg' from the the employees table.
here i have done aliasing and named the avg(salary) as average salary)


SELECT distinct employees.*, departments.name FROM employees 
JOIN departments ON employees.department_id = departments.id 
WHERE departments.name = 'marketing';
(Here i have done join operation to extract those employees information whom department name is marketing.I used
distinct keyword so that i can get the unique information)

update employees set salary=60000  where id=1001 ;
(using update keyword i have updated the slaray of an employee and set the salary to 60000  using set=60000
where employees id is 1001)

DELETE FROM employees WHERE salary < 30000;
(This SQL statement deletes rows from the employees table where the salary column is less than 30000)

Select * FROM departments;
(This SQL statement retrieves all the columns and rows from the departments table.)

select name,manager from departments where name='finance';
(This SQL statement selects only the name and manager columns from the departments table where the name is "Finance".)

select name,count(departments.name) as total_in_one_department from departments group by departments.name;
(This SQL statement retrieves the name column and the count of the number of employees in each department from the departments table. 
It uses the GROUP BY clause to group the result set by the name column.)

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
(This SQL statement inserts a new row into the departments table with the values 'Research' for the name column and 'John Doe' for the manager column.)