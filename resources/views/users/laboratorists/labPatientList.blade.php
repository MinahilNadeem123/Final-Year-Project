
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Laboratorist/List Test</title>
</head>
<body style="background-color: rgb(224, 224, 224);">
@include('users.laboratorists.laboratoristsHeader')
<!-- Start content -->
<div class="content">
    <!-- end row -->
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <div class="card mb-3">

                <div class="card-header">
                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                        <div class="modal-dialog">

                        </div>
                    </div>
                    <h3>Lab Patients:</h3>
                </div>
                <!-- end card-header -->

                <div class="card-body">

                    @if(session()->has('error2'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error2')}}</p>
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{session()->get('error')}}</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        @if(session()->has('success'))
                            <div class="alert alert-light alert-elevate" role="alert">
                                <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                                <div class="alert-text">
                                    {{session()->get('success')}}
                                </div>
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width:100px">Patient Name</th>
                                <th style="width:100px">Doctor Name</th>
                                <th style="width:100px">Test List</th>
                                <th style="width:100px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datum)
                                <tr>
                                    <td>{{$datum->patient['first_name']}}</td>
                                    <td>{{$datum->doctor['first_name']}} {{$datum->doctor['last_name']}}
                                        <input name="doc_id" value=" {{$datum->doctor['id']}} " hidden>    </td>

                                    <td>
                                        <ul>
                                        @if($datum->cbc != null)
                                           <li> {{$datum->cbc}}</li>
                                        @endif
                                        @if($datum->hb != null)
                                            <li>{{$datum->hb}}</li>
                                        @endif
                                        @if($datum->esr != null)
                                            <li>{{$datum->esr}}</li>
                                        @endif
                                        @if($datum->ptinr != null)
                                            <li>{{$datum->ptinr}}</li>
                                        @endif
                                        @if($datum->aptt != null)
                                            <li>{{$datum->aptt}}</li>
                                        @endif
                                        @if($datum->btct != null)
                                            <li>{{$datum->btct}}</li>
                                        @endif
                                        @if($datum->blood_grouping != null)
                                            <li>{{$datum->blood_grouping}}</li>
                                        @endif
                                        @if($datum->cross_match != null)
                                            <li>{{$datum->cross_match}}</li>
                                        @endif
                                        @if($datum->bsr != null)
                                            <li>{{$datum->bsr}}</li>
                                        @endif
                                        @if($datum->bsf != null)
                                            <li>{{$datum->bsf}}</li>
                                        @endif
                                        @if($datum->rfts != null)
                                            <li>{{$datum->rfts}}</li>
                                        @endif
                                        @if($datum->urea != null)
                                            <li>{{$datum->urea}}</li>
                                        @endif
                                        @if($datum->creatinine != null)
                                            <li>{{$datum->creatinine}}</li>
                                        @endif
                                        @if($datum->uric_acid != null)
                                            <li>{{$datum->uric_acid}}</li>
                                        @endif
                                        @if($datum->lipid_profile != null)
                                            <li>{{$datum->lipid_profile}}</li>
                                        @endif
                                        @if($datum->lfts != null)
                                            <li>{{$datum->lfts}}</li>
                                        @endif
                                        @if($datum->split_bilirubin != null)
                                            <li>{{$datum->split_bilirubin}}</li>
                                        @endif
                                        @if($datum->alt != null)
                                            <li>{{$datum->alt}}</li>
                                        @endif
                                        @if($datum->alk != null)
                                            <li>{{$datum->alk}}</li>
                                        @endif
                                        @if($datum->albumin != null)
                                            <li>{{$datum->albumin}}</li>
                                        @endif
                                        @if($datum->total_protein != null)
                                            <li>{{$datum->total_protein}}</li>
                                        @endif
                                        @if($datum->electrolytes_nak != null)
                                            <li>{{$datum->electrolytes_nak}}</li>
                                        @endif
                                        @if($datum->na != null)
                                            <li>{{$datum->na}}</li>
                                        @endif
                                        @if($datum->k != null)
                                            <li>{{$datum->k}}</li>
                                        @endif
                                        @if($datum->ca != null)
                                            <li>{{$datum->ca}}</li>
                                        @endif
                                        @if($datum->amylase != null)
                                            <li>{{$datum->amylase}}</li>
                                        @endif
                                        @if($datum->hbsag != null)
                                            <li>{{$datum->hbsag}}</li>
                                        @endif
                                        @if($datum->anti_hcv != null)
                                            <li>{{$datum->anti_hcv}}</li>
                                        @endif
                                        @if($datum->anti_hiv != null)
                                            <li>{{$datum->anti_hiv}}</li>
                                        @endif
                                        @if($datum->mpict != null)
                                            <li>{{$datum->mpict}}</li>
                                        @endif
                                        @if($datum->vdrl != null)
                                            <li>{{$datum->vdrl}}</li>
                                        @endif
                                        @if($datum->donor_screening_ict != null)
                                            <li>{{$datum->donor_screening_ict}}</li>
                                        @endif
                                        @if($datum->ra_factor_ql != null)
                                            <li>{{$datum->ra_factor_ql}}</li>
                                        @endif
                                        @if($datum->aso != null)
                                            <li>{{$datum->aso}}</li>
                                        @endif
                                        @if($datum->crp != null)
                                            <li>{{$datum->crp}}</li>
                                        @endif
                                        @if($datum->typhidot_ict != null)
                                            <li>{{$datum->typhidot_ict}}</li>
                                        @endif
                                        @if($datum->widal != null)
                                            <li>{{$datum->widal}}</li>
                                        @endif
                                        @if($datum->trop_t != null)
                                            <li>{{$datum->trop_t}}</li>
                                        @endif
                                        @if($datum->hba1c != null)
                                            <li>{{$datum->hba1c}}</li>
                                        @endif
                                        @if($datum->urine_ce != null)
                                            <li>{{$datum->urine_ce}}</li>
                                        @endif
                                        @if($datum->upt != null)
                                            <li>{{$datum->upt}}</li>
                                        @endif
                                        @if($datum->semen != null)
                                            <li>{{$datum->semen}}</li>
                                        @endif
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{"uploadReports/".$datum['id']}}" class="btn btn-primary btn-sm">Upload Report</a><br>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
                <!-- end card-body -->

            </div>
            <!-- end card -->

        </div>
        <!-- end col -->

    </div>
</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</body>
</html>







