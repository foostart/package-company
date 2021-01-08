<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('company');
        Schema::create('company', function (Blueprint $table) {
            $table->id('company_id');
            $table->integer('user_id')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_full_name')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('slideshow_id')->nullable();
            $table->string('company_name', 500)->nullable();
            $table->string('company_slug', 500)->nullable();
            $table->string('company_overview', 1000)->nullable();
            $table->longtext('company_description')->nullable();
            $table->string('company_image')->nullable();
            $table->string('company_files', 10000)->nullable();
            $table->tinyinteger('company_status')->nullable();
            $table->text('cache_comments')->nullable();
            $table->text('cache_other_company')->nullable();
            $table->integer('cache_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
