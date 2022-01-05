<?php

use Illuminate\Database\Seeder;

class followup_instruction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $followupInstructions = ['ایک ہفتے بعد دوبارہ دکھائیں',
            'ایک ماہ بعد دوبارہ دکھائیں','ٹیسٹ کروا کر دوبارہ دکھائیں',
            'تین ماہ بعد دوبارہ دکھائیں','___________________ بعد  دوبارہ دکھائیں'
        ];
        foreach ($followupInstructions as $followupInstruction) {
            \App\Followup_instruction::create(['followup_instruction'=>$followupInstruction]);
        }
    }
}
