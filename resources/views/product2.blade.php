<html>
    <body>
        <h1>Produk kami</h1>
        <ul>
            @foreach ($produkss as $produk)
                <li><a href=#>{{ $produk }}</a></li>
            @endforeach
        </ul>
    </body>
</html>