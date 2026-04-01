<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['titre', 'contenu', 'statut', 'user_id'];

    public function user(){
        $this->belongsTo(User::class);
    }
}
