<?php
namespace Attendances\Controllers;

class AttendanceController
{
    static function index():void
    {
        require MODELS_PATH . '/Student.php';
        $students = all();
        $students = Attendances\Models\Student::all();
        /*
         *
         * */
        $title = 'Prendre les présences';

        view('attendances.index', compact('title', 'students'));
    }
}
