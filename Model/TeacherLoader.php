<?php

class TeacherLoader extends DbConnection
{
    private array $teacherDetailsArr = [];

    public function __construct()
    {
        parent::__construct();
    }
    /*
     * returns all data from teacher Table
     */
    public function getAllTeachers(){
        $allTeachersData = $this->connect->query("SELECT * FROM teacher_table")->fetchAll();
        foreach ($allTeachersData as $teacher) {
                $studentsOfTeacher = $this->getStudentsForTeacher($teacher['id']);
                $classesOfTeacher = $this->getClassesForTeacher($teacher['id']);

                $teacherObj = new Teacher($teacher['id'],$teacher['firstname'],$teacher['lastname'],$teacher['email'],$teacher['address'],$teacher['class_id'],$studentsOfTeacher,$classesOfTeacher);
                array_push($this->teacherDetailsArr,$teacherObj);
        }
        return $this->teacherDetailsArr;
    }

    /**
     * @param $teacherId
     * @return array|false
     */
    public function getStudentsForTeacher($teacherId):array {
        $sql = "select student.firstname, teacher.firstName
                    from student,teacher_table as teacher
                    where student.class_id = teacher.class_id AND
                    teacher.id = ".$teacherId;
        $allStudentsOfTeacher = $this->connect->query($sql)->fetchAll(PDO::FETCH_COLUMN);
           // print_r($allStudentsOfTeacher);exit;
        return $allStudentsOfTeacher;
    }

    /**
     * @param $teacherId
     * @return array
     */
    public function getClassesForTeacher($teacherId):array {
        $sql = "select class_table.name, teacher_table.firstName
                from class_table,teacher_table
                where class_table.id = teacher_table.class_id AND
                teacher_table.id =".$teacherId;
        return $this->connect->query($sql)->fetchAll(PDO::FETCH_COLUMN);
    }
    /*
     * return teacher data by teacher name
     */
    public function getTeacherByName($teacherName){
        $sql = "SELECT * FROM teacher_table where firstName LIKE '%".$teacherName."%'";
        return $this->connect->query($sql)->fetchAll();
    }
}