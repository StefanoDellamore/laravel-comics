@php 
    $linksFooter = [
        'DC COMICS'=>[
            'Characters',
            'Comics',
            'Movie',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        'DC'=>[
            'Terms Of Use',
            'Privacy policy(New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
            ],
        'SITES'=>[
            'DC',
            'MAD Magazine',
            'DC Universe',
            'DC Power Visa'
            ],
        'SHOP'=>[
            'Shop DC',
            'Shop DC collectibles'
            ]
        ]
@endphp



<footer>
    <div class="my-container">
        <div class="container d-flex justify-content-between">
            <div class="container-left">
                <nav class="d-flex">
                    <ul>
                    <h3>DC Comics</h3>
                        @foreach ($linksFooter['DC COMICS'] as $singleLink)
                        <li>
                            <a href="">{{ $singleLink }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <ul>
                    <h3>SHOP</h3>
                        @foreach ($linksFooter['SHOP'] as $singleLink)
                        <li>
                            <a href="">{{ $singleLink }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <ul>
                    <h3>DC</h3>
                        @foreach ($linksFooter['DC'] as $singleLink)
                        <li>
                            <a href="">{{ $singleLink }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <ul>
                    <h3>Sities</h3>
                        @foreach ($linksFooter['SITES'] as $singleLink)
                        <li>
                            <a href="">{{ $singleLink }}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
                
            </div>

            <div class="container-right">
                <div class="container-img-footer">
                    logo
                </div>
            </div>
        </div>
    </div>
</footer>
