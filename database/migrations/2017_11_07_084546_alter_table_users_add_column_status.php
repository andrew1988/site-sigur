<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsersAddColumnStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasColumn('users', 'status')) {
        Schema::table('users', function (Blueprint $table) {
          $table->integer('status')->default(0)->comment("0 - inactiv | 1 inactiv");
        });
      }
      if (!Schema::hasColumn('users','checkAdmin', 'type')) {
            Schema::table('users', function (Blueprint $table) {
              $table->integer('type')->default(0)->comment("user type: 0 - user normal,1 - moderator, 2 - admin");
            });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      if (Schema::hasColumn('users', 'status')) {
          Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
          });
      }
      if (Schema::hasColumn('users', 'type')) {
            Schema::table('users', function (Blueprint $table) {
              $table->dropColumn('type');
            });
      }

    }
}
