<header id="header">
    <div class="top">

        <div class="row">

            <div class=" d-flex justify-content-between align-items-center">
                <!-- <img src="{{ asset('images/content/logo.jpg') }}" alt="Company Logo" class="logo"> -->
                 <h1>LOGO</h1>
                <nav>
                    <ul class="d-flex justify-content-between align-items-center text-black">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/reviews') }}">Reviews</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="cta-button d-flex justify-content-between align-items-center">
                    <div class="left d-flex align-items-center justify-content-between">
                        <img src="{{ asset('images/content/icons/phone.png') }}" alt="Phone icon">
                        <p>(503) 378-7976</p>
                    </div>
                    <div class="right">
                        <a href="{{url('/contact')}}" class="btn">GET A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="bot text-center">
        <div class="row">
            <div class="txt ms-auto text-start">
                <h1>BANNER</h1>
            </div>
        </div>
    </div>
</header>