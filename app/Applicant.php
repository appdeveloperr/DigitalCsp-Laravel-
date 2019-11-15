<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //Table Name
    protected $table   = 'applicant_users';
    //Primary Key
    public $primaryKey = 'id';

    //timestamp
    public $timestamps = true;
}
