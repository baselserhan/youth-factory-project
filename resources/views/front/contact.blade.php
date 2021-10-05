@extends('front.master')
@section('title', 'Contact-Us')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>{{ __('general.ContactTitle') }}</p>
                        <h1>{{ __('general.ContactPage') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2 style="text-align: center">{{ __('general.ContactText') }}</h2>
                        <p style="text-align: center; font-family: Tajawal; font-weight: bold">
                            {{ __('general.ContactDescription') }}
                        </p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <style>
                            input[type=submit],
                            input {
                                margin-top: 10px;
                            }

                            textarea {
                                margin-top: 10px;
                            }

                            .invalid-feedback {
                                font-size: 16px;
                            }

                        </style>
                        <form action="{{ route('contactSubmit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="{{ __('general.ContactNamePlaceholder') }}" name="name"
                                    id="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <input type="email" placeholder="{{ __('general.ContactEmailPlaceholder') }}" name="email"
                                    id="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                                <input type="tel" placeholder="{{ __('general.ContactPhonePlaceholder') }}" name="phone"
                                    id="phone" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <input type="text" placeholder="{{ __('general.ContactSubjectPlaceholder') }}"
                                    name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror"
                                    value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <textarea name="message" id="message" cols="20" rows="5"
                                    placeholder="{{ __('general.ContactMessagePlaceholder') }}"
                                    class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <input type="submit" value="{{ __('general.ContactSend') }}">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> {{ __('general.CompanyAdress') }}</h4>
                            <p style="font-family: Tajawal; font-weight: bold">{{ __('general.Adress') }}</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> {{ __('general.WorkHours') }}</h4>
                            <p style="font-family: Tajawal; font-weight: bold">{{ __('general.WorkHoursTitle') }}</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> {{ __('general.ContactPage') }}</h4>
                            <p style="font-family: Tajawal; font-weight: bold">{{ __('general.Phone') }}:
                                0598893600<br>{{ __('general.Email') }}:
                                abuaitah.co.2015@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p style="font-family: Tajawal; font-weight: bold"> <i class="fas fa-map-marker-alt"></i>
                        {{ __('general.Location') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
            class="embed-responsive-item"></iframe>
    </div>
    <!-- end google map section -->
@stop
