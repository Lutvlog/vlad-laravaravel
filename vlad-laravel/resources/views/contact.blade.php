@extends('layouts.app')

@section('title_block')Контакты@endsection

@section('content')

    <div class="container" id="contact_block">
        <body>
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Адрес</h4>
                </div>
                <div class="card-body">
                    <img src="{{url('images/c_map.svg')}}" alt="">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li>город Астрахань</li>
                        <li>ул. Бакинская 90/1</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Номер телефона</h4>
                </div>
                <div class="card-body">
                    <img src="{{url('images/c_phone.svg')}}" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>77-15-37</li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Электронная почта</h4>
                </div>
                <div class="card-body">
                    <img src="{{url('images/c_message.svg')}}" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>uk-lotos-park@yandex.ru</li>
                    </ul>
                </div>
            </div>
        </div>

    <div class="container_message">
        <div class="container mt-5">
            <h2>Возникли вопросы? Напишите нам</h2>
            @include('inc.messages')
            <form action="{{route('form-control')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Введите имя</label>
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Введите имя" id="name" class="form-control">
                </div>
                <div class="messageAndEmail">
                    <div class="form-group" id="subjectblock">
                        <label for="subject">Тема письма</label>
                        <input type="text" name="subject" value="{{old('subject')}}" placeholder="Тема письма" id="subject" class="form-control">
                    </div>
                    <div class="form-group" id="emailblock">
                        <label for="email">email</label>
                        <input type="text" name="email" value="{{old('email')}}" placeholder="Введите email" id="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mes">Сообщение</label>
                    <input type="text" name="mes" value="{{old('mes')}}" placeholder="Введите сообщение" id="mes" class="form-control" >
                </div>

                <button type="submit" class="button btn-success"> Отправить письмо</button>

            </form>
        </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2308.22792776694!2d48.02688409947648!3d46.33978986705378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41a90fcc6b83d311%3A0xbcb7e521180a976f!2z0YPQuy4g0JHQsNC60LjQvdGB0LrQsNGPLCA5MCwg0JDRgdGC0YDQsNGF0LDQvdGMLCDQkNGB0YLRgNCw0YXQsNC90YHQutCw0Y8g0L7QsdC7LiwgNDE0MDI0!5e0!3m2!1sru!2sru!4v1628234219256!5m2!1sru!2sru" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <hr>
        <footer class="container">
            <p>© УК Лотос-Парк - 2021</p>
        </footer>
        </body>
    </div>

@endsection
