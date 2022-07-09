<?php
$SiNi_page_id = "Login";
$SiNi_admin_id = "Shopping";
?>
@include ('includes.top')
<title>SiNi Software | User Buy Software</title>

<!-- Load the client component. -->
<script src='https://js.braintreegateway.com/web/3.85.3/js/client.min.js'></script>

<!-- Load the 3D Secure component. -->
<script src='https://js.braintreegateway.com/web/3.85.3/js/three-d-secure.min.js'></script>

<!-- Load the Hosted Fields component. -->
<script src='https://js.braintreegateway.com/web/3.85.3/js/hosted-fields.min.js'></script>


<style>
.jumbotron_dash{background: url("/images/Users_Dashboard.jpg") no-repeat center left /cover;}

</style>

</head>
<body>
@include ('includes.nav')

<div class="jumbotron_dash d-flex align-items-end nopadding">
    <div class="container-full">
        <div class="row" style="padding-left: 190px;">
            <div class="view-header" style="padding-left: 8px;">
                <h1-o>Buy SiNi Software</h1-o> <h2-g> &nbsp; Get your new plugins<br></h2-g>
                <h5-g>Subscribe to SiNi products by filling out the order form below.</h5-g>
            </div>
        </div>
    </div>
</div>

<div class="container-full" style="padding-top: 10px;">
    <div class="wrapper_user">
        <nav class="sidebar_user d-none d-xl-block d-lg-block">
            @include ('includes.user_nav')
        </nav>
        <div class="content_user" style="padding-left: 8px;">
            <div class="d-block d-md-block d-sm-block d-lg-none">
                @include ('includes.user_nav_small')
            </div>
            <!------ START PAGE ----->
            <div class="row">
                <div class="col-lg-12">
                    <table class="table borderless">
                        <tr>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_AllAccess.png" class="img-fluid" alt="AllAccess Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_IgNite.png" class="img-fluid" alt="IgNite Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_ProxSi.png" class="img-fluid" alt="ProxSi Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_SiClone.png" class="img-fluid" alt="SiClone Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Disperse.png" class="img-fluid" alt="Disperse Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Scatter.png" class="img-fluid" alt="Scatter Plugin"></center></td>
                            <td style="border: none; padding-top: 0px;"><center><img src="/images/products/Badge_Forensic.png" class="img-fluid" alt="Forensic Plugin"></center></td>
                        </tr>
                        <tr style="padding-top: 0px; padding-bottom: 0px;">
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_AA}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_IG}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_PR}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_SI}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_DE}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Total_Lic_SC}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Licences:</span> <span style="color: #ffffff; font-size: 11pt;">&#8734;</span></center></td>
                        </tr>
                        <tr>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_AA}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_IG}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_PR}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_SI}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_DE}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">{{$Free_Lic_SC}}</span></center></td>
                            <td style="border: none; padding-top: 0px;"><center><span style="color: #949ba2; font-size: 11pt;">Available:</span> <span style="color: #ffffff; font-size: 11pt;">&#8734;</span></center></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-12">
                    <h4><center>Bulk discounts will be applied automatically based on quantity of licences. 5% 5-10, 10% 11-15+. &nbsp; &nbsp; &nbsp; &nbsp;For enterprise licensing, please contact SiNi Sales, sales@sinisoftware.com</center></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                <li>Sorry, there was a problem with your payment.  Please view payment form below.</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card animated fadeIn wow" data-wow-delay=".1s">
                        <h4 class="card-header" style="color: #f7af3e;"><i class="fas fa-puzzle-piece"></i></span> &nbsp; Specify the number of licences</h4>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 nopadding">
                                    <table class="table borderless">
                                        <tr style="padding-top: 4px; padding-bottom: 4px;">
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">All Access Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($AA_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="AA_Month" id="AA_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">All Access Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($AA_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="AA_Year" id="AA_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">IgNite Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($IG_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="IG_Month" id="IG_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">IgNite Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($IG_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="IG_Year" id="IG_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiClone Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($SI_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="SI_Month" id="SI_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiClone Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($SI_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="SI_Year" id="SI_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Disperse Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($DE_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="DE_Month" id="DE_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Disperse Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($DE_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="DE_Year" id="DE_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="width: 16%; border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">ProxSi Monthly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($PR_Price->price_month, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="PR_Month" id="PR_Month" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false">
                                            </td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">ProxSi Yearly Subscription</td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">£{{number_format($PR_Price->price_year, 2, '.', '')}}</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="number" min="0" name="PR_Year" id="PR_Year" size="3" maxlength="3" class="form-control-sm ord" style="width: 120px;" aria-invalid="false"></td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="DiscountShow"></p></td>
                                            <td style="border: none; padding-top: 0px;">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Total" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">SiNi Discount Code:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input type="text" min="0" name="Discount" id="Discount" value="" size="90" maxlength="90" class="form-control-sm ord" style="width: 230px;" aria-invalid="false">
                                            </td>
                                            <td style="border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="Discount1"></p><button id="DiscNumberButton" class="btn btn-sm btn-sini pad4" onclick="GetDiscount()">Apply Discount Code</button></td>
                                            <td style="border: none; padding-top: 0px;"></td>


                                            <td style="text-align: right; border: none; padding-top: 5px;">Discount Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="DiscountTotal" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>

                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><div class="Discount2" id="Discount2"></div></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total Discounted:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Total_Discount" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>
                                        @if($DoIChargeVat == 0)
                                            <tr>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: right; border: none; padding-top: 5px;"></td>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: left; border: none; padding-top: 0px;"></td>
                                                <td style="border: none; padding-top: 0px;"></td>
                                                <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                <td style="border: none; padding-top: 0px;">
                                                    <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                </td>
                                                <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                            </tr>
                                        @else
                                            @if($ThisUser->vat_number != NULL)
                                                <tr>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Your Vat Number:</td>
                                                    <td style="border: none; padding-top: 0px;"><input type="text" min="0" name="VatNumber" id="VatNumber" size="30" maxlength="30" class="form-control-sm ord nopadding" style="width: 230px; border: 1px solid #3a3c46; background-color: #3a3c46;" value="{{$ThisUser->vat_number}}" aria-invalid="false"></td>
                                                    <td style="text-align: left; border: none; padding-top: 0px;"></td>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                    <td style="border: none; padding-top: 0px;">
                                                        <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                    </td>
                                                    <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Your Vat Number:</td>
                                                    <td style="border: none; padding-top: 0px;"><input type="text" min="0" name="VatNumber" id="VatNumber" size="30" maxlength="30" class="form-control-sm ord nopadding" style="width: 230px;" value="" aria-invalid="false"></td>
                                                    <td style="text-align: left; border: none; padding-top: 0px;"><p class="d-inline-block" style="padding-top: 2px;" id="company"></p><button id="VatNumberButton" class="btn btn-sm btn-sini pad4" onclick="GetVat()">Validate Vat Number</button></td>
                                                    <td style="border: none; padding-top: 0px;"></td>
                                                    <td style="text-align: right; border: none; padding-top: 5px;">Vat:</td>
                                                    <td style="border: none; padding-top: 0px;">
                                                        <input style="background-color: #2f323b; text-align: right; width: 120px;" id="Vat" class="form-control-sm ord" style="width: 80px;" readonly="true" aria-invalid="false">
                                                    </td>
                                                    <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                                </tr>
                                            @endif
                                        @endif
                                        <tr>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"><div class="company2" id="company2"></div></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="border: none; padding-top: 0px;"></td>
                                            <td style="text-align: right; border: none; padding-top: 5px;">Total:</td>
                                            <td style="border: none; padding-top: 0px;">
                                                <input style="background-color: #2f323b; text-align: right; width: 120px;" id="VatTotal" class="form-control-sm ord" readonly="true" aria-invalid="false">
                                            </td>
                                            <td style="width: 3%; border: none; padding-top: 0px;"></td>
                                        </tr>
                                    </table>
                                    <h4><center>Vat number format would be your country code plus vat number with no spaces. For example United Kindom and your vat number - GB123456789</center></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 15px;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-left: 8px;">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#SiNi_Card" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <i class="fas fa-credit-card"></i> &nbsp; Buy Direct Credit Card
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none d-sm-block">
                                    Direct Credit Card
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#SiNi_PP" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <div class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                    <i class="fab fa-cc-paypal"></i> &nbsp; Buy Direct Paypal
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none d-sm-block">
                                    Direct Paypal
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="SiNi_Card">
                            <div class="card">
                                <div class="card-body" style="padding: 30px; min-height: 280px;">
                                    <div id="CC_ERROR" class="alert alert-danger" style="display: none;">
                                        <h4 id="CC_ERROR_MESSAGE">none</h4>
                                    </div>
                                    <form action="{{ url('/User/Buy/Purchase') }}" class="container-full" method="POST" id="payment-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>SiNi Software does not store any credit card information on our server.  We use a secure payment system call <a href="https://www.braintreepayments.com/" target="_blank">BrainTree</a> owned by paypal.</h4>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 20px;">
                                            <div class="col-xs-12">
                                                <button class="btn btn-warning" id="autofill">Autofill Customer Information</button>
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" class="form-control" id="email" value="{{$ThisUser->email}}" placeholder="you@example.com">
                                                    <span id="help-email" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-phone">Phone Number</label>
                                                    <input type="billing-phone" class="form-control" id="billing-phone" value="" placeholder="123-456-7890">
                                                    <span id="help-billing-phone" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-given-name">First Name</label>
                                                    <input type="billing-given-name" class="form-control" value="{{$ThisUser->first_name}}" id="billing-given-name" placeholder="First">
                                                    <span id="help-billing-given-name" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-surname">Last Name</label>
                                                    <input type="billing-surname" class="form-control" value="{{$ThisUser->last_name}}" id="billing-surname" placeholder="Last">
                                                    <span id="help-billing-surname" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="billing-street-address">Address</label>
                                                    <input type="billing-street-address" class="form-control" value="{{$ThisUser->address}}" id="billing-street-address" placeholder="123 Street">
                                                    <span id="help-billing-street-address" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-locality">City/Town</label>
                                                    <input type="billing-locality" class="form-control" value="{{$ThisUser->city}}" id="billing-locality" placeholder="City">
                                                    <span id="help-billing-locality" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-region">Region/State</label>
                                                    <input type="billing-region" class="form-control" id="billing-region" placeholder="State">
                                                    <span id="help-billing-region" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-postal-code">Postcode/Zip</label>
                                                    <input type="billing-postal-code" class="form-control" value="{{$ThisUser->zip}}" id="billing-postal-code" placeholder="12345">
                                                    <span id="help-billing-postal-code" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-country-code">Country</label>
                                                    <!--------
                                                    <input type="billing-country-code" class="form-control" value="{{$ThisUser->country}}" id="billing-country-code" placeholder="XX">
                                                    --------->
                                                    <select type="billing-country-code" id="billing-country-code" class="form-control" value="{{$ThisUser->country}}" name="country" id="country">
                                                        <option value=""> - Select Country - </option>
                                                        <option value="AF"<?=$ThisUser->country == 'AF' ? ' selected="selected"' : '';?>>Afghanistan</option>
                                                        <option value="AX"<?=$ThisUser->country == 'AX' ? ' selected="selected"' : '';?>>Aland Islands</option>
                                                        <option value="AL"<?=$ThisUser->country == 'AL' ? ' selected="selected"' : '';?>>Albania</option>
                                                        <option value="DZ"<?=$ThisUser->country == 'DZ' ? ' selected="selected"' : '';?>>Algeria</option>
                                                        <option value="AS"<?=$ThisUser->country == 'AS' ? ' selected="selected"' : '';?>>American Samoa</option>
                                                        <option value="AD"<?=$ThisUser->country == 'AD' ? ' selected="selected"' : '';?>>Andorra</option>
                                                        <option value="AO"<?=$ThisUser->country == 'AO' ? ' selected="selected"' : '';?>>Angola</option>
                                                        <option value="AI"<?=$ThisUser->country == 'AI' ? ' selected="selected"' : '';?>>Anguilla</option>
                                                        <option value="AQ"<?=$ThisUser->country == 'AQ' ? ' selected="selected"' : '';?>>Antarctica</option>
                                                        <option value="AG"<?=$ThisUser->country == 'AG' ? ' selected="selected"' : '';?>>Antigua and Barbuda</option>
                                                        <option value="AR"<?=$ThisUser->country == 'AR' ? ' selected="selected"' : '';?>>Argentina</option>
                                                        <option value="AM"<?=$ThisUser->country == 'AM' ? ' selected="selected"' : '';?>>Armenia</option>
                                                        <option value="AW"<?=$ThisUser->country == 'AW' ? ' selected="selected"' : '';?>>Aruba</option>
                                                        <option value="AU"<?=$ThisUser->country == 'AU' ? ' selected="selected"' : '';?>>Australia</option>
                                                        <option value="AT"<?=$ThisUser->country == 'AT' ? ' selected="selected"' : '';?>>Austria</option>
                                                        <option value="AZ"<?=$ThisUser->country == 'AZ' ? ' selected="selected"' : '';?>>Azerbaijan</option>
                                                        <option value="BS"<?=$ThisUser->country == 'BS' ? ' selected="selected"' : '';?>>Bahamas</option>
                                                        <option value="BH"<?=$ThisUser->country == 'BH' ? ' selected="selected"' : '';?>>Bahrain</option>
                                                        <option value="BD"<?=$ThisUser->country == 'BD' ? ' selected="selected"' : '';?>>Bangladesh</option>
                                                        <option value="BB"<?=$ThisUser->country == 'BB' ? ' selected="selected"' : '';?>>Barbados</option>
                                                        <option value="BY"<?=$ThisUser->country == 'BY' ? ' selected="selected"' : '';?>>Belarus</option>
                                                        <option value="BE"<?=$ThisUser->country == 'BE' ? ' selected="selected"' : '';?>>Belgium</option>
                                                        <option value="BZ"<?=$ThisUser->country == 'BZ' ? ' selected="selected"' : '';?>>Belize</option>
                                                        <option value="BJ"<?=$ThisUser->country == 'BJ' ? ' selected="selected"' : '';?>>Benin</option>
                                                        <option value="BM"<?=$ThisUser->country == 'BM' ? ' selected="selected"' : '';?>>Bermuda</option>
                                                        <option value="BT"<?=$ThisUser->country == 'BT' ? ' selected="selected"' : '';?>>Bhutan</option>
                                                        <option value="BO"<?=$ThisUser->country == 'BO' ? ' selected="selected"' : '';?>>Bolivia</option>
                                                        <option value="BA"<?=$ThisUser->country == 'BA' ? ' selected="selected"' : '';?>>Bosnia and Herzegovina</option>
                                                        <option value="BW"<?=$ThisUser->country == 'BW' ? ' selected="selected"' : '';?>>Botswana</option>
                                                        <option value="BV"<?=$ThisUser->country == 'BV' ? ' selected="selected"' : '';?>>Bouvet Island</option>
                                                        <option value="BR"<?=$ThisUser->country == 'BR' ? ' selected="selected"' : '';?>>Brazil</option>
                                                        <option value="VG"<?=$ThisUser->country == 'VG' ? ' selected="selected"' : '';?>>British Virgin Islands</option>
                                                        <option value="IO"<?=$ThisUser->country == 'IO' ? ' selected="selected"' : '';?>>British Indian Ocean Territory</option>
                                                        <option value="BN"<?=$ThisUser->country == 'BN' ? ' selected="selected"' : '';?>>Brunei Darussalam</option>
                                                        <option value="BG"<?=$ThisUser->country == 'BG' ? ' selected="selected"' : '';?>>Bulgaria</option>
                                                        <option value="BF"<?=$ThisUser->country == 'BF' ? ' selected="selected"' : '';?>>Burkina Faso</option>
                                                        <option value="BI"<?=$ThisUser->country == 'BI' ? ' selected="selected"' : '';?>>Burundi</option>
                                                        <option value="KH"<?=$ThisUser->country == 'KH' ? ' selected="selected"' : '';?>>Cambodia</option>
                                                        <option value="CM"<?=$ThisUser->country == 'CM' ? ' selected="selected"' : '';?>>Cameroon</option>
                                                        <option value="CA"<?=$ThisUser->country == 'CA' ? ' selected="selected"' : '';?>>Canada</option>
                                                        <option value="CV"<?=$ThisUser->country == 'CV' ? ' selected="selected"' : '';?>>Cape Verde</option>
                                                        <option value="CF"<?=$ThisUser->country == 'CF' ? ' selected="selected"' : '';?>>Central African Republic</option>
                                                        <option value="TD"<?=$ThisUser->country == 'TD' ? ' selected="selected"' : '';?>>Chad</option>
                                                        <option value="CL"<?=$ThisUser->country == 'CL' ? ' selected="selected"' : '';?>>Chile</option>
                                                        <option value="CN"<?=$ThisUser->country == 'CN' ? ' selected="selected"' : '';?>>China</option>
                                                        <option value="HK"<?=$ThisUser->country == 'HK' ? ' selected="selected"' : '';?>>Hong Kong, SAR China</option>
                                                        <option value="MO"<?=$ThisUser->country == 'MO' ? ' selected="selected"' : '';?>>Macao, SAR China</option>
                                                        <option value="CX"<?=$ThisUser->country == 'CX' ? ' selected="selected"' : '';?>>Christmas Island</option>
                                                        <option value="CC"<?=$ThisUser->country == 'CC' ? ' selected="selected"' : '';?>>Cocos (Keeling) Islands</option>
                                                        <option value="CO"<?=$ThisUser->country == 'CO' ? ' selected="selected"' : '';?>>Colombia</option>
                                                        <option value="KM"<?=$ThisUser->country == 'KM' ? ' selected="selected"' : '';?>>Comoros</option>
                                                        <option value="CG"<?=$ThisUser->country == 'CG' ? ' selected="selected"' : '';?>>Congo (Brazzaville)</option>
                                                        <option value="CD"<?=$ThisUser->country == 'CD' ? ' selected="selected"' : '';?>>Congo, (Kinshasa)</option>
                                                        <option value="CK"<?=$ThisUser->country == 'CK' ? ' selected="selected"' : '';?>>Cook Islands</option>
                                                        <option value="CR"<?=$ThisUser->country == 'CR' ? ' selected="selected"' : '';?>>Costa Rica</option>
                                                        <option value="CI"<?=$ThisUser->country == 'CI' ? ' selected="selected"' : '';?>>C&ocirc;te d'Ivoire</option>
                                                        <option value="HR"<?=$ThisUser->country == 'HR' ? ' selected="selected"' : '';?>>Croatia</option>
                                                        <option value="CU"<?=$ThisUser->country == 'CU' ? ' selected="selected"' : '';?>>Cuba</option>
                                                        <option value="CY"<?=$ThisUser->country == 'CY' ? ' selected="selected"' : '';?>>Cyprus</option>
                                                        <option value="CZ"<?=$ThisUser->country == 'CZ' ? ' selected="selected"' : '';?>>Czech Republic</option>
                                                        <option value="DK"<?=$ThisUser->country == 'DK' ? ' selected="selected"' : '';?>>Denmark</option>
                                                        <option value="DJ"<?=$ThisUser->country == 'DJ' ? ' selected="selected"' : '';?>>Djibouti</option>
                                                        <option value="DM"<?=$ThisUser->country == 'DM' ? ' selected="selected"' : '';?>>Dominica</option>
                                                        <option value="DO"<?=$ThisUser->country == 'DO' ? ' selected="selected"' : '';?>>Dominican Republic</option>
                                                        <option value="EC"<?=$ThisUser->country == 'EC' ? ' selected="selected"' : '';?>>Ecuador</option>
                                                        <option value="EG"<?=$ThisUser->country == 'EG' ? ' selected="selected"' : '';?>>Egypt</option>
                                                        <option value="SV"<?=$ThisUser->country == 'SV' ? ' selected="selected"' : '';?>>El Salvador</option>
                                                        <option value="GQ"<?=$ThisUser->country == 'GQ' ? ' selected="selected"' : '';?>>Equatorial Guinea</option>
                                                        <option value="ER"<?=$ThisUser->country == 'ER' ? ' selected="selected"' : '';?>>Eritrea</option>
                                                        <option value="EE"<?=$ThisUser->country == 'EE' ? ' selected="selected"' : '';?>>Estonia</option>
                                                        <option value="ET"<?=$ThisUser->country == 'ET' ? ' selected="selected"' : '';?>>Ethiopia</option>
                                                        <option value="FK"<?=$ThisUser->country == 'FK' ? ' selected="selected"' : '';?>>Falkland Islands (Malvinas)</option>
                                                        <option value="FO"<?=$ThisUser->country == 'FO' ? ' selected="selected"' : '';?>>Faroe Islands</option>
                                                        <option value="FJ"<?=$ThisUser->country == 'FJ' ? ' selected="selected"' : '';?>>Fiji</option>
                                                        <option value="FI"<?=$ThisUser->country == 'FI' ? ' selected="selected"' : '';?>>Finland</option>
                                                        <option value="FR"<?=$ThisUser->country == 'FR' ? ' selected="selected"' : '';?>>France</option>
                                                        <option value="GF"<?=$ThisUser->country == 'GF' ? ' selected="selected"' : '';?>>French Guiana</option>
                                                        <option value="PF"<?=$ThisUser->country == 'PF' ? ' selected="selected"' : '';?>>French Polynesia</option>
                                                        <option value="TF"<?=$ThisUser->country == 'TF' ? ' selected="selected"' : '';?>>French Southern Territories</option>
                                                        <option value="GA"<?=$ThisUser->country == 'GA' ? ' selected="selected"' : '';?>>Gabon</option>
                                                        <option value="GM"<?=$ThisUser->country == 'GM' ? ' selected="selected"' : '';?>>Gambia</option>
                                                        <option value="GE"<?=$ThisUser->country == 'GE' ? ' selected="selected"' : '';?>>Georgia</option>
                                                        <option value="DE"<?=$ThisUser->country == 'DE' ? ' selected="selected"' : '';?>>Germany</option>
                                                        <option value="GH"<?=$ThisUser->country == 'GH' ? ' selected="selected"' : '';?>>Ghana</option>
                                                        <option value="GI"<?=$ThisUser->country == 'GI' ? ' selected="selected"' : '';?>>Gibraltar</option>
                                                        <option value="GR"<?=$ThisUser->country == 'GR' ? ' selected="selected"' : '';?>>Greece</option>
                                                        <option value="GL"<?=$ThisUser->country == 'GL' ? ' selected="selected"' : '';?>>Greenland</option>
                                                        <option value="GD"<?=$ThisUser->country == 'GD' ? ' selected="selected"' : '';?>>Grenada</option>
                                                        <option value="GP"<?=$ThisUser->country == 'GP' ? ' selected="selected"' : '';?>>Guadeloupe</option>
                                                        <option value="GU"<?=$ThisUser->country == 'GU' ? ' selected="selected"' : '';?>>Guam</option>
                                                        <option value="GT"<?=$ThisUser->country == 'GT' ? ' selected="selected"' : '';?>>Guatemala</option>
                                                        <option value="GG"<?=$ThisUser->country == 'GG' ? ' selected="selected"' : '';?>>Guernsey</option>
                                                        <option value="GN"<?=$ThisUser->country == 'GN' ? ' selected="selected"' : '';?>>Guinea</option>
                                                        <option value="GW"<?=$ThisUser->country == 'GW' ? ' selected="selected"' : '';?>>Guinea-Bissau</option>
                                                        <option value="GY"<?=$ThisUser->country == 'GY' ? ' selected="selected"' : '';?>>Guyana</option>
                                                        <option value="HT"<?=$ThisUser->country == 'HT' ? ' selected="selected"' : '';?>>Haiti</option>
                                                        <option value="HM"<?=$ThisUser->country == 'HM' ? ' selected="selected"' : '';?>>Heard and Mcdonald Islands</option>
                                                        <option value="VA"<?=$ThisUser->country == 'VA' ? ' selected="selected"' : '';?>>Holy See (Vatican City State)</option>
                                                        <option value="HN"<?=$ThisUser->country == 'HN' ? ' selected="selected"' : '';?>>Honduras</option>
                                                        <option value="HU"<?=$ThisUser->country == 'HU' ? ' selected="selected"' : '';?>>Hungary</option>
                                                        <option value="IS"<?=$ThisUser->country == 'IS' ? ' selected="selected"' : '';?>>Iceland</option>
                                                        <option value="IN"<?=$ThisUser->country == 'IN' ? ' selected="selected"' : '';?>>India</option>
                                                        <option value="ID"<?=$ThisUser->country == 'ID' ? ' selected="selected"' : '';?>>Indonesia</option>
                                                        <option value="IR"<?=$ThisUser->country == 'IR' ? ' selected="selected"' : '';?>>Iran</option>
                                                        <option value="IQ"<?=$ThisUser->country == 'IQ' ? ' selected="selected"' : '';?>>Iraq</option>
                                                        <option value="IE"<?=$ThisUser->country == 'IE' ? ' selected="selected"' : '';?>>Ireland</option>
                                                        <option value="IM"<?=$ThisUser->country == 'IM' ? ' selected="selected"' : '';?>>Isle of Man TT</option>
                                                        <option value="IL"<?=$ThisUser->country == 'IL' ? ' selected="selected"' : '';?>>Israel</option>
                                                        <option value="IT"<?=$ThisUser->country == 'IT' ? ' selected="selected"' : '';?>>Italy</option>
                                                        <option value="JM"<?=$ThisUser->country == 'JM' ? ' selected="selected"' : '';?>>Jamaica</option>
                                                        <option value="JP"<?=$ThisUser->country == 'JP' ? ' selected="selected"' : '';?>>Japan</option>
                                                        <option value="JE"<?=$ThisUser->country == 'JE' ? ' selected="selected"' : '';?>>Jersey</option>
                                                        <option value="JO"<?=$ThisUser->country == 'JO' ? ' selected="selected"' : '';?>>Jordan</option>
                                                        <option value="KZ"<?=$ThisUser->country == 'KZ' ? ' selected="selected"' : '';?>>Kazakhstan</option>
                                                        <option value="KE"<?=$ThisUser->country == 'KE' ? ' selected="selected"' : '';?>>Kenya</option>
                                                        <option value="KI"<?=$ThisUser->country == 'KI' ? ' selected="selected"' : '';?>>Kiribati</option>
                                                        <option value="KP"<?=$ThisUser->country == 'KP' ? ' selected="selected"' : '';?>>Korea (North)</option>
                                                        <option value="KR"<?=$ThisUser->country == 'KR' ? ' selected="selected"' : '';?>>Korea (South)</option>
                                                        <option value="KW"<?=$ThisUser->country == 'KW' ? ' selected="selected"' : '';?>>Kuwait</option>
                                                        <option value="KG"<?=$ThisUser->country == 'KG' ? ' selected="selected"' : '';?>>Kyrgyzstan</option>
                                                        <option value="LA"<?=$ThisUser->country == 'LA' ? ' selected="selected"' : '';?>>Lao PDR</option>
                                                        <option value="LV"<?=$ThisUser->country == 'LV' ? ' selected="selected"' : '';?>>Latvia</option>
                                                        <option value="LB"<?=$ThisUser->country == 'LB' ? ' selected="selected"' : '';?>>Lebanon</option>
                                                        <option value="LS"<?=$ThisUser->country == 'LS' ? ' selected="selected"' : '';?>>Lesotho</option>
                                                        <option value="LR"<?=$ThisUser->country == 'LR' ? ' selected="selected"' : '';?>>Liberia</option>
                                                        <option value="LY"<?=$ThisUser->country == 'LY' ? ' selected="selected"' : '';?>>Libya</option>
                                                        <option value="LI"<?=$ThisUser->country == 'LI' ? ' selected="selected"' : '';?>>Liechtenstein</option>
                                                        <option value="LT"<?=$ThisUser->country == 'LT' ? ' selected="selected"' : '';?>>Lithuania</option>
                                                        <option value="LU"<?=$ThisUser->country == 'LU' ? ' selected="selected"' : '';?>>Luxembourg</option>
                                                        <option value="MK"<?=$ThisUser->country == 'MK' ? ' selected="selected"' : '';?>>Macedonia, Republic of</option>
                                                        <option value="MG"<?=$ThisUser->country == 'MG' ? ' selected="selected"' : '';?>>Madagascar</option>
                                                        <option value="MW"<?=$ThisUser->country == 'MW' ? ' selected="selected"' : '';?>>Malawi</option>
                                                        <option value="MY"<?=$ThisUser->country == 'MY' ? ' selected="selected"' : '';?>>Malaysia</option>
                                                        <option value="MV"<?=$ThisUser->country == 'MV' ? ' selected="selected"' : '';?>>Maldives</option>
                                                        <option value="ML"<?=$ThisUser->country == 'ML' ? ' selected="selected"' : '';?>>Mali</option>
                                                        <option value="MT"<?=$ThisUser->country == 'MT' ? ' selected="selected"' : '';?>>Malta</option>
                                                        <option value="MH"<?=$ThisUser->country == 'MH' ? ' selected="selected"' : '';?>>Marshall Islands</option>
                                                        <option value="MQ"<?=$ThisUser->country == 'MQ' ? ' selected="selected"' : '';?>>Martinique</option>
                                                        <option value="MR"<?=$ThisUser->country == 'MR' ? ' selected="selected"' : '';?>>Mauritania</option>
                                                        <option value="MU"<?=$ThisUser->country == 'MU' ? ' selected="selected"' : '';?>>Mauritius</option>
                                                        <option value="YT"<?=$ThisUser->country == 'YT' ? ' selected="selected"' : '';?>>Mayotte</option>
                                                        <option value="MX"<?=$ThisUser->country == 'MX' ? ' selected="selected"' : '';?>>Mexico</option>
                                                        <option value="FM"<?=$ThisUser->country == 'FM' ? ' selected="selected"' : '';?>>Micronesia, Federated States of</option>
                                                        <option value="MD"<?=$ThisUser->country == 'MD' ? ' selected="selected"' : '';?>>Moldova</option>
                                                        <option value="MC"<?=$ThisUser->country == 'MC' ? ' selected="selected"' : '';?>>Monaco</option>
                                                        <option value="MN"<?=$ThisUser->country == 'MN' ? ' selected="selected"' : '';?>>Mongolia</option>
                                                        <option value="ME"<?=$ThisUser->country == 'ME' ? ' selected="selected"' : '';?>>Montenegro</option>
                                                        <option value="MS"<?=$ThisUser->country == 'MS' ? ' selected="selected"' : '';?>>Montserrat</option>
                                                        <option value="MA"<?=$ThisUser->country == 'MA' ? ' selected="selected"' : '';?>>Morocco</option>
                                                        <option value="MZ"<?=$ThisUser->country == 'MZ' ? ' selected="selected"' : '';?>>Mozambique</option>
                                                        <option value="MM"<?=$ThisUser->country == 'MM' ? ' selected="selected"' : '';?>>Myanmar</option>
                                                        <option value="NA"<?=$ThisUser->country == 'NA' ? ' selected="selected"' : '';?>>Namibia</option>
                                                        <option value="NR"<?=$ThisUser->country == 'NR' ? ' selected="selected"' : '';?>>Nauru</option>
                                                        <option value="NP"<?=$ThisUser->country == 'NP' ? ' selected="selected"' : '';?>>Nepal</option>
                                                        <option value="NL"<?=$ThisUser->country == 'NL' ? ' selected="selected"' : '';?>>Netherlands</option>
                                                        <option value="AN"<?=$ThisUser->country == 'AN' ? ' selected="selected"' : '';?>>Netherlands Antilles</option>
                                                        <option value="NC"<?=$ThisUser->country == 'NC' ? ' selected="selected"' : '';?>>New Caledonia</option>
                                                        <option value="NZ"<?=$ThisUser->country == 'NZ' ? ' selected="selected"' : '';?>>New Zealand</option>
                                                        <option value="NI"<?=$ThisUser->country == 'NI' ? ' selected="selected"' : '';?>>Nicaragua</option>
                                                        <option value="NE"<?=$ThisUser->country == 'NE' ? ' selected="selected"' : '';?>>Niger</option>
                                                        <option value="NG"<?=$ThisUser->country == 'NG' ? ' selected="selected"' : '';?>>Nigeria</option>
                                                        <option value="NU"<?=$ThisUser->country == 'NU' ? ' selected="selected"' : '';?>>Niue</option>
                                                        <option value="NF"<?=$ThisUser->country == 'NF' ? ' selected="selected"' : '';?>>Norfolk Island</option>
                                                        <option value="MP"<?=$ThisUser->country == 'MP' ? ' selected="selected"' : '';?>>Northern Mariana Islands</option>
                                                        <option value="NO"<?=$ThisUser->country == 'NO' ? ' selected="selected"' : '';?>>Norway</option>
                                                        <option value="OM"<?=$ThisUser->country == 'OM' ? ' selected="selected"' : '';?>>Oman</option>
                                                        <option value="PK"<?=$ThisUser->country == 'PK' ? ' selected="selected"' : '';?>>Pakistan</option>
                                                        <option value="PW"<?=$ThisUser->country == 'PW' ? ' selected="selected"' : '';?>>Palau</option>
                                                        <option value="PS"<?=$ThisUser->country == 'PS' ? ' selected="selected"' : '';?>>Palestinian Territory</option>
                                                        <option value="PA"<?=$ThisUser->country == 'PA' ? ' selected="selected"' : '';?>>Panama</option>
                                                        <option value="PG"<?=$ThisUser->country == 'PG' ? ' selected="selected"' : '';?>>Papua New Guinea</option>
                                                        <option value="PY"<?=$ThisUser->country == 'PY' ? ' selected="selected"' : '';?>>Paraguay</option>
                                                        <option value="PE"<?=$ThisUser->country == 'PE' ? ' selected="selected"' : '';?>>Peru</option>
                                                        <option value="PH"<?=$ThisUser->country == 'PH' ? ' selected="selected"' : '';?>>Philippines</option>
                                                        <option value="PN"<?=$ThisUser->country == 'PN' ? ' selected="selected"' : '';?>>Pitcairn</option>
                                                        <option value="PL"<?=$ThisUser->country == 'PL' ? ' selected="selected"' : '';?>>Poland</option>
                                                        <option value="PT"<?=$ThisUser->country == 'PT' ? ' selected="selected"' : '';?>>Portugal</option>
                                                        <option value="PR"<?=$ThisUser->country == 'PR' ? ' selected="selected"' : '';?>>Puerto Rico</option>
                                                        <option value="QA"<?=$ThisUser->country == 'QA' ? ' selected="selected"' : '';?>>Qatar</option>
                                                        <option value="RE"<?=$ThisUser->country == 'RE' ? ' selected="selected"' : '';?>>R&eacute;union</option>
                                                        <option value="RO"<?=$ThisUser->country == 'RO' ? ' selected="selected"' : '';?>>Romania</option>
                                                        <option value="RU"<?=$ThisUser->country == 'RU' ? ' selected="selected"' : '';?>>Russian Federation</option>
                                                        <option value="RW"<?=$ThisUser->country == 'RW' ? ' selected="selected"' : '';?>>Rwanda</option>
                                                        <option value="BL"<?=$ThisUser->country == 'BL' ? ' selected="selected"' : '';?>>Saint-Barth&eacute;lemy</option>
                                                        <option value="SH"<?=$ThisUser->country == 'SH' ? ' selected="selected"' : '';?>>Saint Helena</option>
                                                        <option value="KN"<?=$ThisUser->country == 'KN' ? ' selected="selected"' : '';?>>Saint Kitts and Nevis</option>
                                                        <option value="LC"<?=$ThisUser->country == 'LC' ? ' selected="selected"' : '';?>>Saint Lucia</option>
                                                        <option value="MF"<?=$ThisUser->country == 'MF' ? ' selected="selected"' : '';?>>Saint-Martin (French part)</option>
                                                        <option value="PM"<?=$ThisUser->country == 'PM' ? ' selected="selected"' : '';?>>Saint Pierre and Miquelon</option>
                                                        <option value="VC"<?=$ThisUser->country == 'VC' ? ' selected="selected"' : '';?>>Saint Vincent and Grenadines</option>
                                                        <option value="WS"<?=$ThisUser->country == 'WS' ? ' selected="selected"' : '';?>>Samoa</option>
                                                        <option value="SM"<?=$ThisUser->country == 'SM' ? ' selected="selected"' : '';?>>San Marino</option>
                                                        <option value="ST"<?=$ThisUser->country == 'ST' ? ' selected="selected"' : '';?>>Sao Tome and Principe</option>
                                                        <option value="SA"<?=$ThisUser->country == 'SA' ? ' selected="selected"' : '';?>>Saudi Arabia</option>
                                                        <option value="SN"<?=$ThisUser->country == 'SN' ? ' selected="selected"' : '';?>>Senegal</option>
                                                        <option value="RS"<?=$ThisUser->country == 'RS' ? ' selected="selected"' : '';?>>Serbia</option>
                                                        <option value="SC"<?=$ThisUser->country == 'SC' ? ' selected="selected"' : '';?>>Seychelles</option>
                                                        <option value="SL"<?=$ThisUser->country == 'SL' ? ' selected="selected"' : '';?>>Sierra Leone</option>
                                                        <option value="SG"<?=$ThisUser->country == 'SG' ? ' selected="selected"' : '';?>>Singapore</option>
                                                        <option value="SK"<?=$ThisUser->country == 'SK' ? ' selected="selected"' : '';?>>Slovakia</option>
                                                        <option value="SI"<?=$ThisUser->country == 'SI' ? ' selected="selected"' : '';?>>Slovakia</option>
                                                        <option value="SO"<?=$ThisUser->country == 'SO' ? ' selected="selected"' : '';?>>Somalia</option>
                                                        <option value="ZA"<?=$ThisUser->country == 'ZA' ? ' selected="selected"' : '';?>>South Africa</option>
                                                        <option value="GS"<?=$ThisUser->country == 'GS' ? ' selected="selected"' : '';?>>South Georgia and the South Sandwich Islands</option>
                                                        <option value="SS"<?=$ThisUser->country == 'SS' ? ' selected="selected"' : '';?>>South Sudan</option>
                                                        <option value="ES"<?=$ThisUser->country == 'ES' ? ' selected="selected"' : '';?>>Spain</option>
                                                        <option value="LK"<?=$ThisUser->country == 'LK' ? ' selected="selected"' : '';?>>Sri Lanka</option>
                                                        <option value="SD"<?=$ThisUser->country == 'SD' ? ' selected="selected"' : '';?>>Sudan</option>
                                                        <option value="SR"<?=$ThisUser->country == 'SR' ? ' selected="selected"' : '';?>>Suriname</option>
                                                        <option value="SJ"<?=$ThisUser->country == 'SJ' ? ' selected="selected"' : '';?>>Svalbard and Jan Mayen Islands</option>
                                                        <option value="SZ"<?=$ThisUser->country == 'SZ' ? ' selected="selected"' : '';?>>Swaziland</option>
                                                        <option value="SE"<?=$ThisUser->country == 'SE' ? ' selected="selected"' : '';?>>Sweden</option>
                                                        <option value="CH"<?=$ThisUser->country == 'CH' ? ' selected="selected"' : '';?>>Switzerland</option>
                                                        <option value="SY"<?=$ThisUser->country == 'SY' ? ' selected="selected"' : '';?>>Syrian Arab Republic (Syria)</option>
                                                        <option value="TW"<?=$ThisUser->country == 'TW' ? ' selected="selected"' : '';?>>Taiwan, Republic of China</option>
                                                        <option value="TJ"<?=$ThisUser->country == 'TJ' ? ' selected="selected"' : '';?>>Tajikistan</option>
                                                        <option value="TZ"<?=$ThisUser->country == 'TZ' ? ' selected="selected"' : '';?>>Tanzania, United Republic of</option>
                                                        <option value="TH"<?=$ThisUser->country == 'TH' ? ' selected="selected"' : '';?>>Thailand</option>
                                                        <option value="TL"<?=$ThisUser->country == 'TL' ? ' selected="selected"' : '';?>>Timor-Leste</option>
                                                        <option value="TG"<?=$ThisUser->country == 'TG' ? ' selected="selected"' : '';?>>Togo</option>
                                                        <option value="TK"<?=$ThisUser->country == 'TK' ? ' selected="selected"' : '';?>>Tokelau</option>
                                                        <option value="TO"<?=$ThisUser->country == 'TO' ? ' selected="selected"' : '';?>>Tonga</option>
                                                        <option value="TT"<?=$ThisUser->country == 'TT' ? ' selected="selected"' : '';?>>Trinidad and Tobago</option>
                                                        <option value="TN"<?=$ThisUser->country == 'TN' ? ' selected="selected"' : '';?>>Tunisia</option>
                                                        <option value="TR"<?=$ThisUser->country == 'TR' ? ' selected="selected"' : '';?>>Turkey</option>
                                                        <option value="TM"<?=$ThisUser->country == 'TM' ? ' selected="selected"' : '';?>>Turkmenistan</option>
                                                        <option value="TC"<?=$ThisUser->country == 'TC' ? ' selected="selected"' : '';?>>Turks and Caicos Islands</option>
                                                        <option value="TV"<?=$ThisUser->country == 'TV' ? ' selected="selected"' : '';?>>Tuvalu</option>
                                                        <option value="UG"<?=$ThisUser->country == 'UG' ? ' selected="selected"' : '';?>>Uganda</option>
                                                        <option value="UA"<?=$ThisUser->country == 'UA' ? ' selected="selected"' : '';?>>Ukraine</option>
                                                        <option value="AE"<?=$ThisUser->country == 'AE' ? ' selected="selected"' : '';?>>United Arab Emirates</option>
                                                        <option value="GB"<?=$ThisUser->country == 'GB' ? ' selected="selected"' : '';?>>United Kingdom</option>
                                                        <option value="US"<?=$ThisUser->country == 'US' ? ' selected="selected"' : '';?>>United States of America</option>
                                                        <option value="UM"<?=$ThisUser->country == 'UM' ? ' selected="selected"' : '';?>>US Minor Outlying Islands</option>
                                                        <option value="UY"<?=$ThisUser->country == 'UY' ? ' selected="selected"' : '';?>>Uruguay</option>
                                                        <option value="UZ"<?=$ThisUser->country == 'UZ' ? ' selected="selected"' : '';?>>Uzbekistan</option>
                                                        <option value="VU"<?=$ThisUser->country == 'VU' ? ' selected="selected"' : '';?>>Vanuatu</option>
                                                        <option value="VE"<?=$ThisUser->country == 'VE' ? ' selected="selected"' : '';?>>Venezuela (Bolivarian Republic)</option>
                                                        <option value="VN"<?=$ThisUser->country == 'VN' ? ' selected="selected"' : '';?>>Viet Nam</option>
                                                        <option value="VI"<?=$ThisUser->country == 'VI' ? ' selected="selected"' : '';?>>Virgin Islands, US</option>
                                                        <option value="WF"<?=$ThisUser->country == 'WF' ? ' selected="selected"' : '';?>>Wallis and Futuna Islands</option>
                                                        <option value="EH"<?=$ThisUser->country == 'EH' ? ' selected="selected"' : '';?>>Western Sahara</option>
                                                        <option value="YE"<?=$ThisUser->country == 'YE' ? ' selected="selected"' : '';?>>Yemen</option>
                                                        <option value="ZM"<?=$ThisUser->country == 'ZM' ? ' selected="selected"' : '';?>>Zambia</option>
                                                        <option value="ZW"<?=$ThisUser->country == 'ZW' ? ' selected="selected"' : '';?>>Zimbabwe</option>

                                                    </select>
                                                    <span id="help-billing-country-code" class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div id="hosted-fields">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <label for="amount">Total Amount</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <label for="billing-country-code">Credit Card Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <label for="billing-country-code">Credit Card Date</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="input-group">
                                                        <label for="billing-country-code">CVV</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="amount" name="amount" readonly="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                                                        <div id="hf-number" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        <div id="hf-date" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <div id="hf-cvv" class="form-control"></div>
                                                        <span class="input-group-addon"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div id="submit_cc_sini" class="input-group pay-group" style="display: none;">
                                                        <input disabled id="pay-btn" style="width: 100%;" class="btn btn-sini" type="submit" value="Loading...">
                                                    </div>
                                                </div>

                                                <input type="hidden" value="0" name="Form_Discount" id="Form_Discount" />
                                                <input type="hidden" value="0" name="Form_Discount_Percent" id="Form_Discount_Percent" />
                                                <input type="hidden" value="0" name="Form_DiscountCode" id="Form_DiscountCode" />
                                                <input type="hidden" value="0" name="Form_VatNumber" id="Form_VatNumber" />
                                                <input type="hidden" value="0" name="Form_Vat" id="Form_Vat" />
                                                <input type="hidden" value="0" name="Form_TotalAmount" id="Form_TotalAmount" />
                                                <input type="hidden" value="0" name="Form_Amount" id="Form_Amount" />
                                                <input type="hidden" value="0" name="AA_Year" id="CC_AA_Year" />
                                                <input type="hidden" value="0" name="IG_Year" id="CC_IG_Year" />
                                                <input type="hidden" value="0" name="SI_Year" id="CC_SI_Year" />
                                                <input type="hidden" value="0" name="DE_Year" id="CC_DE_Year" />
                                                <input type="hidden" value="0" name="PR_Year" id="CC_PR_Year" />
                                                <input type="hidden" value="0" name="AA_Month" id="CC_AA_Month" />
                                                <input type="hidden" value="0" name="IG_Month" id="CC_IG_Month" />
                                                <input type="hidden" value="0" name="SI_Month" id="CC_SI_Month" />
                                                <input type="hidden" value="0" name="DE_Month" id="CC_DE_Month" />
                                                <input type="hidden" value="0" name="PR_Month" id="CC_PR_Month" />
                                                <input type="hidden" value="0" name="dataCollector" id="dataCollector" />
                                                <input type="hidden" value="{{$ThisUser->id}}" name="user_id" id="user_id" />
                                                <input id="nonce" name="payment_method_nonce" type="hidden" />
                                            </div>
                                        </div>
                                      
                                        <div class="row" style="padding-top: 20px;">
                                            <div class="col-md-6  hidden">
                                                <h4> ----------------------------- Remove Below ------------------------------</h4>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 20px;">
                                            <div class="col-md-6  hidden">
                                                <p class="input-group-addon lead">Payment method nonce received:</p>
                                                <div class="input-group nonce-group hidden">
                                                    <input readonly name="nonce" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 nonce-group hidden">
                                                <div class="input-group">
                                                    <span class="input-group-addon lead"></span>
                                                    <input type="hidden" readonly name="nonce" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <tr><th>successful with no challenge</th><th>successful with challenge</th><th>unsuccessful with challenge</th></tr>
                                                    <tr><th>4000000000001000</th><th>4000000000001091</th><th>4000000000001109</th></tr>
                                                </table>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="SiNi_PP">
                            <div class="card">
                                <div class="card-body" style="padding: 30px; min-height: 340px;">
                                    <form action="{{ url('/User/Buy/Purchase') }}" class="container-full" method="POST" id="payment-form">
                                        @csrf
                                        @if (session()->has('success_message'))
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success_message') }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if(count($errors) > 0)
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li><{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="their_email">User Associated With Payment</label>
                                                    <input type="text" class="form-control" value="{{$ThisUser->email}}" name="their_email" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="amount">Amount</label>
                                                    <input type="text" class="form-control" id="CC_Price2" name="CC_Price2" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">

                                            </div>
                                            <div class="col-md-4" style="height: 50px;">
                                                Checking out with PayPal will open the PayPal window to login to your account.
                                            </div>
                                            <div class="col-md-6" style="padding-top: 30px;">
                                                <div style="display: none;" id="paypal-button"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------- END PAGE ------>
        </div>
    </div>
</div>

<div class="container-full">
    <hr />
    @include ('includes.footer')
</div>
@include ('includes.bottom')
@include ('includes.flash_message')




<script>
var form = document.querySelector('#payment-form');
var submit = document.querySelector('input[type="submit"]');

var DoIChargeVat = '{{ $DoIChargeVat }}';
var DoIHaveVatNumber = '{{$ThisUser->vat_number}}';
var Total = 0;
var Form_Discount = 0;
var Form_DiscountCode = 0;
var Form_VatNumber = 0;
var Form_Vat = 0;
var Form_TotalAmount = 0;
var Form_Amount = 0;

////////  BRAINTREE HOSTED FIELDS  --------------------------------------------------------------------------------------------------
var hf, threeDS;
var CC_ERROR = document.getElementById('CC_ERROR');
var CC_ERROR_MESSAGE = document.getElementById('CC_ERROR_MESSAGE'); 
var hostedFieldsContainer = document.getElementById('hosted-fields');
var payBtn = document.getElementById('pay-btn');
var nonceGroup = document.querySelector('.nonce-group');
var nonceInput = document.querySelector('.nonce-group input');
var nonceSpan = document.querySelector('.nonce-group span');
var payGroup = document.querySelector('.pay-group');
var billingFields = [
    'email',
    'billing-phone',
    'billing-given-name',
    'billing-surname',
    'billing-street-address',
    'billing-locality',
    'billing-region',
    'billing-postal-code',
    'billing-country-code'
].reduce(function (fields, fieldName) {
    var field = fields[fieldName] = {
        input: document.getElementById(fieldName),
        help: document.getElementById('help-' + fieldName)
    };

    field.input.addEventListener('focus', function() {
        clearFieldValidations(field);
    });

    return fields;
}, {});

//// THIS WILL BE DELETED
function autofill(e) {
    e.preventDefault();
    billingFields.email.input.value = 'your.email@email.com';
    billingFields['billing-phone'].input.value = '123-456-7890';
    billingFields['billing-given-name'].input.value = 'Jane';
    billingFields['billing-surname'].input.value = 'Doe';
    billingFields['billing-street-address'].input.value = '123 XYZ Street';
    billingFields['billing-locality'].input.value = 'Anytown';
    billingFields['billing-region'].input.value = 'CA';
    billingFields['billing-postal-code'].input.value = '12345';
    billingFields['billing-country-code'].input.value = 'US';
    Object.keys(billingFields).forEach(function (field) {
        clearFieldValidations(billingFields[field]);
    });
}

document.getElementById('autofill').addEventListener('click', autofill);

function clearFieldValidations (field) {
    field.help.innerText = '';
    field.help.parentNode.classList.remove('has-error');
}

function validateBillingFields() {
    var isValid = true;

    Object.keys(billingFields).forEach(function (fieldName) {
        var fieldEmpty = false;
        var field = billingFields[fieldName];

        if (field.optional) {
            return;
        }

        fieldEmpty = field.input.value.trim() === '';

        if (fieldEmpty) {
            isValid = false;
            field.help.innerText = 'Field cannot be blank.';
            field.help.parentNode.classList.add('has-error');
            CC_ERROR.style.display = 'block'; 
            CC_ERROR_MESSAGE.innerHTML = 'Field cannot be blank.'; 
            //CC_ERROR_MESSAGE
        } 
        else {
            clearFieldValidations(field);
        }
    });
    return isValid;
}

function start() {
    getClientToken();
}

function getClientToken() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 201) {
            onFetchClientToken(JSON.parse(xhr.responseText).client_token);  
        }
    };
    xhr.open("GET", "https://braintree-sample-merchant.herokuapp.com/client_token", true);
    xhr.send(); 
}

function setupComponents (clientToken) {
    return Promise.all([
        braintree.hostedFields.create({
            authorization: '{{ $token }}',
                styles: {
                    'input': {
                    'font-size': '16px',
                    'padding': '9px',
                },
                    ':focus': {
                    'color': '#fff',
                },
                    '.valid': {
                    'color': '#28a745',
                    'border-color': '#28a745',
                    'border-style': 'solid',
                    'border-width': 'thin',
                },
                    '.invalid': {
                    'color': '#dc3545',
                    'border-color': '#dc3545',
                    'border-style': 'solid',
                    'border-width': 'thin',
                },
            },
            fields: {
                number: {
                    selector: '#hf-number',
                    placeholder: '4111 1111 1111 1111'
                },
                cvv: {
                    selector: '#hf-cvv',
                    placeholder: '123'
                },
                    expirationDate: {
                    selector: '#hf-date',
                    placeholder: '12 / 34'
                }
            }
        }),
        braintree.threeDSecure.create({
            authorization: '{{ $token }}',
            version: 2
        })
    ]);
}

function onFetchClientToken(clientToken) {
    return setupComponents(clientToken).then(function(instances) { 
        hf = instances[0];
        threeDS = instances[1];

        setupForm();
    }).catch(function (err) {
        CC_ERROR.style.display = 'block'; 
        CC_ERROR_MESSAGE.innerHTML = 'Error: '+err; 
        console.log('component error:', err);
    });
}

function setupForm() {
    enablePayNow();
}

function enablePayNow() {
    payBtn.value = 'Pay Now';
    payBtn.removeAttribute('disabled');
}

function showNonce(payload, liabilityShift) {
    nonceSpan.textContent = "Liability shifted: " + liabilityShift;
    nonceInput.value = payload.nonce;
    payGroup.classList.add('hidden');
    hostedFieldsContainer.classList.add('hidden');
    payGroup.style.display = 'none';
    hostedFieldsContainer.style.display = 'none';
    nonceGroup.classList.remove('hidden');
}

payBtn.addEventListener('click', function(event) {
    payBtn.setAttribute('disabled', 'disabled');
    payBtn.value = 'Processing...';
    var billingIsValid = validateBillingFields();

    if (!billingIsValid) {
        enablePayNow();
        return;
    }

    hf.tokenize().then(function (payload) {
        return threeDS.verifyCard({
            onLookupComplete: function (data, next) {
                next();
            },
            amount: Total.toFixed(2),
            nonce: payload.nonce,
            bin: payload.details.bin,
            email: billingFields.email.input.value,
            billingAddress: {
            givenName: billingFields['billing-given-name'].input.value,
            surname: billingFields['billing-surname'].input.value,
            phoneNumber: billingFields['billing-phone'].input.value.replace(/[\(\)\s\-]/g, ''), // remove (), spaces, and - from phone number
            streetAddress: billingFields['billing-street-address'].input.value,
            locality: billingFields['billing-locality'].input.value,
            region: billingFields['billing-region'].input.value,
            postalCode: billingFields['billing-postal-code'].input.value,
            countryCodeAlpha2: billingFields['billing-country-code'].input.value
        }
    })
    }).then(function (payload) {
        if (!payload.liabilityShifted) {
            console.log('Liability did not shift', payload);
            showNonce(payload, false);
            CC_ERROR.style.display = 'block'; 
            CC_ERROR_MESSAGE.innerHTML = 'Error: Liability did not shift '+payload; 
            return;
        }

        console.log('verification success:', payload);
        showNonce(payload, true);
        // send nonce and verification data to your server
        $.Notification.notify('warning','top right', 'SiNi Software', 'Submitting Payment to BrainTree');
        CC_ERROR.style.display = 'none'; 
        document.querySelector('#nonce').value = payload.nonce;
        form.submit();
    }).catch(function (err) {
        console.log(err);
        CC_ERROR.style.display = 'block'; 
        CC_ERROR_MESSAGE.innerHTML = 'Error: '+err; 
        enablePayNow();
    });
});

start();
////////  PAY PAL  --------------------------------------------------------------------------------------------------
/*
braintree.paypalCheckout.create({
        client: clientInstance
        }, function (paypalCheckoutErr, paypalCheckoutInstance) {

        if (paypalCheckoutErr) {
            document.getElementById("paypal_button_bad_message").style.display = "block";
            //document.getElementById("paypal_button_bad_message").style.visibility = "visible";
            document.getElementById('paypal-button').style.visibility = 'hidden';
            //console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
          return;
        }

        // Set up PayPal with the checkout.js library
        paypal.Button.render({
          env: 'production', // 'production' Or 'sandbox'
          //commit: true, // This will add the transaction amount to the PayPal button
          style: {
                    size: 'medium',
                    color: 'blue',
                    shape: 'rect',
                    tagline: false,
                },
          payment: function () {
            return paypalCheckoutInstance.createPayment({
                //flow: 'checkout', // Required
              flow: 'vault', // Required
              amount: Total, // Required
              currency: 'GBP', // Required
              enableShippingAddress: false,
              storeInVaultOnSuccess: true,
              //storeInVault: true,
            });
          },

          onAuthorize: function (data, actions) {
                return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                  // Submit `payload.nonce` to your server
                    document.getElementById('paypal-button').style.visibility = 'hidden';
                    document.getElementById("paypal_button_good_message").style.visibility = "visible";
                    document.getElementById("paypal_button_good_message").style.display = "block";
                    document.getElementById("submit-button").style.display = "none"; 
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
            });
          },

          onCancel: function (data) {
            console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
            document.getElementById('paypal-button').style.visibility = 'visible';
            $.Notification.notify('error','top right', 'SiNi Software', 'PayPal payment cancelled');
          },

          onError: function (err) {
            document.getElementById("paypal_button_bad_message").style.visibility = "visible";
            document.getElementById("paypal_button_bad_message").style.display = "block";
            document.getElementById('paypal-button').style.visibility = 'hidden';
          }
        }, '#paypal-button').then(function () {
            // The PayPal button will be rendered in an html element with the id
    });
*/
////////  CODE FOR BUY ITEMS -----------------------------------------------------------------------------------------
var ThwVatNumber = false;
var GodeDiscountPercent = 0;
var AA_Y = <?php echo $AA_Price->price_year; ?>;
var AA_M = <?php echo $AA_Price->price_month; ?>;
var IG_Y = <?php echo $IG_Price->price_year; ?>;
var IG_M = <?php echo $IG_Price->price_month; ?>;
var SI_Y = <?php echo $SI_Price->price_year; ?>;
var SI_M = <?php echo $SI_Price->price_month; ?>;
var PR_Y = <?php echo $PR_Price->price_year; ?>;
var PR_M = <?php echo $PR_Price->price_month; ?>;
var DE_Y = <?php echo $DE_Price->price_year; ?>;
var DE_M = <?php echo $DE_Price->price_month; ?>;

function RunMath() {
    var AboveDiscount = "NO";
    var FullYearDiscount = "NO";
    var UserDiscount = 0;
    var UserDiscountAmount = 0;

    var AA_Y_C = document.getElementById("AA_Year").value;
    var IG_Y_C = document.getElementById("IG_Year").value;
    var SI_Y_C = document.getElementById("SI_Year").value;
    var PR_Y_C = document.getElementById("PR_Year").value;
    var DE_Y_C = document.getElementById("DE_Year").value;
    var AA_M_C = document.getElementById("AA_Month").value;
    var IG_M_C = document.getElementById("IG_Month").value;
    var SI_M_C = document.getElementById("SI_Month").value;
    var PR_M_C = document.getElementById("PR_Month").value;
    var DE_M_C = document.getElementById("DE_Month").value;

    var UserAmount_Y = Number(AA_Y_C) + Number(IG_Y_C) + Number(SI_Y_C) + Number(PR_Y_C) + Number(DE_Y_C);
    var UserAmount_M = Number(AA_M_C) + Number(IG_M_C) + Number(SI_M_C) + Number(PR_M_C) + Number(DE_M_C);

    if(UserAmount_Y > 4 && UserAmount_Y < 11){
        document.getElementById("DiscountShow").innerHTML = '5% Off Price';
        document.getElementById('DiscountShow').style.visibility = 'visible';
        FullYearDiscount = "YES";
        UserDiscount = 5;
    }

    if(UserAmount_Y > 10 && UserAmount_Y < 100000){
        document.getElementById("DiscountShow").innerHTML = '10% Off Price';
        document.getElementById('DiscountShow').style.visibility = 'visible';
        FullYearDiscount = "YES";
        UserDiscount = 10;
    }
    if(UserAmount_Y > 10 && UserAmount_Y < 100000){

    }
    else{
        if(UserAmount_M > 4 && UserAmount_M < 11){
            document.getElementById("DiscountShow").innerHTML = '5% Off Price';
            document.getElementById('DiscountShow').style.visibility = 'visible';
            UserDiscount = 5;
        }
    }

    if(UserAmount_M > 10 && UserAmount_M < 100000){
        document.getElementById("DiscountShow").innerHTML = '10% Off Price';
        document.getElementById('DiscountShow').style.visibility = 'visible';
        UserDiscount = 10;
    }

    if(UserAmount_M < 5 && UserAmount_Y < 5){
        document.getElementById('DiscountShow').style.visibility = 'hidden';
    }

    var AA_Y_V = AA_Y * AA_Y_C;
    var IG_Y_V = IG_Y * IG_Y_C;
    var SI_Y_V = SI_Y * SI_Y_C;
    var PR_Y_V = PR_Y * PR_Y_C;
    var DE_Y_V = DE_Y * DE_Y_C;
    var AA_M_V = AA_M * AA_M_C;
    var IG_M_V = IG_M * IG_M_C;
    var SI_M_V = SI_M * SI_M_C;
    var PR_M_V = PR_M * PR_M_C;
    var DE_M_V = DE_M * DE_M_C;

    var SubTotal = AA_Y_V + IG_Y_V + SI_Y_V + PR_Y_V + DE_Y_V + AA_M_V + IG_M_V + SI_M_V + PR_M_V + DE_M_V;
    var DiscountAmount = 0;
    var DiscountTotal = SubTotal;

    if(GodeDiscountPercent > 0){
        DiscountAmount = (GodeDiscountPercent / 100) * SubTotal;
        DiscountTotal = DiscountTotal - DiscountAmount;
    }

    if(UserDiscount > 0){
        UserDiscountAmount = (UserDiscount / 100) * SubTotal;
        DiscountAmount = DiscountAmount + UserDiscountAmount;
        DiscountTotal = DiscountTotal - UserDiscountAmount;
    }

    /// 0 = no     1 = only if no vat number      2 = yes
    Vat = 0;
    if(DoIChargeVat == 1){
        var Vat = (20 / 100) * DiscountTotal;
        if(ThwVatNumber == true){
            Vat = 0;
        }
    }

    if(DoIChargeVat == 2){
        var Vat = (20 / 100) * DiscountTotal;
    }

    Total = Vat + DiscountTotal;

    var TotalDiscountAmount = GodeDiscountPercent + UserDiscount;
    document.getElementById("Form_Discount_Percent").value = TotalDiscountAmount;
    document.getElementById("Form_Discount").value = DiscountTotal.toFixed(2);
    document.getElementById("Form_Vat").value = Vat.toFixed(2);
    document.getElementById("Form_TotalAmount").value = Total.toFixed(2);
    document.getElementById("Form_Amount").value = SubTotal.toFixed(2);

    document.getElementById("Total").value = ("£" + SubTotal.toFixed(2));
    document.getElementById("DiscountTotal").value = ("£" + DiscountAmount.toFixed(2));
    document.getElementById("Total_Discount").value = ("£" + DiscountTotal.toFixed(2));
    document.getElementById("Vat").value = ("£" + Vat.toFixed(2));

    document.getElementById("VatTotal").value = ("£" + Total.toFixed(2));
    document.getElementById("amount").value = Total.toFixed(2);
    document.getElementById("CC_Price2").value = Total.toFixed(2);


    document.getElementById("CC_AA_Year").value = AA_Y_C;
    document.getElementById("CC_IG_Year").value = IG_Y_C;
    document.getElementById("CC_SI_Year").value = SI_Y_C;
    document.getElementById("CC_DE_Year").value = DE_Y_C;
    document.getElementById("CC_PR_Year").value = PR_Y_C;
    document.getElementById("CC_AA_Month").value = AA_M_C;
    document.getElementById("CC_IG_Month").value = IG_M_C;
    document.getElementById("CC_SI_Month").value = SI_M_C;
    document.getElementById("CC_DE_Month").value = DE_M_C;
    document.getElementById("CC_PR_Month").value = PR_M_C;

    if(document.getElementById("amount").value  > 0){
        document.getElementById("paypal-button").style.display = "block";
        document.getElementById("submit_cc_sini").style.display = "block";
    }
    else{
        document.getElementById("paypal-button").style.display = "none";
        document.getElementById("submit_cc_sini").style.display = "none";
    }
}

function GetDiscount() {
    var discount_imput = document.getElementById("Discount").value;

    var form_data = new FormData();
    form_data.append('code', discount_imput);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        data: form_data,
        type: "POST",
        url:"{{ url('/User/Buy/GetDiscountCode') }}",
        cache: false,
        contentType: false,
        processData: false,
        dataType:'JSON',
        success: function(data) {
            if(data.result == "true"){
                document.getElementById("Discount").style.borderColor = "#45464e";
                document.getElementById("Discount").style.backgroundColor = "#2f323b";

                document.getElementById("Discount").disabled = true;
                $( ".Discount2" ).empty();
                document.getElementById('DiscNumberButton').style.visibility = 'hidden';
                document.getElementById("DiscNumberButton").innerHTML = "|";
                var mymessage = data.percentage+'% Off Discount';
                document.getElementById("Discount1").innerHTML = mymessage;
                GodeDiscountPercent = data.percentage;
                //document.getElementById("CC_Discount").value = discount_imput;
                document.getElementById("Form_DiscountCode").value = document.getElementById("Discount").value;
                RunMath();

            }
            else{
                document.getElementById("Discount").style.borderColor = "red";
                document.getElementById("Discount2").innerHTML = data.message;
                document.getElementById("Form_DiscountCode").value = '';
                GodeDiscountPercent = 0;
            }
        },
        error: function(data) {
            $.Notification.notify('error','top right', 'SiNi Software', 'Some code error with ajax request');
        }
    });
}

