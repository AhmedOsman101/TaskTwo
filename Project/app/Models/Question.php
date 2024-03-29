<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model {
    use HasFactory;
    protected $fillable = ["question", "answer", "event_id"];
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
