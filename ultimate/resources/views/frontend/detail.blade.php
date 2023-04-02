@extends("frontend.blog_layout.master")

@section("contents")

    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-md-9">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb mt-3">
                      <li class="breadcrumb-item"><a href="{{route("blog")}}">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Detail</a></li>
                     
                    </ol>
                  </nav>
                <div class="card p-4 mt-4" >
                    
                        <div class="card-img">
                            <img class=" img-fluid" src="{{asset("storage/thumbnail/".$post->thumbnail)}}" alt="">

                        </div>
                   
                    <div class="card-body p-4">
                        <h1 class="my-4">{{$post->headline}}</h1>
                        <small>Written By:{{App\Models\User::find($post->postowner)->name}}</small>
                        <small>{{$post->created_at}}</small>
                        <p>
                            {!!$post->description!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push("js")


@endpush