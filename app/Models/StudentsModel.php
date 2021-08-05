<?php
namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model{
    
    //protected $db;
    protected $table = 'studentsform';
    protected $allowedFields = ['name', 'dob', 'doj', 'email', 'mobile','address'];
    protected $primaryKey = 'id';
    protected $createdField = 'created_at';
   	protected $updatedField = 'updated_at';
}
