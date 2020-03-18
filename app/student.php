<?php


//THIS IS ELOQUINT. THE MODEL OF THE TABLE STUDENTS IN MYSQL
namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
	//will not count timestamp (createdAt)
	public $timestamps = false;
	//this is what is fillable`2
    protected $fillable = ['firstName','lastName', 'Email', 'phoneNumber'];
}
