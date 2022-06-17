
 @extends('master')
 @section('container')

     {{-- <img src="{{ asset('dist\home\templet.jpg') }}" style="width: 100%" alt="Discover Malaysia"> --}}
     <div class="home">

        <h1>Discover Malaysia</h1>
        <p>Malaysia is a Southeast Asian country occupying parts of the Malay Peninsula and the island of Borneo. It's known for its beaches, rainforests and mix of Malay, Chinese, Indian and European cultural influences. The capital, Kuala Lumpur, is home to colonial buildings, busy shopping districts</p>

     </div>

     <h1 class="topPlace">Top Places</h1>

     {{-- card --}}

      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="{{ asset('dist\home\langkawi.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Langkawi</h5>
              <p class="card-text">Langkawi is an archipelago off Malaysia's northwest coast. It's known for its beaches and clear waters. On the main island, also called Langkawi, the SkyCab cable car runs to and from the top of Machincang mountain. From the summit, the SkyBridge curves out above the trees. Trails run through the jungle to Telaga Tujuh, or the Seven Wells Waterfall. Kilim Karst Geoforest Park is home to mangrove forests and caves</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('dist\home\penanghill.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Penang Hill</h5>
              <p class="card-text">Penang Hill is a hill resort comprising a group of peaks on Penang Island, Malaysia. It is located within the Air Itam suburb, 9 km west of the center of George Town. Penang Hill is also known by the Malay name Bukit Bendera. Penang Hill covers a number of hills, with the highest point at Western Hill which is 833 m above sea level. The hill stands out prominently from the lowlands as a hilly and forested area.The top of the hill is accessible via the Penang Hill Railway from its base station at Hill Railway Station.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('dist\home\Malacca.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Malacca City</h5>
              <p class="card-text">Malacca City is the capital of the coastal state of Malacca, in southwestern Malaysia. At its center, Jonker Street, Chinatown's main thoroughfare, is known for antique shops and its night market. Nearby, the 17th-century Chinese Cheng Hoon Teng temple has ornate decorations and multiple prayer halls.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{ asset('dist\home\batu-caves.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">KLCC</h5>
              <p class="card-text">Batu Caves is a limestone hill that has a series of caves and cave temples in Gombak, Selangor, Malaysia.The town nearby is named after the Batu Caves limestone formation..The cave is one of the most popular Hindu shrines outside India, and is dedicated to Lord Murugan. It is the focal point of the Tamil festival of Thaipusam in Malaysia.</p>
            </div>
          </div>
        </div>
      </div>


      <h1 class="homeLink">To see details of packages please <a href="destination"> Click Here</a></h1>

 @endsection
