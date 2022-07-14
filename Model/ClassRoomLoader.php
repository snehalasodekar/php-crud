<?php

class ClassRoomLoader extends DbConnection {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllClassRooms(): array
    {
        $sql = "SELECT * FROM class_table";
        $query = $this->connect->query($sql)->fetchAll();
        return $query;
    }
}