
@extends('layouts.app')

@section('title_block')
    Калькуляция
@endsection

@section('content')
<div class="container">
    <div class="c1" >
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1>УК Лотос Парк </h1>
                <h5 class="featurette-heading"> Мы нацелены на чёткое планирование своей деятельности и полной отчетности..</h5>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class ="c2">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Бакинская д. 90</strong>
                        <p class="card-text mb-auto">Здесь вы можете скачать полную отчетность за содержание вашего дома</p>
                        <a href="/download_1" class="btn btn-info"><i class="icon-download-alt"> </i> Скачать калькуляцию </a>



                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="{{url('images/dom_calc_1.png')}}" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary"> Царевская д. 75 </strong>
                        <p class="card-text mb-auto">Здесь вы можете скачать полную отчетность за содержание вашего дома</p>
                        <a href="/download_2" class="btn btn-info"><i class="icon-download-alt"> </i> Скачать калькуляцию </a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="{{url('images/dom_calc_2.png')}}" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<footer class="container">
    <p>© УК Лотос-Парк - 2021</p>
</footer>
</body>
@endsection
