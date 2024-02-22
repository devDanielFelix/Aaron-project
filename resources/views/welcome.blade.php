@extends ('layouts.main')

@section ('title', 'Aaron Store - Artigos Esportivos ltda.')

@section('content')

<body>
    <main>
        <div id="events-container" class="row">
            <div class="cards-container">
                <h5>Bem-vindo à Aaron Store - Seu Destino para Camisas Esportivas Premium! </h5>
                <p>
                    Explore nossa seleção cuidadosamente escolhida de camisas esportivas de alta qualidade,
                    projetadas para desempenho e estilo. Trabalhamos com marcas renomadas para garantir conforto e durabilidade em cada peça.
                    Navegue em nossa loja hoje e encontre a camisa perfeita para expressar seu estilo enquanto você pratica seu esporte favorito!
                </p>
            </div>
        </div>
        <p>Veja os produtos destaques:</p>
        <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="/img/KELCE_62_green.jpg" alt="Jersey Kelce 62 green">
            <div class="card-body">
                <p class="card-description">Philadelphia Eagles jersey Kelce 62.</p>
                <h5 class="card-title">Camisa</h5>
                <p class="card-price">R$ 299,99</p>
                <a href="/" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        </div>
    </main>
</body>


@endsection
