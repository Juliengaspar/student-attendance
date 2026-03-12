<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController
{
    public function index(): void
    {
        $title = 'Tous les étudiants';
        $students = Student::getAllStudents();
        view(
            'students.index',
            compact('title', 'students')
        );
    }

    public function create(): void
    {
        $title = 'Crée un nouvel etudiant';
        view(
            'students.create',
            compact('title')
        );
    }

    public function store(): void
    {
        if (!isset($_SESSION['token']) || !isset($_REQUEST['_token'])) {
            die();
        }
        if ($_SESSION['token'] !== $_REQUEST['_token']) {
            die();
        }//savoir grepher sur different route pour chaqu'un qui'il
        echo 'ok';
    }
}