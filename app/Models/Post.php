<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title', 
        'excerpt',
        'body'
    ]; // polja koja korisnik moze sam da popuni

    protected $guarded=[
        'id'
    ]; // polja koja korisnik ne moze sam da popunjava
}
