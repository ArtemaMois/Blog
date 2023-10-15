<div class="card m-3 col-md-5">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">В наличии: {{ $product->price }} $</p>
        <button type="submit" class="btn btn-danger">Удалить</button>
        <a href="#" class="btn btn-success">Edit</a>
    </div>
</div>