function GetVat() {
    var vat_number = document.getElementById("VatNumber").value;

    $.ajax({
        url: 'https://apilayer.net/api/validate?access_key=adb03562fee81f072f86164a79cb72fa&vat_number=' + vat_number,
        dataType: 'jsonp',
        success: function(json) {
            if(json.valid == true){
                document.getElementById("VatNumber").style.borderColor = "#45464e";
                document.getElementById("VatNumber").style.backgroundColor = "#2f323b";
                document.getElementById("company").innerHTML = 'Good Vat Number';
                $( ".company2" ).empty();
                document.getElementById("VatNumber").disabled = true;
                document.getElementById("VatNumberButton").innerHTML = "|";
                document.getElementById('VatNumberButton').style.visibility = 'hidden';
                //document.getElementById("CC_VatNumber").value = vat_number;
                document.getElementById("Form_VatNumber").value = document.getElementById("VatNumber").value;
                ThwVatNumber = true;
                RunMath();
            }
            else{
                document.getElementById("VatNumber").style.borderColor = "red";
                document.getElementById("company2").innerHTML = 'Vat Number Not Found';
                document.getElementById("Form_VatNumber").value  = '';
                ThwVatNumber = false;
            }
        }
    });
}

if(DoIHaveVatNumber != ''){
    document.getElementById("VatNumber").disabled = true;
    document.getElementById("Form_VatNumber").value = DoIHaveVatNumber;
    ThwVatNumber = true;
    RunMath();
}

$('table tr td').on('input',function(e){
    RunMath();
});


</script>


</body>
</html>
