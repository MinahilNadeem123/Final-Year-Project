<?php

use Illuminate\Database\Seeder;

class general_instruction_panel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalInstructionpanels = [
            ['disease' => 'DM Alone : Non-Smoker',
                'gi1' => '1- ہدایات کے مطابق خوراک کا پرہیز      2-ہدایات کے مطابق ورزش     3-شوگر کا ریکارڈ رکھیں',
            ],
            [
                'disease'=>'DM HTN : Non-Smoker','gi1'=>'1- ہدایات کے مطابق خوراک کا پرہیز      2-ہدایات کے مطابق ورزش     3-شوگراور بلڈ پریشر  کا ریکارڈ رکھیں',            ],
            [
                'disease'=>'Referred to DHQ for admission','gi2'=>'Referred to DHQ Hospital Bhakkar for Management and admission',
            ],
            ['disease'=>'DM Alone : Smoker','gi1'=>'1- ہدایات کے مطابق خوراک کا پرہیز      2-ہدایات کے مطابق ورزش     3-شوگر کا ریکارڈ رکھیں
4-  تمباکو نوشی (سگریٹ / حقہ) سے پرہیز'],[
                'disease'=>'DM HTN : Smoker','gi1'=>'1- ہدایات کے مطابق خوراک کا پرہیز      2-ہدایات کے مطابق ورزش     3-شوگراور بلڈ پریشر  کا ریکارڈ رکھیں
4-  تمباکو نوشی (سگریٹ / حقہ) سے پرہیز'
            ],[
                'disease'=>'Stop Smoking','gi1'=>'  تمباکو نوشی (سگریٹ / حقہ) سے پرہیز'
            ],['disease'=>'APD Food to Avoid','gi1'=>'ان چیزوں سے پرہیز کریں : تیز لال مرچ یا کالی مرچ کا استعمال ، تیز پتی والی چائے ، کافی ، چاکلیٹ ، سوڈے والی بوتلیں ، تلی ہوئی چیزیں ، فاسٹ فوڈ (پیزا ، برگر ، وغیرہ )، ٹماٹر ، زیادہ چکنائی والی غذا'],
            ['disease'=>'HTN Alone- Non Smoker','gi1'=>'نمک کم استعمال کریں ، چکنائی والی  غذا کم استعمال کریں'],
            ['disease'=>'Home Quarantine','gi1'=>'گھر پر ایک الگ کمرے میں قرانطینہ میں رہیں',
            ],


        ];

        foreach ($generalInstructionpanels as $generalInstructionpanel) {

            \App\GeneralInstructionPanel::create($generalInstructionpanel);

        }
    }
}
