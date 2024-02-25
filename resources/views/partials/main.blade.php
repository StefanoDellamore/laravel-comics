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

                       <p>{{$comic['title']}}</p>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="button-comics">learn more</button>
            </div>
            
        </div>
    </div>

    <div class="my-container">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div>
                        immagine
                    </div>
                    <p>Digital Comics</p>
                </div>
            </div>
        </div>
    </div>
</div>
