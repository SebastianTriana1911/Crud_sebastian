<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model{
    use HasFactory;

    protected $table = "candidates";

    protected $guarded = [];

    public function users(){
        return $this ->belongsTo(User::class,"user_id", "id");
    }

}
