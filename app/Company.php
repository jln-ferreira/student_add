<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	// link to a table
	protected $table = 'companies';
	//will not count timestamp (createdAt)
	public $timestamps = false;
	//this is what is fillable`2
    protected $fillable = ['name', 'address', 'phone', 'sector'];

    // RELATIONSHIP
    public function students()
    {
    	//one Company has many Customer/Students
    	// Gonna seach his own id on TD student
    	//collun company_id 
        return $this->hasMany(student::class, 'company_id');
    }
}
