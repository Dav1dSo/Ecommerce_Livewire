<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.bunny.net">
<livewire:nav.nav />
<div style="margin-top: 5%; margin-left: 10vw">
    <a href="/" class="text-decoration-none text-dark bg-body-tertiary mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
        </svg> Voltar
    </a>
</div>
<div style="padding-top: 5vh"  class="d-flex justify-content-center">
    <div class="card col-md-8 p-5">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{url("$product_id->image")}}"
                    class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <p class="card-title mb-4">{{$product_id->categorie}}</p>
                    <h2>{{$product_id->title}}</h2>
                    <h4><strong>R$ {{ number_format((float) $product_id->price, 2) }}</strong></h4>
                    <p class="card-text">Estoque: {{$product_id->stock}}</p>
                    <h4>Descrição</h4>
                    <h5>{{$product_id->description}}</h5>
                    <button type="button" class="btn btn-secondary btn-lg btn-block mt-4">Adicionar ao carrinho</button>
                </div>
            </div>
        </div>
    </div>
</div>
