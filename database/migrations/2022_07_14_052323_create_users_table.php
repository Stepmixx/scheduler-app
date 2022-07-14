<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('identification');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(1);
            $table->timestamps();
        });

        $user = new User();
        $user->name = 'Georgelys';
        $user->lastname = 'Marcano';
        $user->identification = 'V28492648';
        $user->email = 'master@email.com';
        $user->password = Hash::make('123456');
        $user->role_id = 2;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
