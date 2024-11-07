<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToStatisticalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('statisticals', function (Blueprint $table) {
            $table->timestamps(); // Thêm các cột created_at và updated_at
        });
    }
    
    public function down() {
        Schema::table('statisticals', function (Blueprint $table) {
            $table->dropTimestamps(); // Xóa các cột created_at và updated_at
        });
    }
    
    
}
