<div class="media mb-4 mt-4" style="border: 1px solid rgb(222, 222, 222)">
    <img src="{{ $image_url }}" class="mr-3 mb-4" width="250" height="150"  alt="...">
    <div class="media-body mb-3 mt-3">
      <h5 class="mt-3">{{ $title }}</h5>
      {{ $body }}
    </div>
    <div class="mt-3"><a href="{{ route('post', ['post' => $post]) }}"><button type="button" class="btn btn-primary">Read</button></a></div>
  </div>
