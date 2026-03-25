1) Show all students with their course names.
SELECT students.id,students.name,courses.course_name 
FROM students
INNER JOIN coursesss
ON students.id = courses.id; 

2) Show student name and course name where student city is Surat.
SELECT s.name, c.course_name
FROM students AS s
JOIN courses AS c 
ON s.id = c.id
WHERE s.city = 'Surat';


3) Show all students enrolled in SQL course.
 

select
  s.*
from
  students as s 
join enrollments as e
  on e.student_id = s.id
where
  e.course_id = (select id from courses where course_name = 'SQL');


select
  s.*
from
  students as s 
join enrollments as e
  on e.student_id = s.id
join courses as c
  on c.id = e.course_id
where
  c.course_name = 'SQL'

 
4) Count how many students enrolled in each course.
 SELECT students,Count()

5) Show all students and their courses (including students without courses).

6) Show students who are not enrolled in any course.

7) Show students with course name (if exists).
 
8) Show all courses and students who enrolled.

9) Show courses with no students enrolled.