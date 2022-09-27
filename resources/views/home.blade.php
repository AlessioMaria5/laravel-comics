    @extends('layout.dcLayout')
    @section('myContent')

    <!-- CSS -->
    
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
    @endsection