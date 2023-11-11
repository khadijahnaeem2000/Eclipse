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
        Schema::create('credentails', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('attach_tags')->nullable();
            $table->string('attach_specializations')->nullable();
            $table->string('attach_sccommodation_services')->nullable();
            $table->string('deactivate_associated_service')->nullable();
            $table->string('reset_provider_priority')->nullable();
            $table->string('hold_all_assignment_invitations')->nullable();
            $table->string('lenient')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentails');
    }
};
