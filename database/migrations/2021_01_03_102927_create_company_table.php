<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Foostart\Category\Helpers\FoostartMigration;

class CreateCompanyTable extends FoostartMigration
{
    public function __construct() {
        $this->table = 'company';
        $this->prefix_column = 'company_';
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists($this->table);
        Schema::create($this->table, function (Blueprint $table) {

            $table->increments($this->prefix_column . 'id')->comment('Primary key');

            // Relation
            $table->integer('category_id')->comment('Category ID');

            // Other attributes
            $table->string($this->prefix_column . 'name', 255)->comment('Company name');
            $table->string($this->prefix_column . 'slug', 255)->comment('Company slug');
            $table->string($this->prefix_column . 'website', 255)->nullable()->comment('Company website');
            $table->string($this->prefix_column . 'tax_code', 255)->nullable()->comment('Company tax code');
            $table->string($this->prefix_column . 'address', 500)->comment('Company address');

            $table->string($this->prefix_column . 'image', 255)->nullable()->comment('Company image');
            $table->text($this->prefix_column . 'description')->nullable()->comment('Company description');

            //Set common columns
            $table->integer('version')->unsigned()->default('1')->comment('Versioning');
            $this->setCommonColumns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
