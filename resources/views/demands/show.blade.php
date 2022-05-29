@extends('layouts.app')

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

@section('title')
    Home
@endsection


@section('contents')
    <!-- Main Content -->
    <div id="content">

        @include('components.navigation')

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="print-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <img src=" {{ asset('/img/Coat.svg.png') }}" align="center" width="100px">
                                            </div>
                                        </div>
                                        <h1 class="text-success" style="text-align: center;">ABUJA MUNICIPAL AREA COUNCIL</h1>
                                        <h2 class="text-danger"style="text-align: center;">ENVIRONMENTAL SERVICE DEPARTMENT</h2>
                                        <p class="text-primary"style="text-align: center;"><b>ANNEX OFFICE:</b> Suite 306, 3rd Floor Kano House Ralph Shodeinde street Behind Ministry of finance C.B.D <br>
                                        Tel: 09085191698, 08096773456, 08181292148, 08058882172 </p>
                                                     
                                    </div>                                         
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-top:60px;">
                                        <div class="row-border" style="color:#000 !important;border: 1px solid #000 !important;">
                                            <table class="table" style="color:#000 !important;">

                                                <tr style="border-bottom-style: 1px solid #000 !important;">
                                                    <td style="font-family:sans-serif"><b>NAME OF PREMISES : </b> </td>
                                                    <td style="color:blue;"><b>{{ $fumigations->name_of_premises }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b>ADDRESS OF PREMISES:</b>  </td>
                                                    <td style="color:blue;"><b>{{ $fumigations->address_of_premises }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b>TYPE OF PREMISES :</b></td>
                                                    <td style="color:blue;"><b>1002</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b> DATE OF NOTICE :</b></td>
                                                    <td style="color:blue;"><b>{{ date('Y-m-d') }}</b></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row-border px-4 py-2" style="color:#000 !important; border: 1px solid #000 !important;">
                                            <strong style="font-family:sans-serif; font-size:22;">THE MANAGEMENT OF ABUJA MUNICIPAL AREA COUNCIL, (Environmental Services Department),</strong>
                                          <b>
                                         Fumigation/Pest Contol Unit wishes to notify you in accordance with the provision of section 4,5,6.and7 of Environmental Bye-law of Abuja Municipal Area Council (2012) on Pest Control and Provision of No. 4 Section 4 of Environmental Health Offences Bye-Law of Abuja Municipal Area Council (2012) that you are requested to Pay a charge of................................................................................................................................................................................................................................................................................................................................................................
                                            </b>
                                            <b>
                                             as an offence under this bye-law 1_Provision of Section 5<input type="checkbox" name="checkbox"> 2_Provision of Section 7<input type="checkbox" name="checkbox"> 3_Provision of Section 6<input type="checkbox" name="checkbox"> 4_Provision of No 4 Section 4<input type="checkbox" name="checkbox"> of Environmental Offences Bye-law Please note that the charges should be paid to AMAC revenue account on remita platform The Identification code for this revenue is 053 Fumigation and Landscaping.
                                            </b>

                                            <hr>
                                            <b>
                                                You are to make necessary payment within 14 days of this notice and present evidence to the Council Revenue Division and obtain official receipt

                                            </b>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row-border px-4 py-2" style="color:#000 !important;border: 1px solid #000 !important;">
                                            <b class="text-danger">NOTE</b>: <b>Payment to any location other than the prescribed account shall be treated as invalid. Your early response will be highły appreciated
                                            </b>
                                        </div>
                                    </div>
                                </div>


                                  <div class="row">
                                    <div class="col-md-12" style="margin-top:60px;">
                                        <div class="row-border" style="color:#000 !important;border: 1px solid #000 !important;">
                                            <table class="table" style="color:#000 !important;">

                                                <tr style="border-bottom-style: 1px solid #000 !important;">
                                                    <td style="font-family:sans-serif"><b>NAME OF DESPATCH : </b> </td>
                                                    <td style="color:blue;"><b></b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b>NAME OF OFFICER:</b>  </td>
                                                    <td style="color:blue;"><b></b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b>MODE OF COLLECTION :</b></td>
                                                    <td style="color:blue;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b> NAME OF RECEIVER $ SIGN:</b></td>
                                                    <td style="color:blue;"><b></b></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b> OFFICER:</b></td>
                                                    <td style="font-size: 10; color:blue;"><p>1.NO EVIDENCE OF FUMIGATION <input type="checkbox" name="checkbox"> 2. OBSTRUCTION OF EHO <input type="checkbox" name="checkbox"> 3. USE OF UNACCREDITED VENDOR<input type="checkbox" name="checkbox"> 4. ENVIRONMENTAL OFFENCE<input type="checkbox" name="checkbox"></p></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:sans-serif"><b> QUARTER:</b></td>
                                                    <td style="color:blue;"><p>1ST<input type="checkbox" name="checkbox"> 2ND <input type="checkbox" name="checkbox"> 3RD<input type="checkbox" name="checkbox"> 4TH<input type="checkbox" name="checkbox"></p></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                        <div class="row">
                                            <div class="col-6" style="color:#000 !important;">
                                                <br/>
                                                    {{-- <p><img src="/img/htr.png"></p> <br /> --}}
                                                    <br/><br/><br/><br/>
                                                    <p>SIGNED FOR <br>
                                                    HEAD OF OPERATION AMAC <br>
                                                    ENVIRONMENTAL SERVICES DEPARTMENT
                                                     </p>
                                                   
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary btn-sm col-md-12" onClick="window.print()">
                                        <i class="fa fa-print"></i> Print or <i class="fa fa-file-pdf"></i> Download PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
 
 @section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
    <script src="{{asset('js/print.min.js')}}"></script>
    <script type="text/javascript">
        function printDiv() {
            $(".print-wrapper").printElement({
                leaveOpen:true,
                printMode:'popup',
                printBodyOptions:{
                    styleToAdd:'1px solid #000 !important;',
                    classNameToAdd : 'row-border'
                }
            });
        }
    </script>


@section('scripts')
    
@endsection




