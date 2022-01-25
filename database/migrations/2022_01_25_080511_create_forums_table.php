<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();   //게시글 번호

            $table->string('title');    // 제목
            $table->text('contents')->nullable();   // 글 내용

            $table->unsignedBigInteger('user_id')->comment('foreign'); //user의 acc를 외래키로 지정.

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');


            $table->timestamps();   // 글 생성/삭제시간.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forums', function(Blueprint $table){     // 외래키 삭제 코드.
            $table->dropForeign('forums_user_id_foreign');
        });

        Schema::dropIfExists('forums');
    }
}
