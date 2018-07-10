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
        Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(UserTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(WalletTableSeeder::class);
        $this->call(MoneyTableSeeder::class);


//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
