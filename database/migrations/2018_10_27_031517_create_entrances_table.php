<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrances', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('detail')->nullable();
            $table->integer('status')->default(0);
            $table->double('lat', 15, 8);
            $table->double('lng', 15, 8);
            $table->string('img_url');
            $table->string('open_hour_1')->nullable();
            $table->string('open_hour_2')->nullable();
            $table->string('open_hour_3')->nullable();
            $table->string('open_hour_4')->nullable();
            $table->string('open_hour_5')->nullable();
            $table->string('open_hour_6')->nullable();
            $table->string('open_hour_7')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrances');
    }
}
