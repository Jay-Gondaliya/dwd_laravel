<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardCoordinatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_coordinator', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('state_id')->unsigned()->index()->nullable();
            $table->bigInteger('lga_id')->unsigned()->index()->nullable();
            $table->string('fname', 100)->nullable();
            $table->string('mname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->bigInteger('age')->unsigned()->index()->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('dob');
            $table->string('mobile', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 200)->nullable();
            $table->enum('is_mobile', ['0', '1'])->nullable()->default('0');
            $table->enum('is_email', ['0', '1'])->nullable()->default('0');
            $table->enum('is_delete', ['0', '1'])->nullable()->default('0');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ward_coordinator');
    }
}