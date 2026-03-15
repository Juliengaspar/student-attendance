<?php

namespace App\Models;
class Teacher
{
    static function getAllTeachers()
    {
        try {
            return db_connection()->query("SELECT * FROM  teachers order by last_name");

        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}