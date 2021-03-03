<?php

use Illuminate\Database\Seeder;
use App\Models\Email;
class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Email::class, 15)->create();
    }
}
