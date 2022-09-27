    @extends('layout.dcLayout')
    
    @section('myContent')
    
        <div class="dc-main">
            <div class="Jumbo">
                <img class="Jumbo" src="{{asset('images/jumbotron.jpg')}}">
            </div>

            <div class="MyComicsList">
                <h2>Current Series</h2>
                <div class="mydc-list">
                    <div class="mydc-inner">
                        <ul>
                            @foreach ($myComics as $comic)
                                <li>
                                    <img src="{{$comic['thumb']}}" alt="">
                                    <h4>{{$comic['title']}}</h4>
                                </li>
                            @endforeach
                        
                        </ul>
                    </div>
                    <div class="btn-load">
                        <a href="#">LOAD MORE</a>
                    </div>
                </div> 
            </div>
        </div>

        <section class="shopDiv">
        <div class="dc-shop">
      <ul>
            <li>
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="dc shop">   
                <a href="#" class="upperText">Digital Comics</a>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="dc shop">   
                <a href="#" class="upperText">Dc Merchandise</a>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="dc shop">   
                <a href="#" class="upperText">Subscriptions</a>
            </li>

            <li>
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="dc shop">   
                <a href="#" class="upperText">Comic Shop Locator</a>
            </li>

            <li>
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="dc shop">   
                <a href="#" class="upperText">Dc Power Visa</a>
            </li>
         </ul>
  </div>
        </section>
    @endsection