<?php

use Illuminate\Database\Seeder;

class diagnosis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $diagnoses = [['diagnosis_name'=>'Asthma - First Visit',
                       'investigations'=>'PFTs
                        Exercise challenge Test
                        Peak Expiratory Flow Rate by Peak Flow Meter
                        ABGs
                        CXR',
                       'treatment'=>'First Visit:
                        Establish Diagnosis
                        Rule out DDx
                        Identify allergins incuding occupational asthma
                        Assess Disease Severity (for step of Rx)
                        Patient Education
                        Control of Environmental factors and comorbid conditions
                        Written Asthma Plan',
                        'url1'=>'www',
                        'url2'=>'www',
            ],
            ['diagnosis_name'=>'T2DM - First Visit',
                'investigations'=>'HBA1c
                Fasting Lipid Profile
                RFTs
                Urine C/E
                ECG
                CXR',
                ],
            ['diagnosis_name'=>'Asthma - Follow Up',],
            ['diagnosis_name'=>'T2DM-Follow Up',],
            ['diagnosis_name'=>'T1DM-First Visit',],
            ['diagnosis_name'=>'TIDM-Follow Up'],
            ['diagnosis_name'=>'Migraine'],
            ['diagnosis_name'=>'TTH (Tension Type Headache)'],
            ['diagnosis_name'=>'Vitamin D Deficiency'],
            ['diagnosis_name'=>'IDA - Iron Deficiency Anemia'],
            ['diagnosis_name'=>'H.Pylori Treatment Regimen'],
            ['diagnosis_name'=>'Tuberculosis Therapy'],
            ['diagnosis_name'=>'Erectile Dysfunction'],
            ['diagnosis_name'=>'Premature Ejaculation'],
            ['diagnosis_name'=>'HCV - Treatment-Naive Genotype 3 Without Cirrhosis',
            'assessment'=>' Who Is NOT Eligible for Simplified Treatment
Patients who have any of the following characteristics:
    Prior hepatitis C treatment
    Cirrhosis (see simplified treatment for treatment-naive adults with compensated cirrhosis)
    HIV or HBsAg positive
    Current pregnancy
    Known or suspected hepatocellular carcinoma
    Prior liver transplantation
--------------------------------------
 Who Is Eligible for Simplified Treatment
Adults with chronic hepatitis C (any genotype) who
do not have cirrhosis
and
have not previously received hepatitis C treatment
--------------------------------------
 Pretreatment Assessment*

    Calculate FIB-4 score.
    Cirrhosis assessment: Liver biopsy is not required. For the purpose of this guidance, a patient is presumed to have cirrhosis if they have a FIB-4 score >3.25 or any of the following findings from a previously performed test.
        Transient elastography indicating cirrhosis (eg, FibroScan stiffness >12.5 kPa)
        Noninvasive serologic tests above proprietary cutoffs indicating cirrhosis (eg, FibroSure, Enhanced Liver Fibrosis Test, etc)
        Clinical evidence of cirrhosis (eg, liver nodularity and/or splenomegaly on imaging, platelet count <150,000/mm3, etc)
        Prior liver biopsy showing cirrhosis
---------------------------------------',
                'investigations'=>' Pretreatment laboratory testing:

    Within 6 months of initiating treatment:
        Complete blood count (CBC)
        LFTs with Serum Albumin
        Calculated glomerular filtration rate (eGFR)
    Any time prior to starting antiviral therapy:
        Quantitative HCV RNA (HCV viral load)
        HIV antigen/antibody test
        Hepatitis B surface antigen
    Before initiating antiviral therapy:
        Serum pregnancy testing and counseling about pregnancy risks of HCV medication should be offered to women of childbearing age.',
                'treatment'=>'First Line:

1. Daily fixed-dose combination of glecaprevir (300 mg)/pibrentasvir (120 mg) ….. For 8 weeks……...to be taken with food

2. Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg)……….For  	12 weeks',
                'notes'=>' On-Treatment Monitoring

    Inform patients taking diabetes medication of the potential for symptomatic hypoglycemia. Monitoring for hypoglycemia is recommended.
    Inform patients taking warfarin of the potential for changes in their anticoagulation status. Monitoring INR for subtherapeutic anticoagulation is recommended.
    No laboratory monitoring is required for other patients.
    An in-person or telehealth/phone visit may be scheduled, if needed, for patient support, assessment of symptoms, and/or new medications.

Post-Treatment Assessment of Cure (SVR)

    Assessment of quantitative HCV RNA and a hepatic function panel are recommended 12 weeks or later following completion of therapy to confirm HCV RNA is undetectable (virologic cure) and transaminase normalization.
    Assessment for other causes of liver disease is recommended for patients with elevated transaminase levels after achieving SVR.

Follow-Up After Achieving Virologic Cure (SVR)

    No liver-related follow-up is recommended for noncirrhotic patients who achieve SVR.',
                'url1'=>'https://www.hcvguidelines.org/treatment-naive/gt3/no-cirrhosis',
                'url2'=>'https://www.hcvguidelines.org/treatment-naive/simplified-treatment',
                'url3'=>'https://www.hep-druginteractions.org/checker',],
            ['diagnosis_name'=>'HCV - Treatment-Naive Genotype 3 With Compensated Cirrhosis',
                'assessment'=>' Who Is NOT Eligible for Simplified Treatment

Patients who have any of the following characteristics:

 >>>>>> Current or prior episode of decompensated cirrhosis, defined as
                 Child-Turcotte-Pugh (CTP) score ≥7 (ascites, hepatic encephalopathy, total bilirubin >2.0 mg/dL, albumin ≤3.5 g/dL, or INR ≥1.7)

    Prior hepatitis C treatment
    End-stage renal disease (ie, eGFR <30 mL/min/m2) (see Patients with Renal Impairment section)
    HIV or HBsAg positive
    Current pregnancy
    Known or suspected hepatocellular carcinoma
    Prior liver transplantation

----------------------------------
 Who Is Eligible for Simplified Treatment

Adults with chronic hepatitis C (any genotype) who have compensated cirrhosis (Child-Pugh A) and have not previously received hepatitis C treatment

Liver biopsy is not required. For the purpose of this guidance, a patient is presumed to have cirrhosis if they have a FIB-4 score >3.25 or any of the following findings from a previously performed test.

    Transient elastography indicating cirrhosis (eg, FibroScan stiffness >12.5 kPa)
    Noninvasive serologic tests above proprietary cutoffs indicating cirrhosis (eg, FibroSure, Enhanced Liver Fibrosis Test, etc)
    Clinical evidence of cirrhosis (eg, liver nodularity and/or splenomegaly on imaging, platelet count <150,000/mm3, etc)
    Prior liver biopsy showing cirrhosis',
                'examination'=>' Pretreatment Assessment*

    Calculate FIB-4 score.
    Calculate CTP score: Patients with a CTP score ≥7 (ie, CTP B or C) have decompensated cirrhosis and this simplified treatment approach is not recommended.
    Ultrasound of the liver (conducted within the prior 6 months): Evaluate to exclude HCC and subclinical ascites.
    Medication reconciliation: Record current medications, including over-the-counter drugs and herbal/dietary supplements.
    Potential drug-drug interaction assessment: Drug-drug interactions can be assessed using the AASLD/IDSA guidance or the University of Liverpool drug interaction checker.
    Education: Educate the patient about proper administration of medications, adherence, and prevention of reinfection.',
                'investigations'=>' Pretreatment laboratory testing:

    Within 3 months of initiating treatment:
        Complete blood count (CBC)
        International normalized ratio (INR)
        Hepatic function panel (ie, albumin, total and direct bilirubin, alanine aminotransferase [ALT], aspartate aminotransferase [AST])
        Calculated glomerular filtration rate (eGFR)
    Any time prior to starting antiviral therapy:
        Quantitative HCV RNA (HCV viral load)
        HIV antigen/antibody test
        Hepatitis B surface antigen
        HCV genotype (if treating with sofosbuvir/velpatasvir)
    Before initiating antiviral therapy:
        Serum pregnancy testing and counseling about pregnancy risks of HCV medication should be offered to women of childbearing age.',
                'treatment'=>'First Line:
1. Daily fixed-dose combination of glecaprevir (300 mg)/pibrentasvir (120 mg)….for 8 weeks
2. Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg) .. For 12 weeks (for patients without baseline NS5A RAS Y93H for velpatasvir)

