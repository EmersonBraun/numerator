
<?php

use Illuminate\Database\Seeder;
use App\Models\Numeration;

class NumerationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 100;
        factory(Numeration::class, $amount)->create();
    }
}