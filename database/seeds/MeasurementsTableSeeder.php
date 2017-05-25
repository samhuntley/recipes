<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MeasurementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $created_at = Carbon::now()->format('Y-m-d H:i:s');

      DB::table('measurements')->insert([
        'name' => 'oz',
        'type' => 'weight',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'lb',
        'type' => 'weight',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'mg',
        'type' => 'weight',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'g',
        'type' => 'weight',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'kg',
        'type' => 'weight',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);


      DB::table('measurements')->insert([
        'name' => 'tsp',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'tbsp',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'fl oz',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'gill',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'cup',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'pint',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'quart',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'gallon',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'ml',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'l',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'dl',
        'type' => 'volume',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);


      /*** Length ***/
      DB::table('measurements')->insert([
        'name' => 'mm',
        'type' => 'length',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'cm',
        'type' => 'length',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'm',
        'type' => 'length',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'in',
        'type' => 'length',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => 'ft',
        'type' => 'length',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);

      /*** Temperature ***/
      DB::table('measurements')->insert([
        'name' => '°F',
        'type' => 'temperature',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);
      DB::table('measurements')->insert([
        'name' => '°C',
        'type' => 'temperature',
        'created_at' => $created_at,
        'updated_at' => $created_at,
      ]);


    }
}
