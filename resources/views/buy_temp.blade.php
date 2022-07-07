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

                                    
                                    <form action="javascript:void(0)" class="container-full">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p>This is a functional example of performing 3D Secure verification on a credit card tokenized with Hosted Fields. For 3DS 2.0, it's highly recomended to supply additional information about the customer to achieve a frictionless flow (no challenge presented).</p>
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
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email" value="{{$ThisUser->email}}" placeholder="you@example.com">
                                                    <span id="help-email" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-phone">Billing phone number</label>
                                                    <input type="billing-phone" class="form-control" id="billing-phone" value="" placeholder="123-456-7890">
                                                    <span id="help-billing-phone" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-given-name">Billing first name</label>
                                                    <input type="billing-given-name" class="form-control" value="{{$ThisUser->first_name}}" id="billing-given-name" placeholder="First">
                                                    <span id="help-billing-given-name" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-surname">Billing last name</label>
                                                    <input type="billing-surname" class="form-control" value="{{$ThisUser->last_name}}" id="billing-surname" placeholder="Last">
                                                    <span id="help-billing-surname" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="billing-street-address">Billing street address</label>
                                                    <input type="billing-street-address" class="form-control" value="{{$ThisUser->address}}" id="billing-street-address" placeholder="123 Street">
                                                    <span id="help-billing-street-address" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-locality">Billing city/Town</label>
                                                    <input type="billing-locality" class="form-control" value="{{$ThisUser->city}}" id="billing-locality" placeholder="City">
                                                    <span id="help-billing-locality" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="billing-region">Billing region</label>
                                                    <input type="billing-region" class="form-control" id="billing-region" placeholder="State">
                                                    <span id="help-billing-region" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="billing-postal-code">Billing post code</label>
                                                    <input type="billing-postal-code" class="form-control" value="{{$ThisUser->zip}}" id="billing-postal-code" placeholder="12345">
                                                    <span id="help-billing-postal-code" class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="billing-country-code">Billing Country</label>
                                                    <input type="billing-country-code" class="form-control" value="{{$ThisUser->country}}" id="billing-country-code" placeholder="XX">
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
                                                    <div class="input-group pay-group">
                                                        <input disabled id="pay-btn" class="btn btn-success" type="submit" value="Loading...">
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
                                            <div class="col-md-3">
                                                <p class="lead sdfsdf">nonce</p>
                                                <div class="input-group nonce-group hidden">
                                                    <input readonly name="nonce" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-9 nonce-group hidden">
                                                <p class="lead"> Payment method nonce received: </p>
                                                <div class="input-group">
                                                    <span class="input-group-addon lead"></span>
                                                    <input readonly name="nonce" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table">
                                                    <tr><th>Field</th><th>Value</th></tr>
                                                    <tr><td>Number (successful with no challenge)</td><td>4000000000001000</td></tr>
                                                    <tr><td>Number (successful with challenge)</td><td>4000000000001091</td></tr>
                                                            <tr><td>Number (unsuccessful with challenge)</td><td>4000000000001109</td></tr>
                                                    <tr><td>Expiration Date (for sandbox testing, year must be exactly 3 years in the future)</td><td>12/22</td></tr>
                                                    <tr><td>CVV</td><td>123</td></tr>
                                                </table>
                                            </div>
                                        </div>
                                      
                                        

                                        <div class="row">
                                            <div class="col-xs-6">

                                          
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="SiNi_PP">
                            <div class="card">
                                <div class="card-body" style="padding: 30px; min-height: 340px;">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-bottom: 20px;">
                                            PAY PAL HERE
                                        </div>
                                    </div>
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
var DoIChargeVat = '{{ $DoIChargeVat }}';
var DoIHaveVatNumber = '{{$ThisUser->vat_number}}';

var Form_Discount = 0;
var Form_DiscountCode = 0;
var Form_VatNumber = 0;
var Form_Vat = 0;
var Form_TotalAmount = 0;
var Form_Amount = 0;

var hf, threeDS;
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
    } else {
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
        input: {
          'font-size': '14px',
          'font-family': 'monospace'
        }
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
      amount: '100.00',
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
      return;
    }

    console.log('verification success:', payload);
    showNonce(payload, true);
      // send nonce and verification data to your server
  }).catch(function (err) {
    console.log(err);
    enablePayNow();
  });
});

