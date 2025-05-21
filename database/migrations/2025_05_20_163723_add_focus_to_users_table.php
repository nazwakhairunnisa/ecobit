<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('focus')->nullable(); // tambahkan kolom focus
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('focus'); // untuk rollback
        });
    }

        $user->update([
        'focus' => 'Hemat Energi',
        'focus_selected' => true,
    ]);

};
