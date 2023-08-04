		setTimeout(function() {
		  const loader = document.querySelector(".loader");
		  loader.style.opacity = 0;
		  setTimeout(function() {
		    loader.style.visibility = "hidden";
		  }, 300);
		}, 1500);


		// Crear un codigo para que demore el cambio de pagina con una transicion de opacidad de 1 a 0 terminando en negro