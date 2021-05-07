<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Molisana</title>
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        {{-- /google font --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        {{-- header --}}
        @include('parts.header')
        {{-- /header --}}

        {{-- nav --}}
        @include('parts.nav')
        {{-- /nav --}}

        {{-- main --}}
        <main>
            {{-- section pasta lunga --}}
            <section class="product-section">
                <h2>Le lunghe</h2>
                <div class="container">
                    @foreach ($lunga as $pasta)
                    <div class="box">
                        <img src="{{$pasta['src']}}" alt="">
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
                        <img src="{{$pasta['src']}}" alt="">
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
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </section>
            {{-- /section pasta corta --}}
        </main>
        {{-- /main --}}
    </body>
</html>