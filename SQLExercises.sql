
    
    
CREATE TABLE Student (
    StudentID INT PRIMARY KEY,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth date,
    Email varchar(255),
    Phone int(11)
);
    
CREATE TABLE Course (
    CourseID INT PRIMARY KEY,
    CourseName varchar(255),
    Credits int
);
    

CREATE TABLE Instructor (
    InstructorID int PRIMARY KEY, 
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(100),
    Phone int(11)
);

CREATE TABLE Enrollment (
    EnrollmentID  INT PRIMARY KEY, 
    StudentID INT,
    CourseID  INT,
    EnrollmentDate date,
    Grade varchar(2),
    FOREIGN KEY (StudentID) REFERENCES Student (StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course (CourseID)
);
    
INSERT INTO Student(StudentID, FirstName, LastName, DateOfBirth, Email, Phone)
VALUES ("06072", "Neil", "Repato", "2003-03-15", "nrr@gmail.com", "0927256254");
SELECT * FROM Student;

INSERT INTO Course(CourseID, CourseName, Credits)
VALUES ("0708", "CIT17", "4000");
SELECT * FROM Course;

INSERT INTO Instructor(InstructorID, FirstName, LastName, Email, Phone)
VALUES ("0809", "Prim",  "Reyes", "Leonar@gmail.com", 0920391023);
SELECT * FROM Instructor;

INSERT INTO Enrollment(EnrollmentID, StudentID, CourseID, EnrollmentDate, Grade)
VALUES (2024, "211001", "CIT17", "22,2023", 99);
SELECT * FROM Enrollment;

