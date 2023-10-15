@extends('templates.admin')
@section('main')
<div class="row mt-4">
    <form action="{{ route('info') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Имя</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('name')
          <div id="validationServer03Feedback" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Возраст</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('age')
            <div id="validationServer03Feedback" class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Страна проживания</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('country')
            <div id="validationServer03Feedback" class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Хобби</label>
            <input type="text" class="form-control @error('hobby') is-invalid @enderror" name="hobby" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('hobby')
            <div id="validationServer03Feedback" class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">О себе</label>
          <textarea type="text" class="form-control @error('aboutme') is-invalid @enderror" name="aboutme" id="exampleInputPassword1"></textarea>
        @error('aboutme')
          <div id="validationServer03Feedback" class="invalid-feedback">
             {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Аватар</label>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="exampleInputPassword1"></input>
        @error('avatar')
            <div id="validationServer03Feedback" class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Резюме</label>
            <input type="file" class="form-control @error('resume') is-invalid @enderror" name="resume" id="exampleInputPassword1"></input>
        @error('resume')
            <div id="validationServer03Feedback" class="invalid-feedback">
               {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
