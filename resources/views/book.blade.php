@extends('tmpl.frontend')

@section('title', 'معرفی کتب')

@section('content')
<div class="container">

        <div class="row">

            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">مشخصات
                        <strong>کتاب</strong>
                    </h2>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="{{URL::asset('img/slide-1.jpg')}}" alt="">
                    <h2>{{$book->title}}
                        <br>
                        <small>{{$book->author}}
                            <small>۲۲ شهریور ۹۴</small>
                        </small>
                    </h2>
                    <p class="center-justified">{{$book->description}}</p>
                    <hr>
                </div>



            </div>
            <div class="row">
              <div class="box text-center">
                <div class="col-lg-2">
                  تعداد بازدید: {{$book->counter}}

                </div>
                <div class="col-lg-2">
                  تاریخ نشر: {{$book->published_date}}
                </div>
                <div class="col-lg-2">
                  مترجم: {{$book->translator}}
                </div>
                <div class="col-lg-2">
                  انتشارات: {{$book->publisher}}
                </div>
                <div class="col-lg-2">
                  ژانر: {{$book->genre}}
                </div>
                <div class="col-lg-2">
                  نویسنده: {{$book->author}}
                </div>
              </div>

            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection
