@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <div class="banner-section position-relative">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">{{ __('Dashboard') }}</h3>
                        <p>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </p>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="{{asset('assets/images/5.png')}}" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Breadcrumb -->

    <!-- Loan Calculation -->
    <div class="loan-section">
        <!-- Container -->
        <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-7 col-12 wow fadeInLeft">
                        <div class="loan-calculation-wrapper">
                            <div class="theme-title">
                                <h2>Check loan status, interest &amp; Installment.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo ante, auctor at sodales facilisis, tempus vitae sapien. </p>
                                @include('inc.messages')
                                @if(count($transactions) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Reference No</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->payref}}</td>
                                        <td>₦{{number_format($transaction->amount, 2)}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                        @if($transaction->gresponse == 'success')
                                        <td><span class="alert-success">&nbsp {{$transaction->gresponse}} &nbsp</span></td>
                                        @else
                                            <td><span class="alert-danger">&nbsp {{$transaction->gresponse}} &nbsp</span></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </table>
                                @else
                                    <p>No Transaction History</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- Col -->
                    <div class="col-lg-5 col-12 wow fadeInRight">
                        <div class="loan-confirm-form">
                            <p>Account Balance</p>
                            <h3 class="title">₦ {{number_format($total_amount, 2)}}</h3>
                            <p></p>
                            <a href="/transactions/create" class="tran3s apply-button">ADD MONEY</a>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Loan Calculation -->


@endsection
