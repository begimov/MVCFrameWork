<?php

require __DIR__ . '/../bootstrap.php';

$capsule->schema()->create('users', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->string('email')->unique();

});