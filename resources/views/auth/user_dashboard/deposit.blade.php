@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="sa-success">Select Deposit Plan</h3>
                       <?php
                        if(isset($_GET['message'])) {
                            ?>
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <strong>Deposit Request</strong>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hey {{ auth()->user()->fname }}, Your Deposit Request has been sent for further review.
                                            <br>We will get back to you shortly</p>
                                        <hr>
                                        <a href="{{ route('home') }}" class="btn btn-primary">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                       ?>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-4 col-sm-6">
                        <div class="card" id="starterContainer">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-md mr-4">
                                                <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                                    <img src="{{ asset('img/transaction-bg-ellipse-03.png') }}" alt="" height="30">
                                                </span>
                                    </div>

                                    <div class="media-body overflow-hidden">
                                        <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">STARTER PLAN</a></h5>
                                        <p class="text-muted mb-4"> WEEKLY <span class="badge badge-primary">2.5%</span> PAYOUT</p>
                                        <div class="team">
                                            <span>Minimum Investment: $128.87</span>
                                            <hr>
                                            <span>Maximum Investment: $927.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top">
                                <span onclick="investPlan('starter')" class="btn btn-info btn-block">Choose Plan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="card" id="advanceContainer">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-md mr-4">
                                                <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                                    <img src="{{ asset('img/payment-outline.png') }}" alt="" height="30">
                                                </span>
                                    </div>

                                    <div class="media-body overflow-hidden">
                                        <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">ADVANCE PLAN</a></h5>
                                        <p class="text-muted mb-4"> MONTHLY <span class="badge badge-success">10%</span> PAYOUT</p>
                                        <div class="team">
                                            <span>Minimum Investment: $128.87</span>
                                            <hr>
                                            <span>Maximum Investment: $9,278.35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top">
                                <span onclick="investPlan('advance')" class="btn btn-success btn-block">Choose Plan</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="card" id="ultimateContainer">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-md mr-4">
                                                <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                                    <img src="{{ asset('img/download-bg-ellipse-02.png') }}" alt="" height="30">
                                                </span>
                                    </div>


                                    <div class="media-body overflow-hidden">
                                        <h5 class="text-truncate font-size-15"><a href="#" class="text-dark">ULTIMATE PLAN</a></h5>
                                        <p class="text-muted mb-4"> SIX (6) MONTHLY <span class="badge badge-warning">60%</span> PAYOUT</p>
                                        <div class="team">
                                            <span>Minimum Investment: $128.87</span>
                                            <hr>
                                            <span>Maximum Investment: $92,783.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top">
                                <span onclick="investPlan('ultimate')" class="btn btn-warning btn-block">Choose Plan</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contaant Display here--}}
                <div class="row" id="selectPaymentMethod">
                    <div class="col-md-12 text-center mb-3">
                        <strong id="select_payment">Please Select your mode of payment</strong>
                    </div>

                    <div class="col-md-2"></div>
                    <div class="col-md-4 pl-5" onclick="depositOption('bank')">
                        <img id="bankImg" class="img-select" width="220px" src="{{ asset('public/assets/images/bank.png') }}" alt="">
                    </div>
                    <div class="col-md-4" onclick="depositOption('btc')">
                        <img id="bitcoinImg" class="p-4 img-select"  width="210px" height="107px" src="{{ asset('public/assets/images/bitcoin.png') }}" alt="">
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2"></div>
                    <div class="col-md-7 pl-5">
                        {{--Form for bank deposit--}}
                        <div id="bankForm">
                            <form action="{{ route('depositRequest') }}" method="post">
                                @csrf
                                <input hidden class="form-control" id="knowWhatToChoose" name="plan">
                                <label for="amount">Amount <small>(in Naira)</small></label>
                                <div class="input-group">
                                    <input name="amount" onkeyup="makeDepositBank()"   id="bankInput" type="number" class="form-control" data-provide="timepicker">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><b>USD</b></span>
                                    </div>
                                </div>
                                <div id="interestHolder">
                                    <label for="amount">Interest </label>
                                    <div class="input-group" >
                                        <input name="interest" disabled="" id="interest" style="cursor: no-drop" type="text" class="form-control" data-provide="timepicker">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><b id="payOutText"></b></span>
                                        </div>
                                    </div>
                                </div>

                                    <div class="text-danger" id="bankMessage"></div>
                                    <strong class="text-success" id="bankSuccessMessage"></strong>

                                <div>
                                    <input id="bankBtn" class="btn btn-success btn-block mt-3" type="submit" value="Make Deposit">
                                </div>
                            </form>
                        </div>
                        {{-- Know what to choose from the below --}}
                        {{-- Know what to choose from the below ends here --}}

                        <div id="bitcoinForm">
                            <form action="" method="post">
                                <label for="amount">Amount <small>(in BTC)</small></label>
                                <div class="input-group">
                                    <input style="cursor: no-drop" disabled id="bitcoinInput" type="number" class="form-control" data-provide="timepicker" >
                                    <div class="input-group-append">
                                        <span class="input-group-text"><b>BTC</b></span>
                                    </div>
                                </div>
                                <div id="message"></div>
                                <div>
                                    <input class="btn btn-success btn-block mt-3" type="submit" value="Make Deposit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>

        <!-- end modal -->
@endsection
