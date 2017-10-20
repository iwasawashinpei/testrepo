<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('days');
            $table->integer('area');
            $table->string('column');
            $table->string('No');
            $table->integer('aorb');
            $table->string('circle',255);
            $table->string('url',255)->nullable();
            $table->string('creater',128)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('pixiv',255)->nullable();
            $table->string('item1',255)->nullable();
            $table->string('item2',255)->nullable();
            $table->string('item3',255)->nullable();
            $table->string('item4',255)->nullable();
            $table->string('item5',255)->nullable();
            $table->string('item6',255)->nullable();
            $table->string('item7',255)->nullable();
            $table->string('item8',255)->nullable();
            $table->string('item9',255)->nullable();
            $table->string('item10',255)->nullable();
            $table->string('item_count1',255)->nullable();
            $table->string('item_count2',255)->nullable();
            $table->string('item_count3',255)->nullable();
            $table->string('item_count4',255)->nullable();
            $table->string('item_count5',255)->nullable();
            $table->string('item_count6',255)->nullable();
            $table->string('item_count7',255)->nullable();
            $table->string('item_count8',255)->nullable();
            $table->string('item_count9',255)->nullable();
            $table->string('item_count10',255)->nullable();
            $table->string('buy_member1',255)->nullable();
            $table->string('buy_member2',255)->nullable();
            $table->string('buy_member3',255)->nullable();
            $table->string('buy_member4',255)->nullable();
            $table->string('buy_member5',255)->nullable();
            $table->string('buy_member6',255)->nullable();
            $table->string('buy_member7',255)->nullable();
            $table->string('buy_member8',255)->nullable();
            $table->string('buy_member9',255)->nullable();
            $table->string('buy_member10',255)->nullable();
            $table->string('note',4096)->nullable();
            $table->boolean('delflg')->nullable();
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
        Schema::drop('items');
    }
}
