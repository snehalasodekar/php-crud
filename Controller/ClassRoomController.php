<?php
declare(strict_types=1);

class ClassRoomController{

    private DbConnection $classRoomLoader;

    public function __construct(DbConnection $con)
    {
        $this->classRoomLoader = $con;
    }
    public function renderClassRoom(){

        $this->classRoomLoader->getAllClassRooms();
    }


}