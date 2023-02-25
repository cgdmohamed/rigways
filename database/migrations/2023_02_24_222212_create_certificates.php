<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            // relations
            $table->integer('project_id');
            $table->integer('rig_id');
            $table->integer('user_id');
            // certificates
            $table->string('serial_no')->unique();
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->string('cert_status');
            $table->string('certificate_file');
            // operation
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
