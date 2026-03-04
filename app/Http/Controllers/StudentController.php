<?php
namespace Attendances\Controllers;

class StudentController
{
   static function index():void
    {
        require MODELS_PATH . '/Student.php';
        $title = 'Tous les étudiants';
        $students = all();

        include VIEWS_PATH.'/students/index.blade.php';
        view('student.index', compact('title', 'students'));

    }
}
