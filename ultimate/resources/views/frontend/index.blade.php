@extends('frontend.layouts.master')



@section('contents')
    <?php

    use App\Models\post;


    $posts=post::select("thumbnail","id")->take(9)->get();

  

    ?>
    {{-- First Div --}}
    <div class="container-fluid vh-100">
        <div class="row" id="firstpage">
            
                <div class="col-12 col-md-5" id="col1textside" >
                   <div class="p-5 mt-4">
                    <h3 style="color:#fdb813;">@lang('frontend.sec1title')</h3>
                    <h4 class="text-white my-3">@lang('frontend.sec1des')</h4>
                    <button class="mt-4 p-3 broder-0" id="stbtn" >@lang('frontend.sec1btn')</button>
                   </div>
                </div>
                <div class="col-12 col-md-7  p-0" id="">
                        <video id="fvideo" loop autoplay muted>
                            <source  src="{{asset("vendors/healthmeeting.mp4")}}" type="video/mp4">
                          </video>
                </div>
                <div class=" col-12 firstpbtntexts">
                    <ul>
                        <li>Dr.Kyaw Soe & Sita</li>
                        <li>American Collage of Lifestyle Medicine</li>
                        <li>Plant-based Cooking Certified</li>
                        <li>Mindfulness Trainer</li>
                        <li>Exercise and Yoga Trainer</li>
                    </ul>

                </div>
            
        </div>
    </div>
    {{-- First Div End --}}
    
    {{-- Sec Div --}}

    <div class="container vh-100">
        <div class="row">
            <div class="col-12 mb-5">
               <div class="" id="secdivheader">
                <h1>@lang('frontend.sec2title')</h1>
               </div>
            </div>
            <div class="col-12">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-5 p-md-5 " id="secdivtextside">
                        <p>Watch:</p>
                        <p>@lang('frontend.sec2des')</p>
                    </div>
                    <div class="col-12 col-md-7" id="">
                        <video id="svideo" loop autoplay="autoplay" muted>
                            <source  src="{{asset("vendors/healthmeeting.mp4")}}" type="video/mp4">
                          </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- sec div end --}}

    {{-- third div start --}}


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 ">
               <div class="d-flex justify-content-between">
                <h1 id="programmsheader" class="mb-4">@lang('frontend.sec3title')</h1>
                <a href="{{route("blog")}}">Read More >></a href="{{route("blog")}}">
               </div>
            </div>
            @foreach($posts as $post)

        
            <div class="col-6 col-md-4 mb-4">
                
                    <div class=" card-img ">
                       <a href="{{route("detail",$post->id)}}"> <img class="w-100 cardimg" src={{asset("storage/thumbnail/$post->thumbnail")}} alt=""></a>
                    </div>
               
            </div>

            @endforeach
            {{-- <div class="col-6 col-md-4 mb-4">
               
                    <div class=" card-img ">
                        <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                    </div>
              
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div>
            <div class="col-6 col-md-4 mb-4">
                <div class=" card-img ">
                    <img class="w-100 cardimg" src={{asset("vendors/images/diabetes-stats-report-724px.png")}} alt="">
                </div>
            </div> --}}
        </div>
    </div>


    {{-- third div end --}}

    {{-- fourth div start --}}

    <div class="container">
        
       <div class="row">
           <h1 class="text-center mt-5" id="storyheader">@lang('frontend.sec4title')</h1>
           <div class="gridcontainer">
           
                <div id="thatoneproblemelement">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-1.jpg")}} alt="">
                </div>
                <div class="textgrid w-100" >
                    <h1>799</h1>
                    <h3 style="font-size: 30px;font-weight: 700;">Stories Of Success</h3>
                    <p style="font-size:15px;font-weight:700">@lang('frontend.sec4des')</p>
                    <button class="btn p-3 text-white" style="background-color:#0074bc; width:200px;font-size:20px;">Read Our Stories</button>
                </div>
                <div class="">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-2.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-3.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-4.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-5.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-6.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-7.jpg")}} alt="">
                </div>
                <div class=" ">
                    <img class="w-100 h-100 cardimg" src={{asset("vendors/images/doctor-8.jpg")}} alt="">
                </div>
               
            
           </div>
       </div>

    </div>

    {{-- fourth div end --}}

    {{-- 5th div Application Installation လုပ်ရန်အောင်တွင်နှိပ်ပါ"
Ultimate Lifestyle မှာ ဘယ်လိုလေ့လာမလဲ --}}
        <div class="container-fluid vh-100 mt-5 p-4 p-md-5" id="howtodowndiv">
            <div class="row justify-content-center align-items-center mt-5 mt-md-0">
                <div class="col-12">
                    <h1 class="text-center text-white mb-5">@lang('frontend.sec5title')</h1>
                </div>
                <div class="col-6 h2 my-4 text-white text-center" id="downloadtext"> <span class="badge  me-4 circle-badge bg-white badge" style="color: #0074bc;">1</span> @lang('frontend.downinst')</div>
                <div class="col-6 h2 my-4 text-white text-center" id="downloadtext"> <span class="badge  me-4 circle-badge bg-white badge" style="color: #0074bc;">2</span> @lang('frontend.downinst')</div>
                <div class="col-6 h2 my-4 text-white text-center" id="downloadtext"> <span class="badge  me-4 circle-badge bg-white badge" style="color: #0074bc;">3</span> @lang('frontend.downinst')</div>
                <div class="col-6 h2 my-4 text-white text-center" id="downloadtext"> <span class="badge  me-4 circle-badge bg-white badge" style="color: #0074bc;">4</span> @lang('frontend.downinst')</div>
                <div class="col-12 mt-5">
                    <h4 class="text-center text-white">@lang('frontend.howtoinstall')</h4>
                </div>
               <div class="row align-items-center justify-content-center">
                <div class="col-6 col-md-4">
                    <a class="btn btn-google" href="#" title="Google Play"><img class="w-100" id="googleplay" src="{{asset("vendors/images/googleplay.png")}}" alt=""></a>
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-google" href="#" title="Google Play"><img class="w-100" id="appstore" src="{{asset("vendors/images/applestore.png")}}" alt=""></a>

                </div>
               </div>

            </div>
            
        </div>

    {{-- 5th div end --}}

    {{-- footer --}}
    <div class="container-fluid mt-5" id="footer">
        <div class="container-fluid">
            <div class="row bg-white justify-content-start justify-content-md-end ">
    
                <div class="col-12 mb-4 col-md-3" id="footerboxes">
                    <h4 class="mb-3">Program</h4>
                    <p>All Programs</p>
                    <p>Download The App</p>
                    <p>Become a Memeber</p>
                </div>
                <div class="col-12 mb-4 col-md-3" id="footerboxes">
                    <h4 class="mb-3">About</h4>
                    <p>Who we are</p>
                    <p>Careers</p>
                    <p>Blog</p>
                </div>
                <div class="col-12 mb-4 col-md-3" id="footerboxes">
                    <h4 class="mb-3">Social media</h4>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>Twitter</p>
                    <p>Tiktok</p>
                </div>
                <div class="col-12 mb-4 col-md-3" id="footerboxes">
                    <h4 class="mb-3">Contact Us</h4>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>Twitter</p>
                    <p>Tiktok</p>
                </div>
                <hr>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@endpush