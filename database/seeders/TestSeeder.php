<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Employe::insert(
	[
        'name' => 'Alice',
        'age' => '26',
        'child' => '2',
        'ccar' => ' ',
        'salary' => '6000',

        ]);

      	Employe::insert(

    [

        'name' => 'Bob',
        'age' => '52',
        'child' => '0',
        'ccar' => ' ',
        'salary' => '4000',

        ]);

       	Employe::insert(

    [

        'name' => 'Charlie',
        'age' => '36',
        'child' => '3',
        'ccar' => 'on',
        'salary' => '5000',
        ]);
    }
}
