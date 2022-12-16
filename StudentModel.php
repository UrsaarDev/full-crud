<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;
class StudentModel extends Model
{
    protected $fillable = [
        'first_name','last_name', 'address'
    ];
}
 
?>
