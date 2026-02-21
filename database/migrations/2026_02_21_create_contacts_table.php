<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 255);
            $table->string('phone', 50);
            $table->text('message');

            // delivery status
            $table->string('status', 20)->default('pending'); // pending|sent|failed
            $table->timestamp('sent_at')->nullable();
            $table->text('error_message')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
