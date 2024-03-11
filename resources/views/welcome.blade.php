@extends ('layouts.main')

@section ('title', 'Aaron Store - Artigos Esportivos ltda.')

@section('content')

<body>
    <main>
        <div id="text-container" class="row">
            <div class="cards-container">
                <h1>Bem-vindo à Aaron Store</h1>
                <p>
                    Explore nossa seleção cuidadosamente escolhida de camisas esportivas de alta qualidade,
                    projetadas para desempenho e estilo. Trabalhamos com marcas renomadas para garantir conforto e durabilidade em cada peça.
                    Navegue em nossa loja hoje e encontre a camisa perfeita para expressar seu estilo enquanto você pratica seu esporte favorito!
                </p>
            </div>
        </div>
        <div id="events-container" class="col-md-12">
            <h2 class="subtitle">Veja os produtos em destaque:</h2>
            <div id="cards-container" class="row">
                <div class="card col-md-3">
                    <img src="/img/KELCE_62_green.jpg" alt="Jersey Kelce 62 green">
                    <div class="card-body">
                        <p class="card-description">Philadelphia Eagles Kelce 62</p>
                        <h6 class="card-title">Jersey Philadelphia Eagles</h6>
                        <p class="card-price">R$ 299,99</p>
                        <a href="/" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>


@endsection
