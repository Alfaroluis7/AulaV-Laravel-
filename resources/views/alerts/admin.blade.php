@if (session('status'))
            <div class="alert alert-success"  data-dismiss="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('Error'))
            <div class="alert alert-danger"  data-dismiss="alert">
                {{ session('Error') }}
            </div>
        @endif
        @if (session('Borrar'))
            <div class="alert alert-danger"  data-dismiss="alert">
                {{ session('Borrar') }}
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif