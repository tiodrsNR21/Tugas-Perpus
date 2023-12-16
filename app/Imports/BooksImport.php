<?php
namespace App\Imports;
use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class BooksImport implements WithHeadingRow,ToModel
{
 public function model(array $row)
 {
 return new Book([
 'title' => $row['title'],
 'author' => $row['author'],
 'year' => $row['year'],
 'publisher' => $row['publisher'],
 'city' => $row['city'],
 'qty' => $row['qty'],
 'bookshelf_id' => $row['bookshelf_id'],
 ]);
 }
}
