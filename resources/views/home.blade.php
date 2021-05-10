@extends('layout.main')

@section('main')
 <div class="box">   
    {{-- section pasta lunga --}}
    <section class="product-section">
        <h2>Le lunghe</h2>
        <div class="container">
            @foreach ($lunga as $pasta)
            <div class="box">
               <a href="{{route('prodotto', ['id' => $pasta['id']])}}"><img src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </section>
    {{-- /section pasta lunga --}}

    {{-- section pasta corta --}}
    <section class="product-section">
        <h2>Le corte</h2>
        <div class="container">
            @foreach ($corta as $pasta)
            <div class="box">
                <a href="{{route('prodotto', ['id' => $pasta['id']])}}"><img src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </section>
    {{-- /section pasta corta --}}

    {{-- section pasta cortissima --}}
    <section class="product-section">
        <h2>Le cortissime</h2>
        <div class="container">
            @foreach ($cortissima as $pasta)
            <div class="box">
                <a href="{{route('prodotto', ['id' => $pasta['id']])}}"><img src="{{$pasta['src']}}" alt=""></a>
            </div>
            @endforeach
        </div>
    </section>
    {{-- /section pasta corta --}}
</div>
@endsection