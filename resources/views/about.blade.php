@extends('layouts.app')
@section('content')
<div class="mt-5" style="padding-top: 50px"></div>
<section id="infoUs mt-5" class="section infoUs" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5" style="color: #fff">
                <h1 class="title">About Qahwah Valley</h1>
                <aside>
                    <p>We are a small, family-owned business led by a passionate husband-and-wife duo. Iman
                        and her husband, alongside a few dedicated partners, are social entrepreneurs with a mission.
                        From empowering coffee farmers in Yemen to curating the ideal ambiance, we create spaces
                        that serve as perfect destinations for remote work, corporate conferences, and social
                        gatherings. Our approach blends social responsibility with hospitality, ensuring that each cup of
                        coffee you enjoy supports a larger purpose.</p>
                </aside>
            </div>
            <div class="col-md-6">
                    <img alt="" src="{{ asset('images/ourPromise.png') }}" style="width: 100%" >
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
                <img alt="" src="{{ asset('front/img/25304127_coffee_rorozoa_3_07.jpg') }}" style="width: 100%;border-radius: 10px" >
            </div>
            <div class="col-md-6 mt-5" style="color: #fff">
                <h1 class="title">Welcome</h1>
                <aside>
                    <p>Our coffee is handpicked by dedicated farmers in Yemen, with a focus on socioeconomic
                        development and empowerment. We take pride in the fact that many of our farmers are
                        women. That’s the Qahwa Valley difference. From the unique geographic locations and rich soil
                        to the climate and the nurturing care of the women who cultivate it, every step of the process is
                        infused with love—and you can taste it in every cup.</p>
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
            <p>Qahwa Valley is a mission-driven company dedicated to providing premium, globally
                competitive coffee by empowering coffee farmers in Yemen. We follow a comprehensive
                approach grounded in two key strategies:</p>
                <ul>
                    <li>Support Yemenite farmers with a focus on equity and sustainable practices.</li>
                    <li>Operate as a social enterprise, reinvesting in communities to create vibrant
                        neighborhoods where farmers can live, learn, work, and thrive.</li>
                </ul>
        </div>
    </div>
</div>
<div class="missionandvission mt-5">
    <div class="container">
        <div class="row color-white">
            <h1 class="mt-5" >OUR PURPOSE</h1>
            <p>Qahwa Valley’s journey begins in Yemen, the birthplace of some of the world’s finest
                coffee. <br/>
                From the fertile soils to the cup you savor, every step of the process reflects the rich
                cultural heritage of Yemenite coffee farming. We offer freshly roasted coffee beans, alongside
                teas and spices, allowing our customers to experience the authentic flavors and deep history of
                Yemenite culture. Our name draws inspiration from Yemen's timeless valleys, symbolizing
                tradition, sustainability, and a commitment to building the future economy of coffee through
                lasting infrastructure for local communities.</p>
            
        </div>
    </div>
</div>
@endsection