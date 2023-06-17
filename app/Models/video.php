<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable = ['nom_Vidéo', 'heure_diffusion', 'jour_diffusion','lien_video','description','image', 'category_id'];
  
    public function categorie()
    { 
        return $this->belongsTo(\App\Models\categorie::class,'category_id'); 
    }
   

}
