<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['lib','desc','section_id'];

    public function sections():BelongsToMany{
        return $this->belongsToMany(Section::class,'categorie_section')->withTimestamps();
    }

    public function cours():HasMany{
        return $this->hasMany(Cour::class);
    }
}
