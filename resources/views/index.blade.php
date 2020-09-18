
@extends('layouts.main')

@section('content')

    <main>
        <div class="lunghe">
            <h2>LE LUNGHE</h2>
            <div class="container">

                @foreach ($data as $pasta)
                    @if ($pasta['tipo'] == 'lunga')
                        <div class="card">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="corte">
            <h2>LE CORTE</h2>
            <div class="container">

                @foreach ($data as $pasta)
                    @if ($pasta['tipo'] == 'corta')
                        <div class="card">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="cortissime">
            <h2>LE CORTISSIME</h2>
            <div class="container">

                @foreach ($data as $pasta)
                    @if ($pasta['tipo'] == 'cortissima')
                        <div class="card">
                            <img src="{{ $pasta['src'] }}" alt="">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </main>
@endsection
