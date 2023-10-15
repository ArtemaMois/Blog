<div class="card m-3 col-md-5">
    <img src="{{ $book->image_url }}" class="card-img-top" alt="{{ $book->name }}">
    <div class="card-body">
        <h5 class="card-title">{{ $book->name }}<span class="badge rounded-pill text-bg-primary">{{ $book->year }}</span></h5>
        <p class="card-text">{{ $book->description }}</p>
        <p class="card-text"><b>{{ $book->author }}</b></p>
        <p class="card-text">В наличии: {{ $book->total }}</p>
        <form action="{{ route('books.delete', ['book' => $book]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="btn btn-success">Edit</a>
    </div>
</div>
