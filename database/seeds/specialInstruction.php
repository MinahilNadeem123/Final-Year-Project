<?php

use Illuminate\Database\Seeder;

class specialInstruction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $specialInstructions = ['کھانے کے ساتھ', 'کھانے سے پہلے',
            'کھانے سے آدھا گھنٹہ پہلے','کھانے کے بعد', 'کھانے کے ساتھ یا بغیر'
            ,'روٹا ہیلر کے ذریعے','دو ہفتے بعد  شروع کریں','درد کی صورت میں'
            ,'فکس  ٹائم / مقررہ وقت پر','زبان کے نیچے  رکھیں','حسب ضرورت ',
            '______________','ہر تیسرے دن ','لگاتار جاری','پہلے کی طرح جاری ',
            'روٹا ہیلر / فلو کے  زریعے','متاثرہ  جگہ پر لگائیں ','خالی پیٹ',
            'رات سونے سے پہلے'];
        foreach ($specialInstructions as $specialInstruction) {
            \App\Special_instruction::create(['special_instruction'=>$specialInstruction]);
        }
    }
}
