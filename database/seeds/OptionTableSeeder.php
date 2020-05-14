
<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('options') as $option) {
            $option['created_at'] = date('Y-m-d H:i:s');
            Option::create($option);
        }
    }
}