<?php

function index()
{
    require MODELS_PATH . '/Student.php';
    $students = all();
    $title = 'Prendre les présences';
    include VIEWS_PATH.'/attendances/index.php';
}