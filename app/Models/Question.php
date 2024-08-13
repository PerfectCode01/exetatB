<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Edition;
use App\Models\Assertion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $fillable =['lib','cour_id','edition_id','point'];

    public function cour():BelongsTo{
        return $this->belongsTo(Cour::class);
    }
    public function edition():BelongsTo{
        return $this->belongsTo(Edition::class);
    }

    public function assertions():HasMany{
        return $this->hasMany(Assertion::class);
    }
}
