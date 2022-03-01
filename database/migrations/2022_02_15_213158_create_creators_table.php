<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('stage_name');
            $table->string('distributor_name')->nullable();
            $table->string('year_career_onset');
            $table->string('target_amount');
            $table->string('method_funding');
            $table->string('content_name');
            $table->string('name_slug');
            $table->string('type_funding');
            $table->string('royalty_avenues')->nullable();
            $table->string('id_card')->nullable();
            $table->string('current_payout')->nullable();
            $table->string('content_others')->nullable();
            $table->string('content_artwork');
            $table->string('content_link')->nullable();
            $table->string('status');
            $table->string('asset_id')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('creators');
    }
}
