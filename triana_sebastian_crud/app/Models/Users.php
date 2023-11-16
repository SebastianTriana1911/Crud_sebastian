<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidates;

class Users extends Model{
    use HasFactory;

    protected $table = "users";

    protected $guarded = [];

    public function role(){
        return $this->belongsTo(Roles::class, "role_id", "id");
    }

    public function candidate(){
        return $this->hasMany(Candidates::class, "user_id", "id");
    }
}
