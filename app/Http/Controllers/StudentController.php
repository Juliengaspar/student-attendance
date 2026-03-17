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
        $title = 'Ajouter un étudiant';

        view(
            'students.create',
            compact('title')
        );
    }

    public function store(): void
    {
        //token && session
        //tester si token est bien defini dans les 2 cas
        //si session est egale a token OK
        if (!isset($_REQUEST['_token'], $_SESSION['token'])) {
            die('bad request');
        }

        //si session n’est pas egale a token alors erreurs
        if ($_REQUEST['_token'] !== $_SESSION['token']) {
            die('unauthorized');
        };
        // Stocker un étudiant en DB
        // Demander au navigateur de se rediriger vers la page de résultat souhaitée
        die('enregistré');
    }
}