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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('faculty_id')->references('id')->on('faculties')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('major_id')->references('id')->on('majors')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('organization_details', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('student_details', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('majors', function (Blueprint $table) {
            $table->foreignId('faculty_id')->references('id')->on('faculties')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('role_permissions', function (Blueprint $table) {
            $table->foreignId('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('permission_id')->references('id')->on('permissions')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('event_user_roles', function (Blueprint $table) {
            $table->foreignId('event_user_id')->references('id')->on('event_users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->foreignId('registration_id')->references('id')->on('registrations')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('registration_answers', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('message_attachments', function (Blueprint $table) {
            $table->foreignId('message_id')->references('id')->on('messages')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('messages', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('invitations', function (Blueprint $table) {
            $table->foreignId('target_user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('message_id')->references('id')->on('messages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_division_id')->references('id')->on('event_divisions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('event_timelines', function (Blueprint $table) {
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('event_users', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('event_divisions', function (Blueprint $table) {
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('event_division_users', function (Blueprint $table) {
            $table->foreignId('event_user_id')->references('id')->on('event_users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_division_id')->references('id')->on('event_divisions')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('registrations', function (Blueprint $table) {
            $table->foreignId('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('registration_event_divisions', function (Blueprint $table) {
            $table->foreignId('registration_id')->references('id')->on('registrations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_division_id')->references('id')->on('event_divisions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
