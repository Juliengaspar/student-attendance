<?php
function index()
{
    $title = 'Page d’accueil';


    view('home', compact('title'));
}