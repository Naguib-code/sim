<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission extends Model
{
    use HasFactory;

    protected $fillable = ['nom_complet', 'age', 'sexe', 'adresse','nationalite','status','motif_admission','date_admission','diag_principal','nlit','date_sortie','mode_sortie'];
}
