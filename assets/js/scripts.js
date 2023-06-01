$(document).ready(function(){
	$(".menu-esquerdo__toggle").click(function(){
		$("#sidebar__esquerda").toggleClass("d-none");
		$(".menu-esquerdo__toggle i").toggleClass("fa-bars fa-times");
	});
	$('#sidebar__esquerda').on('click','.menu-item-has-children a',function(){
		$(this).parent().toggleClass("current-menu-parent");
	});
	$(".busca-btn").click(function(){
		$('.busca-btn i').toggleClass("busca__selecionado");
		$('#busca').toggleClass("d-none");
	});
	$(".close").click(function(){
		$(".nonmodal-rodape").toggleClass("d-none");
	});
	$('#sidebar__esquerda').on('click','.widget-title',function(){
		$(this).parent().toggleClass("current");
		$(this).children('i').toggleClass("fa-angle-down fa-angle-up");
	});
	$('.nav-semana').on('click','a',function(){
		$('.nav-semana a').removeClass("active");
		$(this).toggleClass("active");
	});
	$('.portal-menu-toggle, .nav-portal .menu-item').click(function(){
		$('.portal-menu-toggle').toggleClass('menu-toggle-open');
		$('.portal-menu-toggle > i').toggleClass("fa-plus-circle fa-minus-circle");
		$('.nav-portal').toggleClass('mobile-open');
		$('.nav-portal>ul').toggleClass("d-none");
	});
	
	//Menu contextual icone abre e fecha mobile
	$(".menu-contextual-toggle").click(function(){
		$(".page-menu-contextual-list").toggleClass("open");
	});
	
	// Abrir painel deslizante
	$(".painel-titulo").click(function(){
		$(this).toggleClass("fechado");
	});
	
	// Abrir painel deslizante card Catálogo de Laboratórios
	$(".cat-lab-btn").click(function () {
		$(this).toggleClass("fechado");
	});
	
	//Itens do componente grafico detalhado
	$('.grafico-segmentos').on('click','li',function(){
		$('.grafico-segmentos li').addClass("no-selected");
		$(this).toggleClass("no-selected");
	});

	$(".grafico-docentes").click(function(){
		$('.grafico-detalhamento-imagem figure').addClass("d-none");
		$(".docentes").toggleClass("d-none");
	});

	$(".grafico-taes").click(function(){
		$('.grafico-detalhamento-imagem figure').addClass("d-none");
		$(".taes").toggleClass("d-none");
	});

	$(".grafico-gestores").click(function(){
		$('.grafico-detalhamento-imagem figure').addClass("d-none");
		$(".gestores").toggleClass("d-none");
	});

	$(".grafico-convergencia").click(function(){
		$('.grafico-detalhamento-imagem figure').addClass("d-none");
		$(".convergencia").toggleClass("d-none");
	});

	$(".grafico-interseccao").click(function(){
		$('.grafico-detalhamento-imagem figure').addClass("d-none");
		$(".interseccao").toggleClass("d-none");
	});
  // TEXTO SLIDER ARMAZENAMENTO GOOGLE
	$(".slider-titulo").click(function () {
		$(this).toggleClass("aberto");
	});
});

//Smooth Scroll
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("nav a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   		// Add hash (#) to URL when before scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

(function(){
    // Back to Top - by CodyHouse.co
	var backTop = document.getElementsByClassName('js-cd-top')[0],
		// browser window scroll (in pixels) after which the "back to top" link is shown
		offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offsetOpacity = 1200,
		scrollDuration = 700,
		scrolling = false;
	if( backTop ) {
		//update back to top visibility on scrolling
		window.addEventListener("scroll", function(event) {
			if( !scrolling ) {
				scrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
			}
		});
		//smooth scroll to top
		backTop.addEventListener('click', function(event) {
			event.preventDefault();
			(!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
		});
	}

	function checkBackToTop() {
		var windowTop = window.scrollY || document.documentElement.scrollTop;
		( windowTop > offset ) ? addClass(backTop, 'cd-top--show') : removeClass(backTop, 'cd-top--show', 'cd-top--fade-out');
		( windowTop > offsetOpacity ) && addClass(backTop, 'cd-top--fade-out');
		scrolling = false;
	}

	function scrollTop(duration) {
	    var start = window.scrollY || document.documentElement.scrollTop,
	        currentTime = null;

	    var animateScroll = function(timestamp){
	    	if (!currentTime) currentTime = timestamp;
	        var progress = timestamp - currentTime;
	        var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
	        window.scrollTo(0, val);
	        if(progress < duration) {
	            window.requestAnimationFrame(animateScroll);
	        }
	    };

	    window.requestAnimationFrame(animateScroll);
	}

	Math.easeInOutQuad = function (t, b, c, d) {
 		t /= d/2;
		if (t < 1) return c/2*t*t + b;
		t--;
		return -c/2 * (t*(t-2) - 1) + b;
	};

	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
	  	if (el.classList) return el.classList.contains(className);
	  	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
	 	if (el.classList) el.classList.add(classList[0]);
	 	else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
	 	if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
	  	if (el.classList) el.classList.remove(classList[0]);
	  	else if(hasClass(el, classList[0])) {
	  		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
	  		el.className=el.className.replace(reg, ' ');
	  	}
	  	if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
	}
})();