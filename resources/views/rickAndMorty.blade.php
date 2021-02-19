@extends('layout')
@section('othersConnections')
    <style>
        body {
            font-size: 16px;
        }
        /* на sm */
        @media (min-width: 768px) {
            html {
                font-size: 18px;
            }
        }
        /* на md */
        @media (min-width: 992px) {
            html {
                font-size: 20px;
            }
        }
        /* на lg */
        @media (min-width: 1200px) {
            html {
                font-size: 22px;
            }
        }

        .padding {
            padding: 1rem !important
        }

        .user-card-full {
            overflow: hidden
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px
        }

        .m-r-0 {
            margin-right: 0px
        }

        .m-l-0 {
            margin-left: 0px
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263)
        }

        .user-profile {
            padding: 20px 0
        }

        .card-block {
            padding: 1.25rem
        }

        .m-b-25 {
            margin-bottom: 25px
        }

        .img-radius {
            border-radius: 5px
        }

        h6 {
            font-size: 16px
        }

        .card .card-block p {
            line-height: 25px
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px
            }
        }

        .card-block {
            padding: 1.25rem
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .card .card-block p {
            line-height: 25px
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .text-muted {
            color: #919aa3 !important
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .f-w-600 {
            font-weight: 600
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .user-card-full .social-link li {
            display: inline-block
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }
    </style>
@endsection
@section('title')Рик и морти@endsection

@section('content')
    <div class="container text-center">
        <h1>Персонажи сериала Рик и Морти</h1>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            @foreach($links as $link)
                <li class="page-item"><a class="page-link" href="/rick_and_morty/{{$link}}">{{$link}}</a></li>
            @endforeach
        </ul>
    </nav>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row d-flex justify-content-center">
                @foreach($characters['results'] as $character)
                <div class="col-md-6 col-xl-6">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="{{$character['image']}}" class="img-thumbnail" alt="Character-Image"> </div>
                                    <h6 class="f-w-600">{{$character['name']}}</h6>
                                    <p>{{$character['species']}}, {{$character['gender']}}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Информация</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Происхождение</p>
                                            <h6 class="text-muted f-w-400">{{$character['origin']['name']}}</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Последняя локация</p>
                                            <h6 class="text-muted f-w-400">{{$character['location']['name']}}</h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Дополнительная информация</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Recent</p>
                                            <h6 class="text-muted f-w-400"></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Most Viewed</p>
                                            <h6 class="text-muted f-w-400"></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            @foreach($links as $link)
            <li class="page-item"><a class="page-link" href="/rick_and_morty/{{$link}}">{{$link}}</a></li>
            @endforeach
        </ul>
    </nav>

@endsection
