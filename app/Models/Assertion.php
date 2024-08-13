<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assertion extends Model
{
    use HasFactory;
    protected $fillable = ['lib','is_correct','question_id'];

    public function question():BelongsTo{
        return $this->belongsTo(Question::class);
    }
}
