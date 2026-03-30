<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


//argument possibel poir les attrubute
//comnetaire deoritecction ,dans les caracteristique de mas class il y a ça
//proteger les donner envoyer
#[Fillable([
    'first_name', 'last_name', 'email', 'matricule', 'birth_date', 'profile_photo'
])]
class Student extends Model
{
    //suprimer avec une securiter ==> il ne sera pas affihcer reste dans la DB
//    use SoftDeletes;
}


/*namespace App\Models;

use PDO;
use PDOException;

class Student
{
    static function getAllStudents(): ?array
    {
        try {
            //global PDO ==>

            return db_connection()->query('SELECT id, matricule, first_name, last_name, birth_date, profile_photo, email FROM students WHERE deleted_at IS NULL ORDER BY last_name, first_name')->fetchAll();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public static function find(int $id)
    {
        $sql = <<<SQL
                SELECT * 
                FROM students
                WHERE id = :id
SQL;


        try {
            $pdo = db_connection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return null;
    }


    function getAllStudentWhereFirstNameContainsA(): ?array
    {
        try {
            //global PDO ==>

            return db_connection()->query("SELECT count(*)
                                 FROM students")->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return null;
    }


    function getStudent()
    {
        try {
            return db_connection()->query("SELECT *
FROM students WHERE first_name LIKE '%a%'")->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
*/