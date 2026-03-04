<?php

function index()
{
    require MODELS_PATH . '/Student.php';
    $students = all();
    $title = 'Prendre les présences';

    view('attendances.index', compact('title', 'students'));
}