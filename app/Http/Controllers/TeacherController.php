<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController
{
    public function index()
    {
        $teachers = Teacher::getAllTeachers();
        view('teachers.index', compact('teachers'));


    }

    public function create()
    {
        echo 'toto';
        view('teachers.create');
    }

    public function store()
    {
        $first_Name = $_POST['first_Name'];
        $last_Name = $_POST['last_Name'];
        $email = $_POST['email'];
        $myQuery = 'insert into teachers(first_name, last_name, email) values(?,?,?); ';
        //db_connection()->query($myQuery, [$first_Name, $last_Name, $email]);
        $stm = db_connection()->prepare($myQuery);
        $stm->execute([$first_Name, $last_Name, $email]);
    }
}