@extends('teknida')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!--
                            Contollerdan

                            $topic = App\Topic::all();

                            '<h2>' echo $entry->content .  '-' . $entry->entryUser->username . '<br>' ; '<\h2>'




                        -->



                    </div>
                    @if (Auth::guest())
                    @else

                </div>
                <div class="panel panel-default">
                    <div class="entrypanel">
                        <form name="sentMessage" id="entryolustur" action="entry-Olustur" method="post" novalidate>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <input type="text" name="icerik" class="form-control" id="icerik" required data-validation-required-message="ne düşünüyorsun...">
                            </div>

                            <button type="submit" class="btn btn-default">yolla</button>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection