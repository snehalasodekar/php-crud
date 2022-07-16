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
    public function getAllTeachers()
    {
        $allTeachersData = $this->connect->query("SELECT * FROM teacher_table")->fetchAll();
        foreach ($allTeachersData as $teacher) {
            $teacherObj = new Teacher($teacher['id'], $teacher['firstname'], $teacher['lastname'], $teacher['email'], $teacher['address'], $teacher['class_id']);
            array_push($this->teacherDetailsArr, $teacherObj);
        }
        return $this->teacherDetailsArr;
    }

    /**
     * @param $teacherId
     * @return array|false
     */
    public function getStudentsForTeacher($teacherId): array
    {
        $sql = "select student.firstname
                    from student,teacher_table as teacher
                    where student.class_id = teacher.class_id AND
                    teacher.id = " . $teacherId;
        $allStudentsOfTeacher = $this->connect->query($sql)->fetchAll(PDO::FETCH_COLUMN);
        // print_r($allStudentsOfTeacher);exit;
        return $allStudentsOfTeacher;
    }

    /**
     * @param $teacherId
     * @return array
     */
    public function getClassesForTeacher($teacherId): array
    {
        $sql = "select class_table.name
                from class_table,teacher_table
                where class_table.id = teacher_table.class_id AND
                teacher_table.id =" . $teacherId;
        return $this->connect->query($sql)->fetchAll(PDO::FETCH_COLUMN);
    }

    /*
     * return teacher data by teacher name
     */
    public function getTeacherByName($teacherName)
    {
        $sql = "SELECT * FROM teacher_table where firstName LIKE '%" . $teacherName . "%'";
        return $this->connect->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    /*
     * return teacher data by teacher id
     */
    public function getTeacherById($teacherId)
    {
        $sql = "SELECT * FROM teacher_table where id =" . $teacherId;
        return $this->connect->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @return array|false
     */
    public function getAllClassIdNames()
    {
        $sql = "select id, name
                from class_table";
        return $this->connect->query($sql)->fetchAll();
    }

    /**
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $address
     * @param $classroom
     * @return string
     */
    public function createNewTeacher($firstname, $lastname, $email, $address, $classroom)
    {
        $data = false;
        try {
            $sql = "INSERT INTO `teacher_table` (`firstname`, `lastname`, `email`, `address`, `class_id`)
                    VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $address . "'," . $classroom . ")";
            $data = $this->connect->query($sql);
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }

        return $data;
    }

    /**
     * @param $teacherId
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $address
     * @param $classId
     * @return false|PDOStatement
     */
    public function updateTeacherId($teacherId, $firstname, $lastname, $email, $address, $classId)
    {
        try {
            $sql = "UPDATE `teacher_table`
                    SET `firstname` = '" . $firstname . "',
                        `lastname` = '" . $lastname . "', `email`='" . $email . "',
                        `address`='" . $address . "',`class_id`=" . $classId . "
                    WHERE id =" . $teacherId;
            $data = $this->connect->query($sql);
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }

        return $data;
    }

    /**
     * @param $teacherId
     * @return false|PDOStatement
     */
    public function deleteTeacherbyId($teacherId)
    {
        $sql = 'DELETE FROM `teacher_table`
        WHERE `id` = ' . $teacherId;
        $data = $this->connect->query($sql);
        return $data;
    }
}