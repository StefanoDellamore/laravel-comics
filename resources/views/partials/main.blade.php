@php
    $linksMain = [
        [
        "name" => "digital comics",
        "image" => "/img/buy-comics-digital-comics.png",
        ],
        [
        "name" => "dc merchandise",
        "image" => "/img/buy-comics-merchandise.png",
        ],
        [
        "name" => "subscription",
        "image" => "/img/buy-comics-merchandise.png",
        ],
        [
        "name" => "comic shop locator",
        "image" => "/img/buy-comics-merchandise.png",
        ],
        [
        "name" => "dc power visa",
        "image" => "/img/buy-comics-merchandise.png",
        ],
        ]
@endphp


<div>
    {{-- Sfondo con immagine --}}
    <div class="my-container jumbotron">
        
    </div>

    <div class="my-container container-comics">
        <div class="container">

            <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">                
                    <div class="card-comic">
                       <div class="thumb-comic">
                            <img src="{{ $comic['thumb'] }}" alt="">
                       </div>

                       <a>{{$comic['title']}}</a>
                    </div>
                </div>
            @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <button class="button-comics">learn more</button>
            </div>
            
        </div>
    </div>

    <div class="my-container container-link">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($linksMain as $linkmain)
                <div class="col-2 d-flex align-items-center">
                    <div class="container-link-img">
                        <img src="{{ $linkmain['image'] }}" alt="">
                    </div>
                    <p>{{$linkmain['name']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
