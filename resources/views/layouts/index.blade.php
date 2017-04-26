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
                </div>
                @if (Auth::guest())
                @else
                    <div class="panel panel-default">
                        <div class="entrypanel">
                            <form name="sentMessage" id="entryolustur" action="entry-olustur" data-parsley-validate method="post" novalidate>
                                {{csrf_field()}}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <input type="text" name="content" class="form-control" id="icerik" required data-validation-required-message="ne düşünüyorsun..." aria-required="true">
                                </div>
                                <button type="submit" class="btn btn-default">yolla</button>
                            </form>
                        </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection