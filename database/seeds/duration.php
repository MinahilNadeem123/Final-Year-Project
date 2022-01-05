<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class duration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $durations = ['تین دن', 'پانچ دن','ایک ہفتہ','دس دن','دو ہفتے','تین ہفتے','دو ماہ','تین ماہ','چار ماہ',
            ' پانچ ماہ','چھے ماہ','لگاتار جاری','اگلے معائینے  تک جاری',];
        foreach ($durations as $duration) {
            \App\Duration::create(['duration'=>$duration]);
    }
}
}
