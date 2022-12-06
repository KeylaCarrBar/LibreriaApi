<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $Fillable = [
        "id",
        "isbn",
        "title",
        "description",
        "publish_date",
        "category_id",
        "editorial_id"
    ];

    public $timestamp = false;



    public function authors(){
        return $this->belongsToMany(
            Author::class, //Table relationship
            'authors_books', //table pivote a intersection
            'books_id', //From
            'authors_id' // To
        );
    }


}
