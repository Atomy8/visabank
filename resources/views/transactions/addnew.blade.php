@extends('layouts.app')

@section('content')

    <!-- Loan Form -->
    <div class="loan-form-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Fund Your Wallet</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.
                            Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

            <div class="loan-form">
                <form method="POST" action="{{ 'store'}}" enctype="multipart/form-data">
                    @csrf
                    <!--row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" class="form-control" name="fullname" readonly value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" name="amount" class="form-control" placeholder="Amount">
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button type="submit" class="default-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Loan Form -->

    <!-- Cta -->
    <div class="cta-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta text-white">#get in touch</h5>
                                <h2 class="section__title">Ready to get started ?</h2>
                                <p class="section__sub">Speak to a Bnker specialist at (800-123-1234)</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a href="contact.html" class="btn cta-btn">
                                    Request Call Back <span class="la la-caret-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Cta -->

@endsection
