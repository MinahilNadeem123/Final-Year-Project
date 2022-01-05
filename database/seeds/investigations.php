<?php

use Illuminate\Database\Seeder;

class investigations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investigations = [
            ['disease' => 'DM Screening', 'i1' => 'شوگر کی پیچیدگیوں کی  تشخیص کے لیے سالانہ سکریننگ ٹیسٹ
Creatinine
Urine ACR یا   Urine C/E
Lipid Profile
ECG
Comprehensive Eye Examination آنکھوں کے سپیشلسٹ سے آنکہ اور پردے کا  معائنہ
HBA1C تین ماہ کی شوگر کا ٹیسٹ  (ہر 3 سے 6 ماہ بعد )',
                'i5'=>'CBC',],
            [
                'disease'=>'Covid-19 Panel','i1'=>'Nasopharyngeal Swab for COVID-19 PCR
---------------
CBC
LFTs
RFTs
BSR
HRCT Chest/
Digital CXR PA
-------------
CRP
D-Dimers
LDH
Ferritin',            ],
            [
                'disease'=>'Baseline General','i1'=>'CBC
LFTs
RFTs
Serum Na, K
BSR
Urine R/E
12 lead ECG
Digital CXR PA',
            ],
            ['disease'=>'RA Panel','i1'=>'RA Factor Quantitative
Anti-CCP
ESR
CRP'],[
    'disease'=>'Nasopharyngeal Swab for COVID-19 PCR','i1'=>'Nasopharyngeal Swab for COVID-19 PCR'
            ],[
                'disease'=>'Glomerulonephritis','i1'=>'ANA
Anti-dsDNA
HBsAg
Anti-HCV
Anti-HIV
C3, C4 complement levels
ANCA (PR3,MPO)
Anti-GBM autoantibodies
Serum free light chains and serum immunofixation
Kidney Biopsy'
            ],['disease'=>'NSTE-ACS','i1'=>'BSR X STAT
Serial ECGs x 1 Hourly'],['disease'=>'DM Short tests','i1'=>'Creatinine
Urine C/E
Lipid Profile
ECG
Comprehensive Eye Examination
HBA1C'],
            ['disease'=>'CBC+PS+Retics','i1'=>'CBC with Peripheral Blood Smear and Reticulocyte Count',
                'i2'=>'CBC with Peripheral Blood Smear and Reticulocyte Count'],
            ['disease'=>'Triphasic CT','i1'=>'Triphasic CT Abdomen with Contrast'],
            ['disease'=>'Dilated Eye Exam','i1'=>'Comprehensive Eye Examination آنکھوں کے سپیشلسٹ سے آنکہ اور پردے کا  معائنہ'],
            ['disease'=>'OGD with Biopsy','i1'=>'Upper GI Endoscopy with Biopsy for H.Pylori'],
            ['disease'=>'Sputum for AFB X3','i1'=>'Sputum for AFB for 3 days']



        ];

        foreach ($investigations as $investigation) {

            \App\Investigation::create($investigation);

        }
    }
}
