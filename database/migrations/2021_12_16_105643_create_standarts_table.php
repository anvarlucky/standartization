<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standarts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->tinyText('description');
            $table->unsignedBigInteger('doc_type_id')->nullable();
            $table->foreign('doc_type_id')->references('id')->on('doc_types');
            $table->string('developed_organization')->nullable(); //ishlab chiqqan tashilot
            $table->string('organization')->nullable(); //kiritgan tashilot
            $table->string('approved')->nullable(); //tasdiqlangan
            $table->string('entry_into_force')->nullable(); //kuchga kirishi
            $table->string('previous_edit')->nullable(); //oldingi tahrir
            $table->string('status')->nullable(); //holati
            $table->string('foreign_analogs')->nullable(); //horijiy analogalar
            $table->integer('pages')->nullable(); //sahifalar soni
            $table->string('which_instead_standart')->nullable(); //qaysi standart o'rniga

            $table->mediumText('scope'); //oblast premenenie
            $table->string('photo_scope')->nullable(); //oblast premenenie rasm
            $table->mediumText('normative_references'); //normativnie ssilki
            $table->string('photo_normative_references')->nullable(); //normativnie ssilki rasm
            $table->mediumText('classifications'); //Klassi fikatsiya
            $table->string('photo_classifications')->nullable(); //Klassificatsiya rasm
            $table->mediumText('technical_requirement'); // texnicheskie trebovanie
            $table->string('photo_technical_requirement')->nullable(); //texnicheskie trebovanie rasm
            $table->mediumText('safety_requirement'); //trebovanie bezopasnosti
            $table->string('photo_safety_requirement')->nullable(); //trebovanie bezopasnosti rasm
            $table->mediumText('acceptance_rule'); //pravila priemki
            $table->string('photo_acceptance_rules')->nullable(); //pravila priemki rasm
            $table->mediumText('control_method'); //metodi kontrolya
            $table->string('photo_control_method')->nullable(); //metodi kontrolya rasm
            $table->mediumText('appendix_a_reference'); //prilojenie A spravochnoe
            $table->string('photo_appendix_a_reference')->nullable(); // prilojeni a spravochnoe rasm
            $table->mediumText('bibliography'); //Bibliografiya
            $table->string('photo_bibliography')->nullable(); //bibliografiya rasm
            $table->mediumText('bibliography_data'); //bibligoraficehskie dannie
            $table->string('photo_bibliography_data')->nullable(); //bibliograficheskie dannie rasm
            $table->string('doc_standart')->nullable();
            $table->string('pdf_standart')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standarts');
    }
}
