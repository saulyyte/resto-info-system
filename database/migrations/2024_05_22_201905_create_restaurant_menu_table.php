<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('restaurant_menu', function (Blueprint $table) {
$table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
$table->foreignId('menu_id')->constrained()->onDelete('cascade');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('restaurant_menu');
}
};
