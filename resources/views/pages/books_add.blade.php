@extends('templates.admin')
@section('main')
    <div class="container">
        <h2 class="m-lg-3">Добавить новую книгу</h2>
        <form action="{{ route('books.add') }}" class="m-lg-3 col-md-5" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Название</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" >
                @error('name')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea type="password" name="description" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                @error('description')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Автор</label>
                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" >
                @error('author')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Год издания</label>
                <input type="number" name="year" class="form-control @error('year') is-invalid @enderror" id="year" >
                @error('year')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
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
                <input type="number" name="total" class="form-control @error('total') is-invalid @enderror" id="total" >
                @error('total')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection
