<?php

class ClassRoomLoader extends DbConnection
{

    private $allClassesData = [];
    private $data = [];
    private $classStudents = [];


    public function __construct()
    {
        parent::__construct();
    }

    public function retrieveAllClassRooms()
    {
        $sql =
            "SELECT ct.id, ct.name, ct.location, s.firstname as studentname,
       s.lastname as studentlastname, tt.firstname as coachfirstname,
       tt.lastname as coachlastname
FROM class_table ct
    JOIN student s on ct.id = s.class_id
    JOIN teacher_table tt on ct.id = tt.class_id
    GROUP BY ct.location;";

        $query = $this->connect->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $students = $this->retrieveAllStudents($row['id']);
            $course = new ClassRoom($row, $students);
            array_push($this->allClassesData, $course);
        }
        return $this->allClassesData;
    }


    //retrieving students of specific class
    public function retrieveAllStudents($classId)
    {
        $sql = "SELECT student.firstname
FROM student
JOIN class_table ct on student.class_id = ct.id
WHERE student.class_id = $classId";

        return $this->connect->query($sql)->fetchAll(PDO::FETCH_COLUMN);


    }

    public function editClasses($classId)
    {
        $sql = "UPDATE class_table ct
JOIN student s on ct.id = s.class_id
JOIN teacher_table tt on ct.id = tt.class_id
SET s.firstname ='BABA', tt.lastname ='LALALAND'
WHERE s.class_id = $classId or tt.class_id = $classId or ct.id = $classId";

        return $this->connect->query($sql);
    }

}