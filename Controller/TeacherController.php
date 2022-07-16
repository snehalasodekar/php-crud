<?php

class TeacherController
{
    private DbConnection $DbConTeacherLoader;

    public function __construct(DbConnection $con)
    {
        $this->DbConTeacherLoader = $con;
    }

    public function render(): void
    {
        //$teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
        if (isset($_POST)) {
            $submit = 'default';
            if (!empty($_POST['page'])) {
                $submit = $_POST['page'];
            }
                switch ($submit) {
                    case 'indexPage':
                        include_once 'View/homepageView.php';
                        break;
                    case 'detailTeacher': //show all teachers READ
                        $teacherId = (int)$_POST['teacherIdHidden'];
                        $teacherDetails = $this->DbConTeacherLoader->getTeacherById($teacherId);
                        $tescherStudents = $this->DbConTeacherLoader->getStudentsForTeacher($teacherId);
                        $tescherClasses = $this->DbConTeacherLoader->getClassesForTeacher($teacherId);
                        include 'View/teacher/teacherDetailView.php';
                        break;
                    case 'detailReturn': //go back button
                        $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
                        include_once 'View/teacherView.php';
                        break;
                    case 'deleteTeacher': // Delete Teacher DELETE
                        $teacherId = (int)$_POST['teacherIdHidden'];
                        $this->DbConTeacherLoader->deleteTeacherbyId($teacherId);
                        $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
                        include_once 'View/teacherView.php';
                        break;
                    case 'createTeacher': //show create teacher form
                        $classData = $this->DbConTeacherLoader->getAllClassIdNames();
                        include_once 'View/teacher/teacherCreateView.php';
                        break;
                    case 'newTeacher': // Create a new teacher query and display updated view
                        $classId = (int)$_POST['classroom'];
                        $newTeacherData = $this->DbConTeacherLoader
                            ->createNewTeacher(strtolower($_POST['first_name']), strtolower($_POST['last_name']), strtolower($_POST['email']), strtolower($_POST['address']), $classId);
                        $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
                        include_once 'View/teacherView.php';
                        break;
                    case 'updateTeacherForm' : //show update teacher form
                        $teacherId = (int)$_POST['teacherIdHidden'];
                        $teacherDetails = $this->DbConTeacherLoader->getTeacherById($teacherId);
                        $classData = $this->DbConTeacherLoader->getAllClassIdNames();
                        include_once 'View/teacher/teacherUpdateView.php';
                        break;
                    case 'updateTeacherQuery': // Update a teacher UPDATE
                        $classId = (int)$_POST['classroom'];
                        $teacherId = (int)$_POST['teacherIdHidden'];
                        //$teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
                        $updateTeacher = $this->DbConTeacherLoader->
                        updateTeacherId($teacherId, strtolower($_POST['first_name']), strtolower($_POST['last_name']), strtolower($_POST['email']), strtolower($_POST['address']), $classId);
                        $teacherDetails = $this->DbConTeacherLoader->getTeacherById($teacherId);
                        $tescherStudents = $this->DbConTeacherLoader->getStudentsForTeacher($teacherId);
                        $tescherClasses = $this->DbConTeacherLoader->getClassesForTeacher($teacherId);
                        include 'View/teacher/teacherDetailView.php';
                        break;
                    default:
                        $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
                        include_once 'View/teacherView.php';
                        break;

                }
            }
        }
    }
/*TODO
 * here call getteacherByid
 * then call getll student data for that teacher from loader method call save to array and display
 * similar to classes
 * remove the array things from teacher loader
 *
 */