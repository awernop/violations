<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    public function user(): BelongsTo{
        return $this->belongTo(User::class);
    }

    public function status(): BelongsTo{
        return $this->belongTo(Status::class);
    }
}
