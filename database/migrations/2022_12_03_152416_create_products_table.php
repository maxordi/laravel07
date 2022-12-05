return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->string('category_id', 255)->nullable(false);
            $table->string('price', 255)->nullable(false);
            $table->string('img', 255)->nullable(false);
            $table->string('status', 255)->nullable(false);
            $table->string('description', 255)->nullable(false);
            $table->timestamps();
        });
    }
//

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
