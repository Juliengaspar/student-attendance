<?php


function all(): ?array
{
    try {
        $pdo = db_connexion();

        return $pdo->query('SELECT id, matricule, first_name, last_name, birth_date, profile_photo, email FROM students WHERE deleted_at IS NULL ORDER BY last_name, first_name')->fetchAll();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return null;
}