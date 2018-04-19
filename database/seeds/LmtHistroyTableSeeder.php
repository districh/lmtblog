<?php

use Illuminate\Database\Seeder;
use App\LmtHistroy;

class LmtHistroyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lmthistorys = factory(LmtHistroy::class)->times(1)->make();
        LmtHistroy::insert($lmthistorys->makeVisible([''])->toArray());


        $lmthistory = LmtHistroy::find(1);
        $lmthistory->created_at = '1524101400';
        $lmthistory->updated_at = time();
        $lmthistory->exist = '1';
        $lmthistory->save();
    }
}
