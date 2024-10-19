@extends('layouts.app')
@section('content')
<div class="mt-5" style="padding-top: 50px"></div>
<section id="infoUs mt-5" class="section infoUs" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5" style="color: #44220A">
                <h1 class="title">About Qahwah Valley</h1>
                <aside>
                    <p>{!! Settings()->about_page_1 !!}</p>
                </aside>
            </div>
            <div class="col-md-6">
                    <img alt="" src="{{ asset('images/'.Settings()->about_page_1_img) }}" style="width: 100%" >
            </div>
        </div>
    </div>
</section>
<div class="clearfix" style="margin-top: 100px"></div>
<div class="myborderr">

</div>
<section id="infoUs mt-5" class="section infoUs" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img alt="" src="{{ asset('images/'.Settings()->about_page_2_img) }}" style="width: 100%;border-radius: 10px" >
            </div>
            <div class="col-md-6 mt-5" style="color: #44220A">
                <h1 class="title">Welcome</h1>
                <aside>
                    <p>{!! Settings()->about_page_2 !!}</p>
                </aside>
            </div>
            </div>
        </div>
    </div>
</section>
<div class="missionandvission mt-5">
    <div class="container">
        <div class="row color-white">
            <h1 class="mt-5" >OUR MISSION</h1>
            <p>
                {!! Settings()->mission !!}
            </p>
         </div>
    </div>
</div>
<div class="missionandvission mt-5 mb-5">
    <div class="container">
        <div class="row color-white">
            <h1 class="mt-5" >OUR PURPOSE</h1>
            <p>{!! Settings()->purpose !!}</p>
            
        </div>
    </div>
</div>
@endsection