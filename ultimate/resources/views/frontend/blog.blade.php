@extends("frontend.blog_layout.master")

@section("contents")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 blogposts my-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb  p-2">
                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
              </nav>
           @if($posts)
           @foreach ($posts as $post)
           <div class="card bg-light text-dark p-4 mb-4" >
            <div class="card-body blogpost">
              
                <h2 class="mb-4">{!!$post->headline!!}</h2>
                <small class="">{{App\Models\User::find($post->postowner)->name}}</small>
                <small>{{$post->created_at}}</small>
                <p class="mt-4"><?php echo Str::words(strip_tags(html_entity_decode($post->description)),20)?></p>
                <a href="{{route("detail",$post->id)}}" class="btn btn-primary float-end">Read More</a>
            </div>
            
           </div>
           @endforeach
         
           @else
           <div class="card p-5">
            <div class="card-body text-center blogpost">
               <h1>No Posts Available</h1>
            </div>

            
           </div>
           @endif

           
           {{$posts->links()}}
        </div>
        <div class="col-12 col-md-3"></div>
    </div>
</div>

@endsection


@push("js")


@endpush