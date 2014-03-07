 $( document ).ready(function() {

	var sidebar = $('#sidebar')
		overlay = $('#overlay');

	// Trigger video animation on homepage 
    $('.section').on("mouseenter", hoverHome);

	// set overlay to hidden
	TweenLite.set(overlay, {opacity:0,display:'none'});
	TweenLite.set($('#preview .wrap'), {opacity:0});

	// Set content size to window dimensions (also on resize)
	contentSize();
	$(window).on('resize', contentSize);
	
	// Open the sidebar
	$('.menu-btn').on('click', openSidebar);
	
	// animate the list of names
	animateList();		

	// loader preview + animation
	previewLoading();	

	// Crée les sliders de la sidebar
    createSliders();
	
	// Pop-in d'information sur la home
    $('body.signin i.icon-information_black').on('click', connexionPopin);
    $('body.signin').on('click', 'i.icon-cancel_circle', closePopinConnexion);

	// Show or hide the overlay
	$('footer ul li a').on('click', showPopin);
	$('#popin').on('click', "a.closePopin", closePopin);


    function hoverHome() {
        var _this = $(this),
        	// video = _this.find('video'),
        	titleWrap = _this.find('.title-wrap'),
        	videoWrap = $('.video-container');
        videoWrap.css('opacity', '1');
        //video[0].play();
        //_this.removeClass('bgOn');	
        console.log(titleWrap);
        titleWrap.addClass('black');

        _this.on("mouseout", function(){
        	//video[0].pause();
        	//_this.addClass('bgOn');	
        	videoWrap.css('opacity', '0');
        	titleWrap.removeClass('black');
        });
    }


	// function to set #content size to window size - header
	function contentSize() {
		var $window = $(window);
		$('#content').width($window.width() + 16).height($window.height() - 55);

	}

	// fonction pour ouvrir la sidebar
	function openSidebar(e) {
		e.preventDefault();
		if(sidebar.hasClass('close')) {
			TweenLite.to(sidebar, 0.4, {transform:"translateX(100%)",ease:Power2.easeInOut});
			sidebar.removeClass('close');
			$('a.menu-btn').empty();
			$('a.menu-btn').html('<i class="icon-cross_mark">');
		} else {
			TweenLite.to(sidebar, 0.4, {transform:"translateX(-100%)",ease:Power2.easeInOut});
			sidebar.addClass('close');
			$('a.menu-btn').empty();
			$('a.menu-btn').html('<i class="icon-reorder">');
		}
	}

	// Animation d'intro pour la page SearchSportifs
	function animateList() {
		var item = $('#list ul li');
		TweenLite.set(item, {transform:"translateX(-50px) translateY(-20px)", opacity:0});
		TweenMax.staggerTo(item, 0.25,
			{transform:"translateX(0px) translateY(0px)",opacity:1}, 0.15);
	}

	// popin du footer
	function showPopin(e) {
		e.preventDefault();
		TweenLite.to(overlay, 0.3, {opacity:1,display:'block',ease:Power4.easeInOut});
		var _this = $(this),
			popin = $('#popin'),
			content = _this.data("content");

		if(content=="cgu") {
			popin.html("<h3>Conditions Générales d'Utilisation</h3><a href='#' class='closePopin'><i class='icon-cross_mark'></i></a><p>Le présent document a pour objet de définir les modalités et conditions dans lesquelles d’une part,  monsieur Noguier Robin, ci-après dénommé l’EDITEUR, met à la disposition de ses utilisateurs le site, et les services disponibles sur le site et d’autre part, la manière par laquelle l’utilisateur accède au site et utilise ses services.</br>Toute connexion au site est subordonnée au respect des présentes conditions.</br>Pour l’utilisateur, le simple accès au site de l’EDITEUR à l’adresse URL suivante www.labagarre.fr  implique l’acceptation de l’ensemble des conditions décrites ci-après.</br></br></p><h4>Propriété intellectuelle</h4><h5>Variante 1</h5><p>La structure générale du site labagarre.fr , ainsi que les textes, graphiques, images, sons et  vidéos la composant, sont la propriété de l'éditeur ou de ses partenaires. Toute représentation et/ou reproduction et/ou exploitation partielle ou totale des contenus et services proposés par le site labagarre.fr , par quelque procédé que ce soit, sans l'autorisation préalable et par écrit de  monsieur Noguier Robin  et/ou de ses partenaires est strictement interdite et serait susceptible de constituer une contrefaçon au sens des articles L 335-2 et suivants du Code de la propriété intellectuelle.</br>Les marques 'labagarre', 'labagarre.fr' sont des marques déposées par labagarre.fr .Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de ces marques, de quelque nature que ce soit, est totalement prohibée.</br></p><h5>Variante 2</h5><p>Aucune reproduction, même partielle prévue à l’article L.122-5 du Code de la propriété intellectuelle, ne peut être faite de ce site sans l’autorisation du directeur de publication.</p><h5>Variante 3</h5><p>Tous les éléments de ce site, y compris les documents téléchargeables, sont libres de droit. A l’exception de l’iconographie, la reproduction des pages de ce site est autorisée à la condition d’y mentionner la source. Elles ne peuvent être utilisées à des fins commerciales et publicitaires.</p>");
		} 
		if(content=="contact") {	
			popin.html("<h3>Contact</h3><a href='#' class='closePopin'><i class='icon-cross_mark'></i></a><p style='text-align:center;'>Pour toutes information supplémentaire, suggestion ou autre, nous vous invitons à nous contacter </br> à l’adresse suivante:</p></br><h4 style='text-align:center;'>contact@labagarre.fr</h4>");
		} 
		if(content=="who") {
			popin.html("<h3>Qui sommes nous?</h3><a href='#' class='closePopin'><i class='icon-cross_mark'></i></a><p>Labagarre.fr est une plateforme de mise en relation des différents acteurs de l’univers des sports de combat. Son but est de faciliter et diversifier l’organisation de compétitions, entraînements et autres évènements sportifs en regroupant un public écléctique.</p><p>Simples amateurs, professionnels, entraîneurs, managers, icônes du noble art ou experts en arts martiaux, ceci est votre site. Un site pour vous, pour vos partenaires d’entraînement et vos adversaires, mais surtout par vous.Car c’ est de votre activité sur labagarre.fr que dépendront l’ évolution, la philosophie et l’ image véhiculée par les sports de combat.</p><p>Toute l’équipe de labagarre.fr vous souhaite une excellente navigation ainsi que de beaux combats.</p>");
		}
	}
	function closePopin(e) {
		e.preventDefault();
		TweenLite.to(overlay, 0.3, {opacity:0,display:'none',ease:Power4.easeInOut});
	}

	// loader pour les pages search
	function previewLoading() {
		var previewContent = $('#preview .wrap'),
			loader = $('#content .loading-wrap');
			TweenLite.set(previewContent, {opacity:0});	
		TweenLite.to(loader, 0.25, {opacity: 0,display:'none',ease:Power1.easeInOut,delay:1.5});
		TweenLite.to(previewContent, 0.4, {opacity:1,ease:Power1.easeInOut,delay:1.5});
	}

	// initialise les sliders de la sidebar
	function createSliders() {
		$('#poid').noUiSlider({
			 range: [60,120]
			,start: [70,85]
			,handles: 2
			,connect: true
			,step: 1
			,serialization: {
				resolution: 1
				,to: [[$('.poid .value-span-1'), 'input'],
				 	  [$('.poid .value-span-2'), 'input']]
			}
		});
		$('#taille').noUiSlider({
			 range: [150,220]
			,start: [180,190]
			,handles: 2
			,connect: true
			,step: 1
			,serialization: {
				resolution: 1
				,to: [[$('.taille .value-span-1'), 'input'],
				 	  [$('.taille .value-span-2'), 'input']]
			}
		});
		$('#distance').noUiSlider({
			 range: [0,300]
			,start: [0,150]
			,handles: 2
			,connect: true
			,step: 1
			,serialization: {
				resolution: 1
				,to: [[$('.distance .value-span-1'), 'input'],
				 	  [$('.distance .value-span-2'), 'input']]
			}
		});
	}

	// Function pour afficher les infos sup sur la page Connexion
	function connexionPopin() {
		var trigger = $('body.signin i.icon-information_black'),
			trigger2 = $('.info_wrap i'),
			popin = $('.info_pop');

		trigger.toggle(300);
		popin.fadeToggle(300);
	}
	function closePopinConnexion() {
		$(this).parent('.info_pop').fadeOut(300);
		$('body.signin i.icon-information_black').show();
	}

});