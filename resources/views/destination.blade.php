    {{-- <!DOCTYPE HTML>
    <html>

    @extends('layout.master')
    @include('layout.top-navbar')

    <head>
    <title>Hotel  A Hotel category Flat bootstrap Responsive  Website Template | Rooms :: w3layouts</title>
    <link href="{{ asset('dist\css\destination\bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{ asset('dist\css\destination\style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hotel Deluxe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('dist\js\destination.js\jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist\js\destination.js\login.js') }}"></script>
    <script src="{{ asset('dist\js\destination.js\jquery.easydropdown.js') }}"></script>
    <script src="{{ asset('dist\js\destination.js\wow.min.js') }}"></script>
    <link href="{{ asset('dist\css\destination\animate.css') }}" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
    </head>

    <body>
        <div class="banner">
            <div class="container_wrap">
              <h1>Where's your next adventure?</h1>
                 <div class="dropdown-buttons">
                         <div class="dropdown-button">
                           <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                           <option selected="selected" value="0">Dubai</option>
                           <option value="1">Australia</option>
                           <option value="2">Malaysia</option>
                           <option value="3">Netherlands</option>
                           <option value="4">Singapore</option>
                           <option value="5">United Kingdom</option>
                           <option value="6">United states</option>
                           <option value="7">Germany</option>
                           <option value="8">Switzerland</option>
                         </select>
                       </div>
                        <div class="dropdown-button">
                         <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                            <option value="0">All</option>
                           <option selected="selected" value="1">Hotels</option>
                           <option value="2">Apartments</option>
                           <option value="3">Resorts</option>
                           <option value="4">Villa</option>
                           <option value="5">Cabin</option>
                           <option value="6">Cottages</option>
                         </select>
                        </div>
                    </div>
                <div class="dropdown-buttons">
                    <div class="dropdown-button">
                        <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                            <option value="0">All</option>
                            <option selected="selected" value="1">Tour</option>
                            <option value="2">Family</option>
                            <option value="3">Couples</option>
                            <option value="4">Travel </option>
                            <option value="5">Business</option>
                        </select>
                    </div>
                    <div class="dropdown-button">
                        <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
                            <option value="0">All</option>
                            <option selected="selected" value="1">5 Stars</option>
                            <option value="2">4 Stars</option>
                            <option value="3">3 Stars</option>
                        </select>
                    </div>
                </div>
               <form>
                   <input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
                   <div class="contact_btn">
                      <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Search"></label>
                   </div>
               </form>
                  <div class="clearfix"> </div>
            </div>
       </div>
         <div class="content_top">
            <div class="container">
              <div class="col-md-4 bottom_nav">
                 <div class="content_menu">
                   <ul>
                       <li class="active"><a href="#">Recommended</a></li>
                       <li><a href="#">Latest</a></li>
                       <li><a href="#">Highlights</a></li>
                   </ul>
               </div>
           </div>
           <div class="col-md-4 content_dropdown1">
              <div class="content_dropdown">
                  <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
                           <option value="0">All</option>
                           <option value="1">Tour</option>
                           <option value="2">Family</option>
                           <option value="3">Couples</option>
                           <option value="4">Travel </option>
                           <option value="5">Business</option>
                   </select>
                </div>
                <div class="content_dropdown">
                  <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
                           <option value="0">All</option>
                           <option value="1">Urban</option>
                           <option value="2">Suburban</option>
                           <option value="4">Extremes</option>
                           <option value="5">hendrerit </option>
                   </select>
                  </div>
           </div>
           <div class="col-md-4 filter_grid">
               <ul class="filter">
                   <li class="fil">Filter :</li>
                   <li><a href=""> <i class="icon1"> </i> </a></li>
                   <li><a href=""> <i class="icon2"> </i> </a></li>
                   <li><a href=""> <i class="icon3"> </i> </a></li>
                   <li><a href=""> <i class="icon4"> </i> </a></li>
                   <li><a href=""> <i class="icon5"> </i> </a></li>
               </ul>
           </div>
          </div>
      </div>

    <div class="living_middle">
        <div class="container">
                <h2 class="title block-title">Available Packages</h2>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                    <img src="{{ asset('dist\destination-images\e4.jpg') }}" class="img-responsive" alt=""/>
                    <span class="sale-box">
                    <span class="sale-label">HOTEL</span>
                    </span>
                    </a>
                    <div class="living_desc">
                    <h3><a href="#">Carlton Hotel</a></h3>
                    <p>Stay in the heart of Dubai. Housed with the best facilities, you'll be sure to have the best visit to Dubai.</p>
                    <a href="single.html" class="btn3">Book</a>
                    <p class="price">RM2,700.00/night</p>
                    </div>
                    <table border="1" class="propertyDetails">
                    <tbody><tr>
                    <td><img src="{{ asset('dist\destination-images\area.png') }}" alt="" style="margin-right:7px;">2,412m</td>
                    <td><img src="{{ asset('dist\destination-images\bed.png') }}" alt="" style="margin-right:7px;">6 Beds</td>
                    <td><img src="{{ asset('dist\destination-images\drop.png') }}" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                    <img src="{{ asset('dist\destination-images\e3.jpg') }}" class="img-responsive" alt=""/>
                    <span class="sale-box">
                    <span class="sale-label">RESORT</span>
                    </span>
                    </a>
                    <div class="living_desc">
                    <h3><a href="#">Hilton Resort</a></h3>
                    <p>Provides 5-stars accomadation. Highly rated for family trips with in-house specialties. </p>
                    <a href="single.html" class="btn3">Book</a>
                    <p class="price">RM1,890.00/night</p>
                    </div>
                    <table border="1" class="propertyDetails">
                    <tbody><tr>
                    <td><img src="{{ asset('dist\destination-images\area.png') }}" alt="" style="margin-right:7px;">1,795m</td>
                    <td><img src="{{ asset('dist\destination-images\bed.png') }}" alt="" style="margin-right:7px;">4 Beds</td>
                    <td><img src="{{ asset('dist\destination-images\drop.png') }}" alt="" style="margin-right:7px;">2 Baths</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                    <img src="{{ asset('dist\destination-images\l1.jpg') }}" class="img-responsive" alt=""/>
                    <span class="sale-box">
                    <span class="sale-label">VILLA</span>
                    </span>
                    </a>
                    <div class="living_desc">
                    <h3><a href="#">Golden Palace Villa</a></h3>
                    <p>The ideal travel spot for beach enthusiasts. An 11-minute walk from Aquavanture Beach and 0.7 miles from Nasimi Beach.</p>
                    <a href="single.html" class="btn3">Book</a>
                    <p class="price">RM1,450.00/night</p>
                    </div>
                    <table border="1" class="propertyDetails">
                    <tbody><tr>
                    <td><img src="{{ asset('dist\destination-images\area.png') }}" alt="" style="margin-right:7px;">1,462m</td>
                    <td><img src="{{ asset('dist\destination-images\bed.png') }}" alt="" style="margin-right:7px;">3 Beds</td>
                    <td><img src="{{ asset('dist\destination-images\drop.png') }}" alt="" style="margin-right:7px;">1 Baths</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
            </div>
    </div>

    <div class="footer">
        <div class="container">
        <div class="footer_top">
        <h3>Subscribe to our newsletter</h3>
        <form>
            <span>
                <i><img src="{{ asset('dist\destination-images\mail.png') }}" alt=""></i>
                <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
                <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
                <div class="clearfix"> </div>
            </span>
        </form>
        </div>
        </div>
    </div>
    </body>
    </html> --}}

