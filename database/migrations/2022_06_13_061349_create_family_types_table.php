<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
        DB::table('family_types')->insert([
            "title"=>"Joint family"
        ]);
        DB::table('family_types')->insert([
            "title"=>"Nuclear family"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_types');
    }
}
