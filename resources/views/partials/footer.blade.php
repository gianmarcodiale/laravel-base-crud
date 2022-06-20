@php
$footer_links = [
    [
        'title' => 'DC COMICS',
        'links' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
    ],
    [
        'title' => 'SHOP',
        'links' => ['Shop DC', 'Shop DC Collectibles'],
    ],
    [
        'title' => 'DC',
        'links' => ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'],
    ],
    [
        'title' => 'SITES',
        'links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
    ],
];

//dd($footer_links);

@endphp



<footer id="site_footer">
    <div class="container">
        <div class="row row-cols-2">
            <div class="col">
                <div class="row pt-5">
                    @foreach ($footer_links as $item)
                        <div class="col">
                            <h3 class="text-white">{{ $item['title'] }}</h3>
                            @foreach ($item['links'] as $links)
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="">{{ $links }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col dc_logo">
            </div>
        </div>
    </div>
</footer>