@extends('master')
@section('container')

<h2 class="topPlace">Book your Destination</h2>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\langkawi.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Langkawi</h5>
          <p class="card-text">Langkawi is an archipelago off Malaysia's northwest coast. It's known for its beaches and clear waters. On the main island, also called Langkawi, the SkyCab cable car runs to and from the top of Machincang mountain. From the summit, the SkyBridge curves out above the trees. Trails run through the jungle to Telaga Tujuh, or the Seven Wells Waterfall. Kilim Karst Geoforest Park is home to mangrove forests and caves</p>
          <h5>3 days 2 nights: 9999RM</h5>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\penanghill.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Penang Hill</h5>
          <p class="card-text">Penang Hill is a hill resort comprising a group of peaks on Penang Island, Malaysia. It is located within the Air Itam suburb, 9 km (5.6 mi) west of the center of George Town. Penang Hill is also known by the Malay name Bukit Bendera. Penang Hill covers a number of hills, with the highest point at Western Hill which is 833 m (2,733 ft) above sea level. The hill stands out prominently from the lowlands as a hilly and forested area.The top of the hill is accessible via the Penang Hill Railway from its base station at Hill Railway Station Road.</p>
          <h5>3 days 2 nights: 1099RM</h5>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\Malacca.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Malacca City</h5>
          <p class="card-text">Malacca City (also spelled Melaka) is the capital of the coastal state of Malacca, in southwestern Malaysia. At its center, Jonker Street, Chinatown's main thoroughfare, is known for antique shops and its night market. Nearby, the 17th-century Chinese Cheng Hoon Teng temple has ornate decorations and multiple prayer halls. A green, 3-tiered roof tops the 18th-century, Javanese-influenced Kampung Kling Mosque</p>
          <h5>3 days 2 nights: 1299RM</h5>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
  </div>

<br>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\batu-caves.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Batu Caves</h5>
          <p class="card-text">Batu Caves is a limestone hill that has a series of caves and cave temples in Gombak, Selangor, Malaysia.The town nearby is named after the Batu Caves limestone formation..The cave is one of the most popular Hindu shrines outside India, and is dedicated to Lord Murugan. It is the focal point of the Tamil festival of Thaipusam in Malaysia.</p>
          <h5>3 days 2 nights: 799RM</h5>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\pangkor.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pangkor Island</h5>
          <p class="card-text">Pangkor Island lies just off the west coast of Peninsular Malaysia. It’s known for beaches like Teluk Nipah, Coral Bay and Pasir Giam, which connects to coral-ringed Giam Island at low tide.</p>
          <h5>3 days 2 nights: 1199RM</h5>
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('dist\home\Genting.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Genting Highlands</h5>
          <p class="card-text">Genting Highlands is an integrated resort development comprising hotels, casinos, shopping malls and the latest Skyworlds Theme Park in Pahang, perched on the peak of Gunung Ulu Kali at 1,800 meters high. Nestled near the border of Selangor about 35km away from Kuala Lumpur, Genting represents a popular weekend getaway from KL, connected by highways, roads and cable car via Awana Skyway.</p>
          <h5>3 days 2 nights: 899RM</h5>
        </div>

        <div class="card-footer">
            <a class="btn btn-primary" href="booking" role="button">Book Now</a>
        </div>
      </div>
    </div>
  </div>


@endsection
