<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'qty',
        'bookshelf_id',
        'created_at',
        'updated_at',
    ];

    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }

    public static function export()
    {
        $books = Book::all();
        $books_filter = [];

        $no = 1;
        for ($i = 0; $i < $books->count(); $i++) {
            $books_filter[$i]['No'] = $no++;
            $books_filter[$i]['Judul'] = $books[$i]->title;
            $books_filter[$i]['Penulis'] = $books[$i]->author;
            $books_filter[$i]['Tahun'] = $books[$i]->year;
            $books_filter[$i]['Penerbit'] = $books[$i]->publisher;
        }

        return $books_filter;
    }

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
