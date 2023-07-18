@extends('grid-flex-site1.layouts.main')
@section('css','./css/grid-flex-site1/gfsite1.css')
@section('main')
{{--------------------------------------- main --------------------------------------}}
<main>

    {{------------------------ section-a ----------------------}}
    <section id="section-a">
        <div class="container">
            <div class="content-wrap">
                <h1 class="content-title">آموزش فراگیر و راحت</h1>
                <p>مبحث مدل داده (Data Model) همیشه مورد توجه متخصصان علوم ژئوماتیک بوده و مدل ها به گونه های مختلف توسعه داده شده اند.</p>
                <a href="" class="btn">بیشتر بخوانید</a>
            </div>

            <div class="show-form card">
                <form action="">
                    <h1>ثبت نام</h1>
                    <input type="text" class="" name="name" placeholder="نام">
                    <input type="text" name="companyname" placeholder="نام شرکت">
                    <input type="email" name="email" placeholder="ایمیل">
                    <input type="submit" value="ارسال">
                </form>
            </div>
        </div>
    </section>


    {{------------------------ section-b ----------------------}}
    <section id="section-b">
        <div class="content-wrap">
{{--            <div class="icons">--}}
                <p>انعطاف پذیری بالا و عدم محدودیت در پرسش دهی یا به عبارت دیگر امکان انجام جستجو در هر جدول و بر اساس هر فیلد توصیفی</p>
                <div class="">
                    <i class="fa fa-database"></i>
                    <h1>10675346</h1>
                    <p>تولید</p>
                </div>
                <div class="">
                    <i class="fa fa-download"></i>
                    <h1>764TB</h1>
                    <p>ویرایش</p>
                </div>
                <div class="">
                    <i class="fa fa-project-diagram"></i>
                    <h1>3674677</h1>
                    <p>پروژه</p>
                </div>
{{--            </div>--}}

        </div>
    </section>

    {{------------------------ section-c ----------------------}}
    <section id="section-c">
        <div class="card">
            <img src="./file/grid-flex-site1/home/fllower.jpg" alt="">
            <p>بر اساس هر فیلد توصیفی</p>
            <p>امکان انجام جستجو</p>

        </div>
    </section>
    {{------------------------ section-d ----------------------}}
    <section id="section-d">
        <div class="content-wrap">
            <div class="content">
                <h1 class="content-title">متخصصان علوم ژئوماتیک</h1>
                <p>امکان انجام جستجو در هر جدول و بر اساس هر فیلد توصیفی فیلد توصیفی فیلد توصیفی فیلد توصیفی فیلد </p>
                <a href="" class="btn" >بیشتر بخوانید</a>
            </div>
            <img src="./file/image/blue-fllower.png" alt="">
        </div>
    </section>
    {{------------------------ section-e ----------------------}}
    <section id="section-e">
        <div class="container">
        <h1 class="content-title">Supported Languages</h1>
        <div class="content-wrap">
            <div class="languages">
                <h1 class="title">c#</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">c</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">php</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">laravel</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">ruby</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">scala</h1>
                <i class="fa fa-radio"></i>
            </div>
            <div class="languages">
                <h1 class="title">js</h1>
                <i class="fa fa-radio"></i>
            </div>
        </div>
        </div>
    </section>

</main>
@endsection
