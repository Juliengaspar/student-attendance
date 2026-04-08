<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Tecgdcs\Response;

class TeacherController
{

    public function index()
    {
        $teachers = Teachers::all();
        $title = " tous les proffesseur";
        /* foreach ($teachers as $teacher) {
             echo $teacher['first_name'];
         }*/

        view(
            'teachers.index',
            compact('title', 'teachers')
        );
    }

    public function show()
    {

        $id = $_REQUEST['id'];
        $teacher = Teachers::find($id);
        $title = 'detaille sur la fiche du proffeseu';
        //echo $teacher->first_name;
        view(
            'teachers.show',
            compact('teacher', 'title')

        );
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $profToDelete = Teachers::find($id);
        if ($profToDelete) {
            $profToDelete->delete();
        }
        echo 'destroy';
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $titre = "modifier la fiche d’un prof";
        try {
            $teacher = Teachers::findorfail($id);

        } catch (ModelNotFoundException $e) {
            Response::abort();
        }
        view(
            'teachers.update', compact('teacher', 'titre')
        );
        echo "update";
    }

    public function mysave()
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        echo $name;
        $teacher = Teachers::find($id);
        $teacher->first_name = $name;
        $teacher->save();
    }
}