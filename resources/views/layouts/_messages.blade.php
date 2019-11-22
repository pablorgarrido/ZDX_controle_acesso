@if(Session::has('success'))

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{Session::get('success')}}
    </div>

@endif

@if(isset($errors) && !Session::has('notShowErrors'))
    @if(count($errors) > 0)

        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Erros:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li style="display: flex !important;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
@endif
