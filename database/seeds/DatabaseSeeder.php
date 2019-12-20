<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\elector::class, 200)->create();
        factory(\App\Models\candidate::class, 200)->create();

        factory(\App\Models\elector::class, 50)->create()
             ->each(function (\App\Models\elector $e) {
                 factory(\App\Models\computer::class, 3)->create(['elector_id' => $e->id]);
             });

    }
}
