<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['lib','desc','section_id'];

    public function section():BelongsTo{
        return $this->belongsTo(Section::class);
    }

    public function cours():HasMany{
        return $this->hasMany(Cour::class);
    }
}
