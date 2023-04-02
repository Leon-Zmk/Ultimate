@extends('dashboard.layouts.master')

@section("contents")


   
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <form method="post" action="{{route("postupdate")}}" enctype="multipart/form-data" >
                        @csrf

                        <input hidden type="text" name="id" value="{{$post->id}}">
                        <div class="form-group">
                            <label for="">Post Headline:</label>
                            <input type="text" class="form-control" value="{{$post->headline}}" name="headline">
                        </div>
                        <div class="form-group">
                            <label for="">thumbnail:</label>
                            <input type="file" name="thumbnail">
                        </div>
                        <textarea id="mytextarea" name="postdatas">{{$post->description}}</textarea>
                       <div class="d-flex justify-content-end">
                        <button class="btn btn-primary border-0 mr-5 mt-5">Post Update</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push("js")

<script src={{asset("adminassets/plugins/tinymce/js/tinymce/tinymce.min.js")}} referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: '#mytextarea',
    plugins: [
      'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'code', 'fullscreen', 'insertdatetime',
      'media', 'emoticons','help'
    ],
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>

@endpush


