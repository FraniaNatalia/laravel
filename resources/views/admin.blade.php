@extends('layouts.app')
@section('pageTitle', 'Admin - ')
@section('content')
    <section style="background: black;">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 30px;position: relative; top: 15px;">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5" style="text-align: left;">
                        <a href="/" style="text-transform: none; color: #999; text-decoration: none;">CreativeOBD.nl</a><span style="color: white;"> &#187; Admin</span>
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

            <div class="row d-flex" style="padding-left: 25%; padding-top: 15%; padding-bottom: 11%;">
                <div class="p-5" style="padding-left: 17%; margin-bottom: 5%;">
                    <img alt="logo" src="/images/logo.png">
                </div>
                {{ Form::open() }}
                <div style="height: 20px;">
                    <span style="font-weight: 400;font-size: 12px;color: black;margin: 0;padding: 0;text-transform: none; margin-right: 73px;">Login:</span> <?php echo Form::text('username', ''); ?>
                </div>
                <br>
                <div style="height: 20px;">
                    <span style="font-weight: 400;font-size: 12px;color: black;margin: 0;padding: 0;text-transform: none; margin-right: 40px;">Wachtword:</span> <?php echo Form::password('password', ''); ?>
                </div>
                <br>
                <div class="" style="margin-left: 110px;">
                    <?php echo Form::submit('Login'); ?>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </section>
@endsection