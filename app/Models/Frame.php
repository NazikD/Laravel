<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frame extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'frames'; // данный атрибут указыватся по умолчанию при создании модени и миграции к ней, но лучше указать дополнительно
    protected $guarded = false;
}
