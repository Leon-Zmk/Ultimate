@extends('frontend.layouts.master')

@section('contents')

    {{-- First Div --}}
    <div class="container-fluid vh-100">
        <div class="row" id="firstpage">
            
                <div class="col-12 col-md-5" id="col1textside" >
                   <div class="p-5 mt-4">
                    <h3 style="color:#fdb813;">Shop For Your Happiness</h3>
                    <h4 class="text-white my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quo dolore voluptatum modi vero maxime provident a cum, quod dolorem vel impedit, inventore totam sint fugit iste dignissimos rem officiis.</h4>
                    <button class="mt-4 p-3 broder-0" id="stbtn" >Getting Started</button>
                   </div>
                </div>
                <div class="col-12 col-md-7 h-100 p-0" id="">
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

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12 mb-5">
               <div class="" id="secdivheader">
                <h1>The Most Effective Lifestyle Transformation program on the earth</h1>
               </div>
            </div>
            <div class="col-12">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-4 p-md-5" id="secdivtextside">
                        <p>Watch:</p>
                        <p>U myint Htoo talks about Ultimate Lifestyle changing his health</p>
                    </div>
                    <div class="col-12 col-md-8" id="">
                        <video id="svideo" loop autoplay="autoplay" muted>
                            <source  src="{{asset("vendors/healthmeeting.mp4")}}" type="video/mp4">
                          </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@endpush