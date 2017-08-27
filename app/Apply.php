<?php

namespace tcm;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillabel = ['fname', 'mname', 'surname', 'county', 'address', 'phone', 'grade', 'course'];
}
