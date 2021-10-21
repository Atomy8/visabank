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
                        <h3 class="title">TRANSACTIONS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="{{asset('assets/images/9.png')}}" alt="img" />
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

    <!-- Privacy Policy -->
    <div class="privacy-policy-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-12 col-md-12">
                    <h2 class="title mb-0">Privacy <span>Policy</span></h2>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row mt-3">
                <!-- col -->
                <div class="col-lg-12 col-md-12">
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
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Privacy Policy -->

@endsection
