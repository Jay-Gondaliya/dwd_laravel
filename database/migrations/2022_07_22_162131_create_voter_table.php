<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100)->nullable();
            $table->string('mname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('dob');
            $table->bigInteger('age')->unsigned()->index()->nullable();
            $table->string('mobile', 15)->nullable();
            $table->enum('is_mobile', ['0', '1'])->nullable()->default('0');
            $table->string('email', 100)->nullable();
            $table->string('state', 15)->nullable();
            $table->string('lga', 15)->nullable();
            $table->string('ward', 15)->nullable();
            $table->string('cell', 15)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('fb', 255)->nullable();
            $table->string('insta', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->enum('is_voter', ['0', '1'])->nullable()->default('0');
            $table->enum('is_pvc', ['0', '1'])->nullable()->default('0');
            $table->bigInteger('question_1')->unsigned()->index()->nullable();
            $table->bigInteger('question_2')->unsigned()->index()->nullable();
            $table->bigInteger('question_3')->unsigned()->index()->nullable();
            $table->bigInteger('question_4')->unsigned()->index()->nullable();
            $table->bigInteger('question_5')->unsigned()->index()->nullable();
            $table->bigInteger('question_6')->unsigned()->index()->nullable();
            $table->bigInteger('question_7')->unsigned()->index()->nullable();
            $table->bigInteger('question_8')->unsigned()->index()->nullable();
            $table->bigInteger('question_9')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('voter');
    }
}
