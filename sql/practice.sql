CREATE DATABASE Company;

CREATE TABLE Employee(
Emp_No INT UNSIGNED NOT NULL AUTO_INCREMENT,
Emp_Name VARCHAR(128),
Salary VARCHAR(128),
City VARCHAR(128),
PRIMARY KEY(Emp_No)
);

INSERT INTO `employee`(`Emp_No`, `Emp_Name`, `Salary`, `City`) VALUES ('','Hasan','30000','Jamalpur');
INSERT INTO `employee`(`Emp_No`, `Emp_Name`, `Salary`, `City`) VALUES ('','Habib','7000','Rajshahi');
INSERT INTO `employee`(`Emp_No`, `Emp_Name`, `Salary`, `City`) VALUES ('','Saiful','14000','Gazipur');
INSERT INTO `employee`(`Emp_No`, `Emp_Name`, `Salary`, `City`) VALUES ('','Amir','17000','Khulna');
INSERT INTO `employee`(`Emp_No`, `Emp_Name`, `Salary`, `City`) VALUES ('','Mahmud','15000','Rajshahi');

1. Write a query to show every field
Select * from employee;

2. Display Name and Salary
Select Emp_name,Salary From Employee;

3.Displaye Emp_name starting with Alphabet  A

Select Emp_Name from employee where Emp_Name like 'A%';

4. Name Finish with a
Select Emp_Name from employee where Emp_Name like '%A'

5. Name which has a in the middle
Select Emp_Name from employee where Emp_Name like '%A%'

6. Give me the list whom city is Rajshahi
SELECT `Emp_No`, `Emp_Name`, `Salary`, `City` FROM `employee` WHERE City='Rajshahi';

7.Give me the list of people whom salary is greater than >10000
SELECT `Emp_No`, `Emp_Name`, `Salary`, `City` FROM `employee` WHERE Salary>10000;

8.Give me the list of people whom salary is less than <10000
SELECT `Emp_No`, `Emp_Name`, `Salary`, `City` FROM `employee` WHERE Salary<10000;

9.Salary Between 15k and 30k
SELECT `Emp_No`, `Emp_Name`, `Salary`, `City` FROM `employee` WHERE Salary BETWEEN 15000 and 30000;

10. Add 10k to that person's salary whom income is less 10k

UPDATE employee
SET salary = salary + 10000
WHERE salary < 10000;

11. Display list whom salary<20k and City=rajshahi

SELECT * FROM `employee` WHERE Salary<20000 AND City='Rajshahi';

12.Display a list whom salary is not between 5k to 15k and there is not D at the end of their name

SELECT * FROM employee WHERE Salary NOT BETWEEN 5000 and 15000 and Emp_Name NOT LIKE "%D" ;

13. Display name,salary and city whom city is Rajshahi

SELECT `Emp_Name`, `Salary`, `City` FROM `employee` WHERE City='Rajshahi';

14.whom city is Rajsahi and  salary is below 18k, add 5000k to their salary and display their name and salary(remember not to update just display it)

SELECT Emp_Name,Salary+5000 FROM employee WHERE Salary<18000 and City="Rajshahi";

15. update the employee name whom emp_no is 5;

Update employee set Emp_Name='mahmuda' where Emp_No=5;

16. delete em_no=5


=============================================================================================================================================================
								mid level query
==============================================================================================================================================================

CREATE TABLE Employee_detail(
emp_id INT UNSIGNED NOT NULL,
emp_name VARCHAR(128),
job_name VARCHAR(128),
manager_id INT null,
hire_date DATE,
salary VARCHAR(128),
commission VARCHAR(128) null,
dept_id int

);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (101, 'John Smith', 'Manager', NULL, '2020-01-01', '50000', NULL, 1);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (102, 'Sarah Johnson', 'Salesperson', 101, '2020-02-01', '30000', '1000', 1);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (103, 'Mike Davis', 'Salesperson', 101, '2020-02-01', '30000', '500', 1);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (104, 'Emily Lee', 'Analyst', 101, '2020-03-01', '40000', NULL, 2);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (105, 'James Chen', 'Developer', 104, '2020-04-01', '45000', NULL, 2);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (106, 'Sophia Lee', 'Developer', 104, '2020-04-01', '45000', NULL, 2);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (107, 'Andrew Kim', 'Engineer', 104, '2020-05-01', '50000', NULL, 2);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (108, 'Olivia Smith', 'Marketing', 101, '2020-06-01', '35000', '2000', 3);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (109, 'Jacob Lee', 'Marketing', 101, '2020-06-01', '35000', '1500', 3);

INSERT INTO Employee_detail (emp_id, emp_name, job_name, manager_id, hire_date, salary, commission, dept_id)
VALUES (110, 'Emma Kim', 'Assistant', 101, '2020-07-01', '25000', NULL, 4);

===========================Creating department table=================================================
create table department(
dept_id int not null,
dept_name VARCHAR(128) NOT NULL,
dept_location VARCHAR(128) NOT NULL
);

=====inersiting data into department table=======

INSERT INTO department (dept_id, dept_name, dept_location) 
VALUES (1, 'Finance', 'Dhaka');
INSERT INTO department (dept_id, dept_name, dept_location) 
VALUES (2, 'Audit', 'Rajshahi');
INSERT INTO department (dept_id, dept_name, dept_location) 
VALUES (3, 'Marketing', 'Shylhet');
INSERT INTO department (dept_id, dept_name, dept_location) 
VALUES (4, 'Production', 'Chattogram');


===========================Creating Salary Grade Table=================================================
create table salary_grade(
grade int not null,
min_salary VARCHAR(128) NOT NULL,
max_salary VARCHAR(128) NOT NULL
);

====data inserting query=====

INSERT INTO salary_grade (grade, min_salary, max_salary) 
VALUES (1, '8000', '15000');

INSERT INTO salary_grade (grade, min_salary, max_salary) 
VALUES (2, '15001', '20000');

INSERT INTO salary_grade (grade, min_salary, max_salary) 
VALUES (3, '20001', '25000');

INSERT INTO salary_grade (grade, min_salary, max_salary) 
VALUES (4, '25001', '30000');

INSERT INTO salary_grade (grade, min_salary, max_salary) 
VALUES (5, '30001', '35000');

=====================================================================================================================

1. display all sales person only

SELECT * FROM `employee_detail` WHERE job_name='salesperson';

2.Display All salesperson employee_id,name,job name,hire date, and experience

SELECT `emp_id`, `emp_name`, `job_name`, `hire_date`,DATEDIFF(CURRENT_DATE,hire_date)"EXPERIENCE" FROM `employee_detail` WHERE job_name='salesperson';

3. Display all 3,4,5 grade imformaion

SELECT * FROM employee_detail e, salary_grade s WHERE e.salary BETWEEN s.min_salary and s.max_salary AND s.grade IN (3,4,5);

4. display Salesperson and marketing whom salaray grade is 4 and 5

SELECT * FROM employee_detail e, salary_grade s WHERE e.salary BETWEEN s.min_salary and s.max_salary AND s.grade IN (4,5) AND e.job_name IN('salesperson','marketing');

5.
SELECT * FROM employee_detail WHERE salary > (SELECT salary FROM employee_detail WHERE emp_name='sakib');
