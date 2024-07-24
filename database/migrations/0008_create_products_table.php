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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('description');
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->string('price');
            $table->string('old_price')->nullable();
            $table->decimal('rating', 10, 2)->default(0);
            $table->timestamps();
            $table->foreign('seller_id')
            ->references('id')
            ->on('sellers')
            ->nullOnDelete();
            $table->foreign('admin_id')
            ->references('id')
            ->on('admins')
            ->nullOnDelete();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('set null');



        });

    }
/*



  $table->foreignId('seller_id')->constrained()->onDelete('cascade');
            $table->foreignId('admin_id')->constrained()->onDelete('cascade');

*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
