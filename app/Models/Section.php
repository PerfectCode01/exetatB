<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    use HasFactory;
    protected $fillable=['lib','desc'];

    public function categories():BelongsToMany{
        return $this->belongsToMany(Categorie::class,'categorie_section')->withTimestamps();
    }
}
