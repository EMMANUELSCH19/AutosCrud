<link rel="stylesheet" href="../../css/form.css">

<form action="{{ url('/autos/'.$autos->id) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-container">
            @include('form', ['modo' => 'Editar'])
        </div>
</form>