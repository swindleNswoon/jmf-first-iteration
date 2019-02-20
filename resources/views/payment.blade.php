@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Choose Payment Method</h2>
        <div class="row">
            <div class="col-md-6">
                <img src={{asset('img/paypallogo.png')}}>
                <div class="container paypal-container">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="M2D5F3CSSA7AQ" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" class="paypal-btn"/>
                    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                </form>
                </div>
            </div>
            <div class="col-md-6">
                <img  class="credit img-fluid" src={{asset('img/creditcard.png')}}>
                <p>Direct Credit Card Processing Coming Soon!</p>
            </div>
        </div>
    </div>
@endsection
