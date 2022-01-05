<?php

use Illuminate\Database\Seeder;

class general_instruction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generalInstructions = ['ہدایات کے مطابق خوراک کا پرہیز',
            ' ہدایات کے مطابق ورزش',' تمباکو نوشی (سگریٹ / حقہ) سے پرہیز'
            ,'Please Admit in Male Medical Ward through Emergency',
            'Please Admit in Female Medical Ward through Emergency',
            'PLEASE ADMIT IN EMERGENCY',
            'Needs Admission','ہدایات کے مطابق پاؤں کا خاص خیال رکھیں',
            'REFERRED TO DHQ HOSPITAL EMERGENCY FOR ADMISSION',
            'Admission Advised, Refused by Patient/Attendants',
            'REFERRED TO DHQ HOSPITAL',
            'بلڈ پریشر کا ریکارڈ بنا کر لائیں'
        ];
        foreach ($generalInstructions as $generalInstruction) {
            \App\GeneralInstruction::create(['general_instruction'=>$generalInstruction]);
        }
    }
}
