<div class="col">
    <div class="card">
        <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title ?? NULL }}">
        <div class="card-body">
            <h5 class="card-title">{{ $title ?? NULL }}</h5>
            <p class="card-text">{{ substr($body, 0, 100) }}</p>
            <p class="card-text"><small class="text-muted">{{ $createdAt }}</small></p>
            <a href="{{ route('article', ['article' => $id]) }}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