start();
/* OLD CODE
    var form = document.querySelector('#payment-form');
    var client_token = "{{ $token }}";
    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }
                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });

    var form = document.querySelector('#payment-form');
    var submit = document.querySelector('input[type="submit"]');
    var cost_amount = document.getElementById("amount").value;
    var DoIChargeVat = '{{ $DoIChargeVat }}';
    var DoIHaveVatNumber = '{{$ThisUser->vat_number}}';

    var Form_Discount = 0;
    var Form_DiscountCode = 0;
    var Form_VatNumber = 0;
    var Form_Vat = 0;
    var Form_TotalAmount = 0;
    var Form_Amount = 0;

    braintree.client.create({
        authorization: '{{ $token }}'
    }, function (clientErr, clientInstance) {
        if (clientErr) {
            console.error(clientErr);
            return;
        }
        braintree.dataCollector.create({
            client: clientInstance,
            kount: true
        }, function (err, dataCollectorInstance) {
            if (err) {
                // Handle error in creation of data collector
                return;
            }
            // At this point, you should access the dataCollectorInstance.deviceData value and provide it
            // to your server, e.g. by injecting it into your form as a hidden input.
            var deviceData = dataCollectorInstance.deviceData;
            document.getElementById("dataCollector").value = deviceData;
        });

        braintree.hostedFields.create({
                client: clientInstance,
                styles: {
                    'input': {
                        'font-size': '16px',
                        'padding': '9px',
                    },
                    // Styling element state
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
                    '::-webkit-input-placeholder': {
                        'color': '#555',
                    },
                },
                fields: {
                    number: {
                        selector: '#cc-number',
                        placeholder: '1111 1111 1111 1111'
                    },
                    cvv: {
                        selector: '#cc-cvv',
                        placeholder: '3 or 4 digit code on back'
                    },
                    expirationDate: {
                        selector: '#cc-expiration',
                        placeholder: 'mm/yy'
                    },
                    postalCode: {
                        selector: '#postal-code',
                        placeholder: 'Post Code'
                    }
                }
            },
            function (err, hostedFieldsInstance) {
                if (err) {
                    console.error(err);
                    return;
                }

                function createInputChangeEventListener(element) {
                    return function () {
                        validateInput(element);
                    }
                }

                function setValidityClasses(element, validity) {
                    if (validity) {
                        element.removeClass('is-invalid');
                        element.addClass('is-valid');
                    }
                    else {
                        element.addClass('is-invalid');
                        element.removeClass('is-valid');
                    }
                }

                function validateInput(element) {
                    if (!element.val().trim()) {
                        setValidityClasses(element, false);
                        return false;
                    }
                    setValidityClasses(element, true);
                    return true;
                }

                function validateEmail () {
                    var baseValidity = validateInput(email);

                    if (!baseValidity) {
                        return false;
                    }

                    if (email.val().indexOf('@') === -1) {
                        setValidityClasses(email, false);
                        return false;
                    }

                    setValidityClasses(email, true);
                    return true;
                }
                var ccName = $('#cc-name');
                var email = $('#email');

                ccName.on('change', function () {
                    validateInput(ccName);
                });

                email.on('change', validateEmail);

                hostedFieldsInstance.on('validityChange', function(event) {
                    var field = event.fields[event.emittedBy];

                    // Remove any previously applied error or warning classes
                    $(field.container).removeClass('is-valid');
                    $(field.container).removeClass('is-invalid');

                    if (field.isValid) {
                        $(field.container).addClass('is-valid');
                    }
                    else if (field.isPotentiallyValid) {
                        // skip adding classes if the field is
                        // not valid, but is potentially valid
                    }
                    else {
                        $(field.container).addClass('is-invalid');
                    }
                });

                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    var formIsInvalid = false;
                    var state = hostedFieldsInstance.getState();

                    if (!validateInput($('#cc-name'))) {
                        formIsInvalid = true;
                    }

                    Object.keys(state.fields).forEach(function(field) {
                        if (!state.fields[field].isValid) {
                            $(state.fields[field].container).addClass('is-invalid');
                            formIsInvalid = true;
                        }
                    });

                    if (formIsInvalid) {
                        $.Notification.notify('error','top right', 'SiNi Software', 'Reqired Fiulds Are Missing In Your Form');
                        return;
                    }

                    hostedFieldsInstance.tokenize({
                            cardholderName: $('#cc-name').val()
                        },
                        function (tokenizeErr, payload) {

                            if (tokenizeErr) {
                                $.Notification.notify('error','top right', 'SiNi Software', 'Reqired Fiulds Are Missing In Your Form');
                                //console.error(tokenizeErr);
                                return;
                            }

                            // If this was a real integration, this is where you would
                            // send the nonce to your server.
                            // console.log('Got a nonce: ' + payload.nonce);
                            document.getElementById('paypal-button').style.visibility = 'hidden';
                            document.getElementById("paypal_button_good_message").style.visibility = "visible";
                            document.getElementById("paypal_button_good_message").style.display = "block";
                            document.getElementById("submit-button").style.display = "none";
                            $.Notification.notify('warning','top right', 'SiNi Software', 'Submitting Payment to BrainTree');
                            document.querySelector('#nonce').value = payload.nonce;
                            form.submit();
                        });
                }, false);
            });
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
        });
    });
*/
    //////   my stuff
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

    var Total = 0;

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
        if(DoIChargeVat == 1){
            var Vat = (20 / 100) * DiscountTotal;
            if(ThwVatNumber == true){
                Vat = 0;
            }
        }
        else{
            Vat = 0;
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
        //if(DoIChargeVat > 0){
        document.getElementById("Vat").value = ("£" + Vat.toFixed(2));
        //}

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
            document.getElementById("submit-button").style.display = "block";
        }
        else{
            document.getElementById("paypal-button").style.display = "none";
            document.getElementById("submit-button").style.display = "none";
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
