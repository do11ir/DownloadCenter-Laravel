<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    // فیلدهایی که می‌توانند به صورت mass assignment مقداردهی شوند
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'permission',
        'category',
        'course_id',
        'study_field_id',
        'user_id',
    ];

    // رابطه با جدول courses (درس)
    public function course()
    {
        return $this->belongsTo(subject::class);
    }

    // رابطه با جدول study_fields (رشته)
    public function studyField()
    {
        return $this->belongsTo(studyField::class);
    }

    // رابطه با کاربر آپلودکننده (user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

