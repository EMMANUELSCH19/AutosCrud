    <link rel="stylesheet" href="../css/form.css">

    <form action="{{url('/autos')}}" method="post">
        @csrf
        <div class="form-container">
            @include('form', ['modo' => 'Crear'])
        </div>
    </form>