<?php

require __DIR__ . '/../bootstrap.php';

$capsule->schema()->create('posts', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->integer('user_id')->unsigned();

    $table->integer('topic_id')->unsigned();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

    $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
});