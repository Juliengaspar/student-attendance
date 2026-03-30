<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Tecgdcs\Response;

class StudentController
{
    private function check_id(): ?int
    {
        // Validation
        if (!isset($_REQUEST['id']) || !is_numeric($_REQUEST['id'])) {
            Response::abort(Response::BAD_REQUEST);
        }

        // Sanitisation | Nettoyage | Préparation
        return (int)$_REQUEST['id'];
    }

    private function check_csrf(): void
    {

        if (!isset($_REQUEST['_token'], $_SESSION['token'])) {
            Response::abort(Response::BAD_REQUEST);
        }

        if ($_REQUEST['_token'] !== $_SESSION['token']) {
            Response::abort(Response::UNAUTHORIZED);
        };
    }

    public function index(): void
    {
        $title = 'Tous les étudiants';
        $students = Student::all();

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
        $this->check_csrf();
        // Valider les données associées à la requête
        //barriers si les donnée son incorect et on vas en dessous si les donner son correct

        // Stocker un étudiant en DB
        $student = new Student();
        //different tableaux de la DB
        $student->first_name = $_POST['first_name'];
        $student->last_name = $_POST['last_name'];
        $student->email = $_POST['email'];
        $student->matricule = $_POST['matricule'];
        $student->birth_date = empty($_POST['birth_date']) ? null : $_POST['birth_date'];///tester si c'est un bonne date et empty peremt de verifier la qualité de l'info/ si c'est empty on retourn null si non on retourne la date
        //enrigstrer les info dans la db
        $student->save();

        // Demander au navigateur de se rediriger vers la page de résultat souhaitée
        //Acces a l'id que sgbd qui a crée
        Response::redirect('Location: /etudiant?id=' . $student->id);

    }

    public function show(): void
    {
        $id = $this->check_id();

        try {
            $student = Student::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Response::abort();
        }

        $title = 'La fiche de ' . $student->first_name;

        view('students.show',
            compact(
                'title',
                'student'
            )
        );

    }

    public function edit(): void
    {
        $id = $this->check_id();

        try {
            $student = Student::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            Response::abort();
        }

        $title = 'La fiche de ' . $student->first_name;

        view('students.edit',
            compact(
                'title',
                'student'
            )
        );
    }


    public function update(): void
    {
        $this->check_csrf();

        // Validation des données qui bloque si les données sont invalides

        $id = $this->check_id();
        //retourne un etudiant coorespondant a l'id de l'etudiants
        $student = Student::find($id);

        $student->first_name = $_POST['first_name'];
        $student->last_name = $_POST['last_name'];
        $student->email = $_POST['email'];
        $student->matricule = $_POST['matricule'];
        $student->birth_date = empty($_POST['birth_date']) ? null : $_POST['birth_date'];

        $student->save();

        //redireige vers l'étudiants
        Response::redirect('Location: /etudiant?id=' . $student->id);

    }

    public function destroy(): void
    {
        $this->check_csrf();

        $id = $this->check_id();

        Student::destroy($id);

        Response::redirect('Location: /etudiants');
    }

}