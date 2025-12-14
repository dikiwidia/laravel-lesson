<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "todo";

    protected $guarded = ["id"];

    protected function casts(): array
    {
        return [
            "ckecked_flag" => "boolean",
        ];
    }
}
