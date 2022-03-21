@extends('layouts.User.userLayout')

@section('content')


<section class="contact-section section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-info-wrapper">
                    <div class="contact-info">
                        <h4>Get In Touch</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur quibusdam enim expedita sed nesciunt incidunt </p>
                        <ul class="contact-details">
                            <li>
                                <span class="title">Address</span>
                                <span class="desc">795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</span>
                            </li>
                            <li>
                                <span class="title">Phone</span>
                                <span class="desc">+440 875369208 - Office <br> +440 353363114 - Fax</span>
                            </li>
                            <li>
                                <span class="title">Email</span>
                                <span class="desc">support@sitename.com <br> info@sitename.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('success'))
                        <div class="alert alert-success">
                            <span>Your Message Was Sent Thank You</span>
                        </div>
                @endif
                <div class="contact-form-area">
                    <form method="post" action="/contact" class="contact-form">
                        @csrf
                        <div class="input-item">
                            <input type="text" name="name" placeholder="Full Name">
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="input-item">
                            <input type="text" name="phone" placeholder="Your Phone Number">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                        <div class="input-item">
                            <input type="email" name="email" placeholder="Email Address">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="input-item">
                            <input type="text" name="company" placeholder="Your Company Name">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="input-item">
                            <input type="text" name="country" placeholder="Your country Name">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="input-item">
                            <textarea name="message" placeholder="Type Here Message"></textarea>
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div>
                            <button type="submit" class="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
