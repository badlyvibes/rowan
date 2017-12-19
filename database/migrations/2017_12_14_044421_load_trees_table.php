<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoadTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Excel::filter('chunk')->load(database_path('seeds/csv/trees.csv'))->chunk(250, function ($results) {
            foreach ($results as $row) {
                DB::table('trees')->insert([
                    'name' => $row->taxon_name,
                    'genus' => mb_split(' ', $row->taxon_name)[0],
                    'species' => mb_split(' ', $row->taxon_name)[1]
                ]);
            }
        });

        $now = date('Y-m-d H:i:s');
        DB::table('trees')->update(['created_at' => $now, 'updated_at' => $now]);
    }
}
