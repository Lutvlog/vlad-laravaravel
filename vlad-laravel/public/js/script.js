$(document).ready(function (){
    $('.slider').slick({
        arrows: true, //наличие стрелок
        dots: true,//точки
        adaptiveHeight: true,//адаптивная высота в зависимости от размера картинки
        slidesToShow: 3,  //количество показываемых слайдов
        slidesToScroll:1,
        speed:500, // количество в секундах плавность
        easing:'ease',
        infinite: true,//бесконечный слайдер
        autoplay:true,
        autoplaySpeed: 2000, //автопрокрутка слайдов
        pauseOnFocus: true,
        pauseOnHover: true,
        pauseOnDotsHover: true,//пауза при фокусе
        draggable:true,
        swipe: true,
        touchThreshold: 3,
        touchMove: true,//тянуть свайп за картинку
        waitForAnimate: true, //ожидание задержки анимации
        centerMode:false, //лучше использовать с картинками
        variableWidth: false, //добавляет все элементы
        rows:1,//количество рядов
        slidesPerRow: 1,
        vertical:false,//вертикальный слайд (флекс выключим и заработает)
    });
});
