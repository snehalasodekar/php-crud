<?php

class ClassRoomLoader extends DbConnection
{

    private $allClassesData = [];
    private $data = [];


    public function __construct()
    {
        parent::__construct();
    }

    public function retrieveAllClassRooms()
    {
        $sql = "SELECT ct.id, ct.name, ct.location, s.firstname as studentname,
       s.lastname as studentlastname, tt.firstname as coachfirstname,
       tt.lastname as coachlastname
        FROM class_table ct
        JOIN student s on ct.id = s.class_id
        JOIN teacher_table tt on ct.id = tt.class_id";
        $query = $this->connect->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $course = new ClassRoom($row);
            array_push($this->allClassesData, $course);
            //array_push($this->allClassesData, $course);
            //array_push($this->allClassesData, $teachers);
            //array_push($this->allClassesData, $students);
        }
        return $this->allClassesData;
    }

    public function retrieveTeachers($id)
    {
        $sql = "select teacher_table.firstname from teacher_table where class_id =" . $id;
        $query = $this->connect->query($sql);
        $row = $query->fetchAll();

        return array_push($this->allClassesData, $row);
    }

    public function retrieveStudents($id)
    {
        $sql = "select student.firstname from student where class_id =" . $id;
        $query = $this->connect->query($sql);
        $row = $query->fetch();

        return array_push($this->allClassesData, $row);
    }
}