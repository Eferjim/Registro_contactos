<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactosMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('contratar')->nullable();
            $table->boolean('practicas')->nullable();
            $table->boolean('fct')->nullable();
            $table->boolean('formacion_d')->nullable();
            $table->boolean('dam')->nullable();
            $table->boolean('daw')->nullable();
            $table->boolean('asir')->nullable();
            $table->boolean('ifo')->nullable();
            $table->integer('fase')->nullable();
            $table->string('descripcion')->nullable();
            
            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->unsignedBigInteger('id_medio')->nullable();

            $table->foreign('id_empresa')
                ->references('id')->on('empresas')
                ->onDelete('set null');
            $table->foreign('id_medio')
                ->references('id')->on('medios')
                ->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
