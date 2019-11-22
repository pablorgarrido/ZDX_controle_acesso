@extends('layouts.app')
<?php
/**
 * @var \App\Participante $participante
 */
?>

@section('content')
    <div class="content">
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh ">
            @if(isset($participante))
                <div class="row mt-4">
                    <div class="col col-auto text-center">
                        <p class="h1">Bem Vindo</p>
                        <span class="h2 mb-3">{{$participante->nome}}</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col col-auto">
                        @if(isset($participante->foto))
                            <img src="{{$participante->avatar()}}" alt="" class="rounded-circle shadow">
                        @endif
                    </div>
                </div>
            @else

            @endif
            <div class="row">
                <div class="col col-auto">
                    <form id="formEnvio01" method="POST" action="{{route('postIndex')}}"
                          class="float-right my-auto ml-auto" hidden_>
                        @csrf
                        <div class="form-group">
                            <label>
                                <input id="identificador" name="identificador" type="text" class="form-control" value="5dd747114026a" maxlength="13" required autofocus>
                            </label>
                            <button class="btn btn-primary" type="submit">
                                Consultar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <span style="font-size: 4vmax;">Bem vindo</span>
            {{--<span class="text-center" style="font-size: 3vmax;">Acesso</span>--}}
            {{--<small class="text-muted" style="font-size: 1vmax;"><cite>Acesso</cite></small>--}}

        </div>
    </div>

    {{--<form id="Form" action="./js/filehandling.js" method="post">--}}
    {{--    <input id="here" maxlength="16" placeholder="scan..." type="text" tabindex="1" required autofocus>--}}
    {{--    <input id="subHere" type="submit">--}}
    {{--</form>--}}
    {{--<script src="https://code.jquery.com/jquery-2.2.4.js"></script>--}}



@endsection

@push("custom-scripts")
    <script>

        HTMLInputElementObject.addEventListener('input', function (evt) {
            something(this.value);
        });

        $('#identificador').(function () {
            if (this.value.length === 13) {
                $('#formEnvio01').submit();
            }
        });

        setTimeout(function () {
            window.location.reload(1);
        }, (5 * 1000));
    </script>
@endpush
