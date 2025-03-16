<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'master', 'student'])->default('student');
            $table->string('student_id')->nullable()->unique(); // کد دانشجویی
            $table->string('master_id')->nullable()->unique(); // کد استادی
            $table->boolean('approved')->default(0); // تایید شدن حساب اساتید توسط ادمین
        });
    }

    public function down() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'student_id', 'master_id', 'approved']);
        });
    }
};
