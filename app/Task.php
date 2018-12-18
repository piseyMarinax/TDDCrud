<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function link(){
        return "tasks/{$this->id}";
    }
}
