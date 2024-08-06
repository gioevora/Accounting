<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number')->nullable();
            $table->string('profile_color');
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('phone_country')->nullable();
            $table->string('phone_area')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_country')->nullable();
            $table->string('mobile_area')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('dd_country')->nullable();
            $table->string('dd_area')->nullable();
            $table->string('dd_number')->nullable();
            $table->string('fax_country')->nullable();
            $table->string('fax_area')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('website')->nullable();
            $table->string('brn')->nullable();
            $table->text('notes')->nullable();
            $table->string('bank_acc_name')->nullable();
            $table->string('bank_acc_num')->nullable();
            $table->string('details')->nullable();
            $table->string('tax_id_num')->nullable();
            $table->string('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
