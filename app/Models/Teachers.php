<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


//argument possibel poir les attrubute
//comnetaire deoritecction ,dans les caracteristique de mas class il y a ça
//proteger les donner envoyer
#[Fillable([
    'id', 'first_name', 'last_name', 'email', 'phone', 'age'
])]
class Teachers extends Model
{
    //suprimer avec une securiter ==> il ne sera pas affihcer reste dans la DB
//    use SoftDeletes;
}
