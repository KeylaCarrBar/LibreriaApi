<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = "authors";

    protected $Fillable = [
        "id",
        "name",
        "first_surname",
        "second_surname"

    ];

    public $timestamp = false;
    public function books(){
        return $this->belongsToMany(
            Book::class, //Table relationship
            'authors_books', //table pivote a intersection
            'authors_id', //From
            'books_id' // To
        );
    }


}
