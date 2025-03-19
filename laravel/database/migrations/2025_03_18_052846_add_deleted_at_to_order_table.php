<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('order', function (Blueprint $table) {
            // $table->softDeletes();
            if (!Schema::hasColumn('order', 'deleted_at')) {
                $table->timestamp('deleted_at')->nullable();
            }
    
        });
    }

    public function down(): void
    {
        Schema::table('order', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
