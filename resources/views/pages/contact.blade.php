@extends('layouts.master')

@section('content')

    <section class="contact-page-container one-whole float-left">
        <p class="experience-header">Contact Information</p>
        @include('errors.status')
        <div class="contact-info-container one-half float-left">
            <div class="contact-info-list">
                <p><u>My Info</u></p>
                <p>Phone: (708) 250-8606</p>
                <p>Email: kldavis.244@gmail.com</p>
                <p>Please feel free to contact me via email or phone. Alternatively, you can also fill out the form on this page to get in touch!</p>
            </div>
        </div>

        <div class="contact-form-container one-half float-left">
            {!! Form::open(['url' => 'send-email', 'method' => 'GET', 'class' => 'contact-form', 'role' => 'form']) !!}
            <div class="fields-container">

                <div class="one-whole float-left contact-form-row">
                    <div class="one-third float-left input-margin">
                        <div class="one-whole float-left">
                            {!! Form::text('name', '', array('class' => 'form-control $error', 'placeholder' => 'Name')) !!}
                            @if ($errors->has('name'))
                                <span class="has-error">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="one-third float-left input-margin">
                        <div class="one-whole float-left">
                            {!! Form::text('email', '', array('class' => 'form-control $error', 'placeholder' => 'Email')) !!}
                            @if ($errors->has('email'))
                                <span class="has-error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="one-third float-left">
                        <div class="one-whole float-left">
                            {!! Form::text('phone', '', array('class' => 'form-control $error', 'placeholder' => 'Phone')) !!}
                            @if ($errors->has('phone'))
                                <span class="has-error">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="one-whole float-left ">
                    <div class="one-whole float-left">
                        {!! Form::textarea('message', '', array('class' => 'form-control $error', 'placeholder' => 'Message')) !!}
                        @if ($errors->has('message'))
                            <span class="has-error">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                </div>

                <div class="one-whole float-left">
                    <div class="one-whole float-left form-submit">
                        <input class="btn one-half contact-submit" type="submit" value="Submit">
                    </div>
                </div>

            </div>
            {!! Form::close() !!}
        </div>

        <div class="return-home-container one-whole float-left">
            <a class="return-home" href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To The Cockpit</a>
        </div>
    </section>

@stop