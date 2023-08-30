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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('activity_type', 50)->nullable();
            $table->datetime('due_date')->nullable();
            $table->time('duration')->nullable();
            $table->string('importance', 50)->nullable();
            $table->boolean('is_done')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('application_form', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('is_required')->nullable();
            $table->string('display_type')->nullable();
            $table->string('type')->nullable();
            $table->string('field_category')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('attachment', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->nullable();
            $table->string('resume')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('latest_degree')->nullable();
            $table->string('latest_university')->nullable();
            $table->string('current_organization')->nullable();
            $table->string('current_department')->nullable();
            $table->string('current_position')->nullable();
            $table->string('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });
        

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('email')->nullable();
            $table->string('picture')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('description')->nullable();
            $table->json('custom_fields')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('custom_fields', function (Blueprint $table) {
            $table->id();
            $table->string('entity_type', 50);
            $table->unsignedBigInteger('entity_id');
            $table->string('field_name');
            $table->text('field_value')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->string('job_title')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('creator')->nullable();
            $table->string('address')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('status')->default('Active');
            $table->string('is_published')->nullable();
            $table->boolean('is_remote')->nullable();
            $table->text('skill')->nullable();
            $table->text('experience')->nullable();
            $table->text('education')->nullable();
            $table->text('budget')->nullable();
            $table->text('bid_close')->nullable();
            $table->text('deadline')->nullable();
            $table->timestamps();
            $table->string('career_page_url')->nullable();
            $table->boolean('is_pinned_in_career_page')->nullable();
        });

        // Create matches table
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner');
            $table->unsignedBigInteger('organization')->nullable();
            $table->unsignedBigInteger('job')->nullable();
            $table->unsignedBigInteger('candidate')->nullable();
            $table->unsignedBigInteger('creator')->nullable();
            $table->string('stage_name')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('hired_at')->useCurrent()->onUpdate('current_timestamp');
            $table->timestamp('submitted_at')->nullable(); // Change the default value
            $table->timestamp('interview_at')->nullable();
            $table->timestamp('offer_at')->nullable();
            $table->timestamp('dropped_at')->nullable();
            $table->timestamp('created_at_editable')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });
        

        // Create matchstage table
        Schema::create('matchstage', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('rank')->nullable();
        });

        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('info')->nullable();
            $table->unsignedBigInteger('creator')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        // Create organization table
        Schema::create('organization', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); 
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_public')->nullable();
            $table->boolean('is_visible')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->onUpdate('current_timestamp');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
        Schema::dropIfExists('addresses');
        Schema::dropIfExists('application_form');
        Schema::dropIfExists('attachment');
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('matchstage');
        Schema::dropIfExists('matches');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('organization');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('products');
        Schema::dropIfExists('users');

    }
};
