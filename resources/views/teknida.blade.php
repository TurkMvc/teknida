<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TEKNIDA</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
<!-- navbar -->
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">teknida</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!-- Profil sayfası eklendiğinde gelecek
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>-->
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control typeahead" name="query" id="query" placeholder="başlık ara...">
                            </div>
                            <button type="submit" class="btn btn-primary">ara</button>
                        </fieldset>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <!--- Giriş yaptıysa gelmeyecek--->
                        @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">kayıt ol</a></li>
                        <li><a href="{{ url('/login') }}">giriş yap</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            çıkış yap
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
<!-- main -->
        <div class="container-fluid text-center">
            <div class="row content">

 <!--- sol frame --->
                <div class="col-sm-2 sidenav">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">gündem</a></li>
                        <li><a data-toggle="tab" href="#menu1">takip</a></li>
                    </ul>
                    <div class="tab-content text-left">
                        <div id="home" class="tab-pane fade in active">


                            @php
                            $current_page = 1;
                            $topicler = \App\Topic::all();

                            foreach ($topicler as $topic) {
                                echo $topic->name . '<br>' ;
                            }
                            @endphp
                            <ul class="pager">
                                <li class="previous @php echo $current_page == 1 ? "disabled":"" @endphp ">&larr; daha yeni</li>
                                <li class="next">daha eski &rarr;</li>
                            </ul>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>takip ettiklerim</h3>
                            @if (Auth::guest())
                                <h6 margin="auto">aboneliklerinizi görmek için giriş yapmanız gerekiyor.</h6>{{'asd'}}
                            @else
                                <!-- giriş yaptıktan sonra gelecek. kategori takip sistemi ile eklenecek-->
                            @endif
                        </div>
                    </div>
                </div>

<!--- topic--->
                <div class="col-sm-8 text-left">
                    <div class="row">
                        <div id="notification_area" class="col-sm-12 text-left">
                            @yield('content')
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>

