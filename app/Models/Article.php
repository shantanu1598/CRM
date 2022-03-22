<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable =[

    'applicationID',
    'description',
    'type',
    'contactMobileNo',
    'firstName',
    'lastName',
    'contactEmailId',
    'probCategory',
    'probType',
    'probItem',
    'probSummary',
    'submitted_at'
    ];
    
}
