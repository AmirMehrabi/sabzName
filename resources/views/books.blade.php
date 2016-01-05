@extends('tmpl.frontend')

@section('title', 'معرفی کتب')

@section('content')
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">معرفی
                        <strong>کتب</strong>
                    </h2>
                    <hr>
                </div>
                @foreach ($books as $book)
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>{{$book->title}}
                        <br>
                        <small>{{$book->author}}
                            <small>۲۲ شهریور ۹۴</small>
                        </small>
                    </h2>
                    <p class="center-justified">{{$book->description}}</p>
                    <a href="{{url('books', $book->id)}}" class="btn btn-default btn-lg">بیشتر بخوانید</a>
                    <hr>
                </div>
                @endforeach


                
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#"><span class="glyphicon glyphicon-circle-arrow-left"></span> جدیدتر</a>
                        </li>
                        <li class="next"><a href="#">قدیمی‌تر <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection
