<?php

function index()
{
    require MODELS_PATH . '/Student.php';
    $title = 'Tous les étudiants';
    $students = all();

    include VIEWS_PATH.'/students/index.php';
}