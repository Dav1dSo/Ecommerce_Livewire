<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.bunny.net">
<livewire:header.navbar />
<div style="padding-top: 5vh">
    <div class="m-5">
        <a href="/" class="text-decoration-none text-dark bg-body-tertiary mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
            </svg> Voltar
        </a>
        <h1>SEU CARRINHO</h1>
        <p>Total (3 produtos) <strong>R$161,00</strong></p>
    </div>
    <div class="card m-5 p-3" style="max-width: 50vw;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/41xjw2DGg0L._AC_UL320_.jpg"
                    class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="text-danger" href="/removeItem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg>
                        </a>
                    </div>
                    <h5 class="card-title mb-4">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <input type="number" name="quantidade" class="col-md-1 text-center">
                    <strong class="d-flex justify-content-end">R$ 40,00</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="card m-5 p-3" style="max-width: 50vw;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/41xjw2DGg0L._AC_UL320_.jpg"
                    class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="text-danger" href="/removeItem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg>
                        </a>
                    </div>
                    <h5 class="card-title mb-4">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <input type="number" name="quantidade" class="col-md-1 text-center">
                    <strong class="d-flex justify-content-end">R$ 40,00</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="card m-5 p-3" style="max-width: 50vw;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/41xjw2DGg0L._AC_UL320_.jpg"
                    class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="text-danger" href="/removeItem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" fill="currentColor"
                                class="bi bi-trash3" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg>
                        </a>
                    </div>
                    <h5 class="card-title mb-4">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <input type="number" name="quantidade" class="col-md-1 text-center">
                    <strong class="d-flex justify-content-end">R$ 40,00</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="fixed-top col-md-4 card" style="margin-top: 14.4vh; margin-left: 60vw">
                <div class="card-body p-5">
                    <h5 class="card-title mb-4">RESUMO DO PEDIDO</h5>
                    <div class="d-flex justify-content-between p-2">
                        <h6 class="card-text">Subtotal de produtos</h6>
                        <h5>R$ 161, 00</h5>
                    </div>
                    <div class="d-flex justify-content-between p-2 border-bottom">
                        <h6 class="card-text">Entrega</h6>
                        <h5>R$ 40, 00</h5>
                    </div>
                    <div class="d-flex justify-content-between p-2">
                        <h5 class="card-text">Total</h5>
                        <h5>R$ 201, 00</h5>  
                    </div>
                    <form action="#">
                        <div class="input-group mt-3">
                            <input type="text" class="p-1 col-md-5 rounded border border-none"
                                placeholder="Digite seu cupom" aria-label="cupom" aria-describedby="basic-addon1">
                            <div class="input-group-prepend">
                                <button target="#" class="btn btn-outline-success ms-1"
                                    type=submit">Enviar</button>
                            </div>
                            <span class="text-success m-2" role="alert">
                                Cupom aplicado!
                            </span>
                        </div>
                    </form>
                    <a href="#" class="p-2 mt-4 col-md-12 btn btn-success">FINALIZAR COMPRA</a>
                </div>
            </div>
        </div>
    </div>
</div>