Alternative:

1. Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg)
+
 weight-based ribavirin
for patients with baseline NS5A RAS Y93H for velpatasvir ……………………..	12 wees

2. Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg)/voxilaprevir (100 mg)
 for patients with baseline NS5A RAS Y93H for velpatasvir 	12 weeks',
                'url1'=>'N'],
            ['diagnosis_name'=>'HCV - Patients With Decompensated Cirrhosis',
                'assessment'=>'Eligibile :

Patients with HCV infection who have decompensated cirrhosis—moderate or severe hepatic impairment, ie, Child-Turcotte-Pugh (CTP) class B or class C',
                'treatment'=>'First Line: Ribavirin Eligible

Daily fixed-dose combination of
sofosbuvir (400 mg)/velpatasvir (100 mg)
+
 weight-based ribavirin ……. For 	12 weeks

Low initial dose of ribavirin (600 mg) is recommended for patients with CTP class C cirrhosis; increase as tolerated.
-----------------------
2nd line:  Ribavirin Ineligible

Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg)……… for  	24 weeks

------------------
Patients With Decompensated Cirrhosisa and Genotype 1-6 Infection in Whom Prior Sofosbuvir- or NS5A Inhibitor-Based Treatment Failed

 Daily fixed-dose combination of sofosbuvir (400 mg)/velpatasvir (100 mg)
+
 weight-based ribavirinc ………….. For 	24 weeks',
                'notes'=>'Ribavirin ineligibility:
Pregancy or, in women of childbearing potential, inability to practice adequate contraception. Men with spouses or sexual partners of childbearing potential also be excluded if they are unable to practice adequate contraception.

Significant systemic illnesses other than liver disease, including a history of congestive heart failure, cerebral vascular disease, renal failure (creatinine clearance less than 50 ml/min), and angina pectoris.

Patients with an abnormal stress test or carotid untrasound will not be enrolled into this study.

Pre-existing anemia (hematocrit less than 32%) or known history of hemolytic anemia.

Interferon or immunosuppressive therapy within the last 6 months.

Evidence of another form of liver disease in addition to viral hepatitis, such as autoimmune or alcoholic liver disease.

Active or recent (within one year) alcohol or drug abuse or psychiatric illness that is likely to interfere with compliance and requirements for safety monitoring during this study.',
                'url1'=>'https://www.hcvguidelines.org/unique-populations/decompensated-cirrhosis'],


        ];

        foreach ($diagnoses as $diagnosis) {

            \App\Diagnosis::create($diagnosis);

        }
    }
}
