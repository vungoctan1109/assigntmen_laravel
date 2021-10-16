<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sweet Home</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="sweet-home-icon mb-5">
        <img src="https://image.shutterstock.com/image-vector/sweet-home-logo-icon-line-260nw-1475493461.jpg"
             width="200px" alt="">
    </div>
    <div class="row">
        <div class="col-9">
            <div class="sweet-home-link mt-2">
                <a href="#">Home |</a>
                <a href="#">Best Home |</a>
                <a href="#">Life style |</a>
                <a href="#">About us |</a>
                <a href="#">Contact us |</a>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                <input class="form-control py-2 border-right-0 border" type="search" value="Search"
                       id="example-search-input">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-9">
            <div class="row">
                @foreach($apartments as $apartment)
                <div class="col-4">
                    <div class="bg-white rounded shadow-sm"><img src="{{ $apartment->thumbnail }}"
                                                                 alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5><a href="#" class="text-dark">{{ $apartment->name }}</a></h5>
                            <p class="small text-muted mb-0">{{ $apartment-> description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <?php
            // config
            $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
            ?>

            @if ($apartments->lastPage() > 1)
                <ul class="pagination">
                    <li class="page-item {{ ($apartments->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $apartments->url(1) }}">First</a>
                    </li>
                    @if($apartments->currentPage() > 1)
                        <li class="page-item">
                            <a href="{{ $apartments->url($apartments->currentPage() - 1) }}">Previous</a>
                        </li>
                    @endif
                    @for ($i = 1; $i <= $apartments->lastPage(); $i++)
                        <?php
                        $half_total_links = floor($link_limit / 2);
                        $from = $apartments->currentPage() - $half_total_links;
                        $to = $apartments->currentPage() + $half_total_links;
                        if ($apartments->currentPage() < $half_total_links) {
                            $to += $half_total_links - $apartments->currentPage();
                        }
                        if ($apartments->lastPage() - $apartments->currentPage() < $half_total_links) {
                            $from -= $half_total_links - ($apartments->lastPage() - $apartments->currentPage()) - 1;
                        }
                        ?>
                        @if ($from < $i && $i < $to)
                            <li class="page-item {{ ($apartments->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $apartments->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                    @if($apartments->currentPage() < $apartments->lastPage())
                        <li class="page-item>
                                    <a href="{{ $apartments->url($apartments->currentPage() + 1) }}">Next</a>
                        </li>
                    @endif
                    <li class="page-item {{ ($apartments->currentPage() == $apartments->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $apartments->url($apartments->lastPage()) }}">Last</a>
                    </li>
                </ul>
            @endif
        </div>
        <div class="col-3">
            <div class="side-bar">
                <h4>Search By Area</h4>
                <ul>
                    <li>District 1</li>
                    <li>District 2</li>
                    <li>District 3</li>
                    <li>District 4</li>
                    <li>District 5</li>
                </ul>
                <h4>Search By Price</h4>
                <ul>
                    <li><10000$</li>
                    <li>10000 - 15000$</li>
                    <li>15000 - 30000$</li>
                    <li>30000 - 50000$</li>
                    <li>>50000$</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
