<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges';
    protected $primaryKey = 'collid';

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid');
    }
}
