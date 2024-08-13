<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;
    protected $fillable = ['lib','desc','categorie_id'];
    public function categorie():BelongsTo{
        return $this->belongsTo(Categorie::class);
    }
    public function questions():HasMany{
        return $this->hasMany(Question::class);
    }
}
