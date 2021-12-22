<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContactsAddFkContactReasons extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('site_contacts', function (Blueprint $table) {
      $table->unsignedBigInteger('contact_reason_id');
    });

    DB::statement('update site_contacts set contact_reason_id = reason');

    Schema::table('site_contacts', function (Blueprint $table) {
      $table->foreign('contact_reason_id')->references('id')->on('contact_reasons');
      $table->dropColumn('reason');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('site_contacts', function (Blueprint $table) {
      $table->integer('reason');
      $table->dropForeign('site_contacts_contact_reason_id_foreign');
    });

    DB::statement('update site_contacts set reason = contact_reason_id');

    Schema::table('site_contacts', function (Blueprint $table) {
      $table->dropColumn('contact_reason_id');
    });
  }
}
