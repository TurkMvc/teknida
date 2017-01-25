<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TEKNIDA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">ara</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            <a href="{{ url('/login') }}">Giriş Yap</a>
                            <a href="{{ url('/register') }}">Üye Ol</a>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container-fluid">
    <div class="solframe col-md-3">
        <div id="solframetop">
            <ul class="nav nav-pills pull-left">
                <li><a href="#">gündem</a></li>
                <li><a href="#">kategori</a></li>
            </ul>
        </div>
        <ul id="solframeic">
            <li id="entryID1" data-ii="0">
                <a href="/k/entry-1" class=" " i="entryID1" dst="content">Ismini entry nameden alan entry 1</a>
            </li>
            <li id="entryID2" data-ii="0">
                <a href="/k/entry-2" class=" " i="entryID2" dst="content">Ismini entry nameden alan entry 2</a>
            </li>
            <li id="entryID3" data-ii="0">
                <a href="/k/entry-3" class=" " i="entryID3" dst="content">Ismini entry nameden alan entry 3</a>
            </li>
        </ul>
        <div class="pagination solmenu">
            <ul class="nav nav-pills pull-left">
                <li><a href="/index.php?sa=gundem">1</a></li>
                <li><a href="/index.php?sa=gundem&amp;sp=2">2</a></li>
                <li><a href="/index.php?sa=gundem&amp;sp=3">3</a></li>
                <li><a href="/index.php?sa=gundem&amp;sp=1" dst="/index.php?sa=gundem&amp;sp=1" rel="tooltip" data-original-title="sonraki sayfa">»</a></li>
            </ul>
        </div>
    </div>
    <div class="icerik col-md-9">
        <div id="content" role="main">
            <section id="content-body">
                <div id="baslik">
                    <h1> ENTRYDEN CEKILEN BASLIK ISMI</h1>
                    <ul id="entrylistesi">
                        <li>  <!--li nin içine yazarın id si entry id si gibi bilgiler gelecek-->
                            <div class="content">entry 1  </div>
                            <footer>
                                <div class="info">
                                    <a class="entry-date permalink" href="/entry/numarasi">10.05.2016 12:25</a>

                                    <a class="entry-yazari" href="/yazar/aeco">aeco</a>
                                </div>
                            </footer>
                        </li>
                        <li>  <!--li nin içine yazarın id si entry id si gibi bilgiler gelecek-->
                            <div class="content">ikinci entry  </div>
                            <footer>
                                <div class="info">
                                    <a class="entry-date permalink" href="/entry/numarasi">10.05.2016 14:19</a>

                                    <a class="entry-yazari" href="/yazar/aecomeister">aecomeister</a>
                                </div>
                            </footer>
                        </li>
                        <li>  <!--li nin içine yazarın id si entry id si gibi bilgiler gelecek-->
                            <div class="content">üçüncü entry  </div>
                            <footer>
                                <div class="info">
                                    <a class="entry-date permalink" href="/entry/numarasi">10.05.2016 15:22</a>

                                    <a class="entry-yazari" href="/yazar/aeco">aeco</a>
                                </div>
                            </footer>
                        </li>
                    </ul>
                    <div class="pager" data-currentpage="1" data-pagecount="5">
                        <select>
                            <option selected="selected">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>/<a href="?p=5" title="son sayfa" class="last">5</a>
                        <a href="?p=2" rel="next" title="sonraki sayfa" class="next">»</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>