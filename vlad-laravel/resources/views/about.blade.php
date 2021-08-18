
@extends('layouts.app')

@section('title_block')
    о нас
@endsection

@section('content')
    <div class="body3">
    <div class = "contr">
        <div class="wrapper">
            <div class="slider">
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_1.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_2.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_3.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_4.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_5.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_6.png')}}" alt="">
                </div>
                <div class="slider_item">
                    <img class="slider_item" src="{{url('images/slide_7.png')}}" alt="">
                </div>

            </div>
        </div>
    </div>


    <div class="container marketing">
        <div class="elem2">
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Управляющая компания «Лотос Парк»</h2>
                    <p class="lead">Образована в декабре 2019 года. Осуществляет свою деятельность на территории города Астрахани и Астраханской области. Ежедневно в компании трудятся сотрудники, имеющие высшее образование и стаж работы в ЖКХ не менее 3-х лет. </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="{{url('images/news_1.jpg')}}" data-holder-rendered="true">
                </div>
            </div>



            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">

                    <h2 class="featurette-heading">Ключевые задачи УК «Лотос Парк» </h2>
                    <p class="lead"> • Обеспечение благоприятных и безопасных условий проживания граждан</p>
                    <p class="lead"> • Бесперебойное предоставление коммунальных услуг собственникам помещений</p>
                    <p class="lead"> • Оказание услуг по текущему ремонту общего имущества</p>
                    <p class="lead"> • Благоустройство и уборка придомовой территории</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="{{url('images/news_2.jpg')}}" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Договор с жителями многоквартирных жилых домов </h2>
                    <p class="lead">заключается  сроком от 1 года до 5 лет. На протяжении этого времени УК действует исходя из пожеланий жильцов и при продуктивном сотрудничестве с Советами домов. По истечении договора УК «Лотос Парк» проводит обязательное собрание, где отчитывается за всю проделанную работу и использование денежных средств.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="{{url('images/news_3.jpg')}}" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">
        </div>
    </div>
        <footer class="container">
            <p>© УК Лотос-Парк - 2021</p>
        </footer>
    </div>
    </div>

@endsection
