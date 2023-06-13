<div class="d-flex row justify-content-center">
@foreach ($products as $product)
    <div class="card m-3" style="width: 18rem;">
        <img src="{{url($product->image)}}" class="card-img-top h-100" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card of the card'scontent.</p>
            <a href="/ViewProduct/{1}" class="btn btn-secondary">Ver produto</a>
        </div>
    </div>
    @endforeach
</div>
