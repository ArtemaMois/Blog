@extends('templates.admin')
@section('main')
    <div class="container">
        <h2 class="m-lg-3">Обновить информацию о книге {{ $book->name }}</h2>
        <form action="{{ route('books.update', ['book' => $book->id]) }}" class="m-lg-3 col-md-5" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Название</label>
                <input type="text" name="name" value="{{ old('name', $book->title) }}" class="form-control @error('name') is-invalid @enderror" id="name" >
                @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea type="password" name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                @error('description')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Автор</label>
                <input type="text" name="author" value="{{ old('author', $book->title) }}" class="form-control @error('author') is-invalid @enderror" id="author" >
                @error('author')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Год издания</label>
                <input type="number" name="year" value="{{ old('year', $book->title) }}" class="form-control @error('year') is-invalid @enderror" id="year" >
                @error('year')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <img class="d-block mb-3" height="100" src="{{ $book->image_url}}" alt="">
            <div class="input-group mb-3">
                <input type="file" name="image_url" class="form-control @error('image_url') is-invalid @enderror" id="image">
                <label class="input-group-text" for="image">Обложка книги</label>
                @error('image_url')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Количество</label>
                <input type="number" name="total" value="{{ old('total') }}" class="form-control @error('total') is-invalid @enderror" id="total" >
                @error('total')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
