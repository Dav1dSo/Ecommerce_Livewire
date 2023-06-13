<div class="d-flex row justify-content-center">
    @foreach ($products as $product)
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ url($product->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card of the card'scontent.</p>
                <a href="{{ url("/view-details/{$product->id}") }}" class="btn btn-secondary">Ver produto</a>
            </div>
        </div>
    @endforeach
    <div class="pagination justify-content-center m-3">
        {{ $products->links() }}
    </div>
</div>
