1) get all employee detail
SELECT * FROM  emp;

2)mobile number 
SELECT * FROM  emp WHERE phone = "9799889566"; 

3)City surat hoy 
SELECT * FROM  emp WHERE  city="Surat";

5)salary 10k down
SELECT * FROM emp WHERE salary < 10000;  

5)salary 10k up
SELECT * FROM emp WHERE salary > 10000;  

6)salary 10k up to 20k dowm 
SELECT * FROM emp WHERE salary between 10000 and 20000; 


7) Jeni Salary 10k uparh hoi teva employee no count
==> SELECT COUNT(salary)
    FROM emp
    WHERE salary > 10000;

8) Jeni salary 10k upar hoi teva employee ni salary no sarvalo
==> SELECT SUM(salary) AS Total Salary
    FROM emp
    WHERE salary > 10000;

9) Badha employe ni list with company name
==> SELECT auth.name, emp.name
    FROM auth
    JOIN emp ON auth.id = emp.user_id;
                                                                                                                                            
Group by with aggregate

10) Same Salary vala ketla employee che aenu list
    for example 50,000 -> 2, 20,000 -> 3, 1,50,000 -> 1
    =>  SELECT salary,Count(salary) AS total
        FROM emp    
        GROUP BY salary


11) Kai city ma ketla employee che aenu list
    for example Surat -> 5, Rajkot -> 3
    SELECT city, Count(city) AS Total
    FROM emp 
    GROUP BY city

12) same name na ketla record che te display
    SELECT name,Count(name) AS Total
    FROM emp
    GROUP BY name


Join, Left join, right join
 