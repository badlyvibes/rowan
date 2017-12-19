<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoadCommonNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(file_get_contents(database_path('seeds/dumps/common_names.sql')));

        $now = date('Y-m-d H:i:s');
        DB::table('common_names')->update(['created_at' => $now, 'updated_at' => $now]);
    }
}
