<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    // Mutator

    public function setTitleAttriblute($value) {

        $this->attributes['title'] = $value;
        $this->attribute['slug']   = Str::slug($value);

    }
}
