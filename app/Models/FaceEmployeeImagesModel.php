<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FaceEmployeeImagesModel extends Model
{
    use HasFactory;

    protected $table = 'face_employee_images';

    protected $fillable = [
        'employee_id',
        'image_url',
        'image_index',
        'status',
        'created_at',
        'created_user',
        'updated_at',
        'updated_user',
    ];

    public function selectImages($condition = null)
    {
        $images = DB::table($this->table)
        ->join('employees', $this->table.'.employee_id', 'employees.id')
        ->select('employees.last_name', 'employees.first_name', 'employees.id', $this->table.'.image_url')
        ->where($this->table.'.status', 1);

        return $images;
    }

    public function getImages($condition = null)
    {
        return $this->selectImages($condition)->get();
    }

    public function saveAttendance($data = null)
    {
        if ($data == null) return;


    }
}
