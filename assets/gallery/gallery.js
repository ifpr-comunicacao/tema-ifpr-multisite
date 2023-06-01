/*Para Carousel Bootstrap*/
window.addEventListener('load', function () {
    var carItem = document.querySelectorAll('.carousel-item');

    if (carItem.length > 0) {
        //add class active
        var itemActive = document.querySelector('.carousel-item');
        itemActive.classList.add('active');

        //add prev and next gallery
        var $prevNext = document.querySelector('.ifpr_gallery'),
            html_prev_next = '<a class="carousel-control-prev" href=".carouselPost" role="button" data-slide="prev">' +
            '<span class="carousel-control-prev-icon" aria-hidden="true"></span>' +
            '<span class="sr-only">Previous</span></a>' +
            '<a class="carousel-control-next" href=".carouselPost" role="button" data-slide="next">' +
            '<span class="carousel-control-next-icon" aria-hidden="true"></span>' +
            '<span class="sr-only">Next</span></a>';
        $prevNext.insertAdjacentHTML( 'afterend', html_prev_next );

        //add title gallery
        var $title_gallery = document.querySelector('.carousel'),
            html_title = '<h3 class="carrossel__titulo"><i class="far fa-images"></i> Galeria de Fotos</h3>';
        $title_gallery.insertAdjacentHTML( 'beforebegin', html_title );
    }
});

//Para Fresco Lightbox
window.addEventListener('load', function () {
    var figCaption = document.querySelectorAll('.blocks-gallery-item__caption');
    var itemSlide = document.querySelectorAll('.carousel-item');

    if ( figCaption.length == itemSlide.length ) {
        var dataCaption = document.querySelectorAll('.fresco');

        //Seta o valor de caption para data-fresco-caption
        for (var i = 0; figCaption.length > i; i++) {
            dataCaption[i].dataset.frescoCaption = figCaption[i].innerText;
        }
    }
});