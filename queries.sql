CREATE DATABASE CompanyDB;

USE CompanyDB;

CREATE TABLE Employees (
    EmployeeID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    HireDate DATE
);

CREATE TABLE Departments (
    DepartmentID INT AUTO_INCREMENT PRIMARY KEY,
    DepartmentName VARCHAR(50),
    Location VARCHAR(100)
);

CREATE TABLE Projects (
    ProjectID INT AUTO_INCREMENT PRIMARY KEY,
    ProjectName VARCHAR(100),
    StartDate DATE,
    EndDate DATE
);

DROP TABLE IF EXISTS Projects;

ALTER TABLE Employees MODIFY HireDate DATE;

INSERT INTO Employees (FirstName, LastName, EmploymentDate) VALUES
    ('John', 'Doe', '2020-01-15'),
    ('Jane', 'Smith', '2021-03-22'),
    ('Alice', 'Brown', '2019-07-30');


INSERT INTO Departments (DepartmentName, Location) VALUES
    ('IT', 'New York'),
    ('HR', 'London'),
    ('Marketing', 'Paris');

UPDATE Employees SET LastName = 'Johnson' WHERE EmployeeID = 1;

DELETE FROM Departments WHERE DepartmentID = 2;

SELECT * FROM Employees;
SELECT FirstName, LastName FROM Employees WHERE EmploymentDate > '2020-01-01';

SELECT e.FirstName, e.LastName, d.DepartmentName
FROM Employees e
JOIN Departments d ON e.DepartmentID = d.DepartmentID;

ALTER TABLE Employees ADD COLUMN Position VARCHAR(50);
ALTER TABLE Employees CHANGE COLUMN Position JobTitle VARCHAR(50);

SELECT COUNT(*) AS TotalEmployees FROM Employees;

SELECT EmploymentDate, COUNT(*) AS HiresCount
FROM Employees
GROUP BY EmploymentDate
ORDER BY HiresCount DESC;