@extends('app')

@section('content')
    {!! Form::label('estado', 'Estados:') !!}
    {!! Form::select('estado', $estados) !!}

    {!! Form::label('cidade', 'Cidades:') !!}
    {!! Form::select('cidade', []) !!}

@endsection

@section('post-script')
    <script type="text/javascript">
        $('select[name=estado]').change(function () {
            var idEstado = $(this).val();

            $.get('/get-cidades/' + idEstado, function (cidades) {
                $('select[name=cidade]').empty();
                $.each(cidades, function (key, value) {
                    $('select[name=cidade]').append('<option value=' + value.id + '>' + value.cidade + '</option>');
                });
            });
        });

    </script>
@endsection
