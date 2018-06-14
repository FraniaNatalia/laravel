@extends('layouts.app')
@section('pageTitle', 'Contact - ')
@section('content')
    <section style="background: black;">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 30px;position: relative; top: 15px;">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5" style="text-align: left;">
                        <a href="/" style="text-transform: none; color: #999; text-decoration: none;">CreativeOBD.nl</a><span style="color: white;"> &#187; Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section bg-primary text-white" style="background: none; border-bottom: 1px;border-bottom-style: dashed;border-bottom-color: #e5e5e5; margin-bottom: 30px; margin-top: 20px;">
        <div class="container text-center" style="height: 1px;">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center" style="border-bottom: 0px;border-bottom-style: dashed;border-bottom-color: #e5e5e5; margin-bottom: 15px;">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5" style="text-align: left;">
                        <h2 class="display-4" style="text-transform: none; color: #404040; font-weight: 700;">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="text-align: left;">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <h2 style="font-weight: 400;font-size: 18px;color: #333;padding: 0 0 1-px;text-transform: none;">CreativeOBD.nl</h2>
                            <p style="font-weight: 400;font-size: 12px;color: gray;margin: 0;padding: 0;text-transform: none;">Heinsbergerweg 28a</p>
                            <p style="font-weight: 400;font-size: 12px;color: gray;margin: 0;padding: 0;text-transform: none;">6074AD, Melick</p>
                            <p style="font-weight: 400;font-size: 12px;color: gray;margin: 0;padding: 0;text-transform: none;">06-58964938</p>
                            <p style="font-weight: 400;font-size: 12px;color: #1792dc;margin: 0;padding: 0;text-transform: none;">info@creativeobd.nl</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align: left;">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <h2 style="font-weight: 400;font-size: 18px;color: #333;padding: 0 0 1-px;text-transform: none;">Olaf Donajgrodzki</h2>
                            <p style="font-weight: 400;font-size: 12px;color: gray;margin: 0;padding: 0;text-transform: none;"><b>Managing directeur</b></p>
                            <br>
                            <p style="font-weight: 400;font-size: 12px;color: gray;margin: 0;padding: 0;text-transform: none;">06-58964938</p>
                            <p style="font-weight: 400;font-size: 12px;color: #1792dc;margin: 0;padding: 0;text-transform: none;">olaf@creativeobd.nl</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align: left;">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <div style="width: 100%"><iframe width="100%" height="320" src="https://maps.google.com/maps?width=100%&amp;height=320&amp;hl=en&amp;q=Heinsbergerweg%2028a%20Melick+(CreativeOBD%20Interactief%20bureau)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section bg-primary text-white" style="background: none; border-bottom: 1px;border-bottom-style: dashed;border-bottom-color: #e5e5e5; margin-top: 30px; margin-bottom: 30px;">
        <div class="container text-center" style="height: 1px;">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class=".col-12 .col-sm-6 .col-md-8">
                    <h2 style="font-weight: 400;font-size: 18px;color: #333;padding: 0 0 20px;text-transform: none;">Neem contact met ons!</h2>
                    {{ Form::open() }}
                    <div style="height: 20px;">
                        <span style="font-weight: 400;font-size: 12px;color: black;margin: 0;padding: 0;text-transform: none; margin-right: 87px;">Je email:</span> <?php echo Form::text('email', ''); ?>
                    </div>
                    <br>
                    <div style="height: 20px;">
                        <span style="font-weight: 400;font-size: 12px;color: black;margin: 0;padding: 0;text-transform: none; margin-right: 40px;">Mobiel nummer:</span> <?php echo Form::text('email', ''); ?>
                    </div>
                    <br>
                    <div>
                        <span style="font-weight: 400;font-size: 12px;color: black;margin: 0;padding: 0;text-transform: none; margin-right: 89px;">Inhoud:</span> <?php echo Form::textarea('notes'); ?>
                    </div>
                    <div class="" style="margin-left: 135px;">
                       <?php echo Form::submit('Stuur'); ?>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection