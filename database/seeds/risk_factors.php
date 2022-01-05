<?php

use Illuminate\Database\Seeder;

class risk_factors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $risk_factors = ['DM+','HTN+','IHD+','CVA+','CKD+','CLD+',
            'ASTHMA+','COPD+','Active Smoker','EPILEPSY+','Non-Smoker',
            'Ex-Smoker'
        ];
        foreach ($risk_factors as $risk_factor) {
            \App\Risk_factor::create(['risk_factors'=>$risk_factor]);
        }
    }
}
