function success(position) {
    var s = document.querySelector('#status');

    if (s.className == 'success') {
        return;
    }

    s.innerHTML = "Você foi localizado!";
    s.className = 'success';

    var mapcanvas = document.createElement('div');
        mapcanvas.id = 'mapcanvas';
        mapcanvas.style.height = '520px';
        mapcanvas.style.width = '560';

    document.querySelector('article').appendChild(mapcanvas);

    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

    var myOptions = {
        zoom: 17,
        center: latlng,
        mapTypeControl: false,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
	
	var imagegeo = 'imagens/IconeGeo86.png';
	
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title:"Você está aqui!",
		icon: imagegeo,
		animation: google.maps.Animation.BOUNCE
    });
	var deslizamentopont = [
				  ['R.Antônio Ambrósio - Jardim Éden', -23.66017, -46.41851],
				  ['Jair Ballo', -23.64861, -46.45186],
				  ['Rua Andirá - Jardim Paranavai', -23.64935, -46.45582],
				  ['Rua Jacarandá', -23.65397, -46.45396],
				  ['Oratório-Piripiri', -23.6681630, -46.4617086],
				  ['Travessa Itaparica', -23.65692, -46.45955],
				  ['Rua Olinda - Jardim Oratorio', -23.65780, -46.46307],
				  ['Viela Pico Do Cristal', -23.6681630, -46.4617086],
				  ['Viela Boa Vista', -23.6915652, -46.4477940],
				  ['Avenida João Varin', -23.6794486, -46.4653537],
				  ['Rua Joaquim Pereira Dos Santos', -23.6875028, -46.4646465],
				  ['Rua Vitória Régia', -23.7063067, -46.4562939],

				];		
				var imageum = 'imagens/icon_desliz_menor.png';
				 
				for (i = 0; i < deslizamentopont.length; i++) { 
					marker = new google.maps.Marker({
					position: new google.maps.LatLng(deslizamentopont[i][1], deslizamentopont[i][2]),
					title: deslizamentopont[i][0],
					map: map,
					icon: imageum,
					animation: google.maps.Animation.DROP
					
				  });
				}
				var inundapont = [
				    ['Avenida João Ramalho', -23.6676400, -46.4633915],
					['Rua Rio Branco', -23.6731392, -46.4555996],
					['Avenida Da Saudade', -23.6778620, -46.4572622], 
					['Rua Washington Luiz', -23.6597092, -46.4533878],
					['Avenida Cláudio Savietto', -23.6539610, -46.4377528],
					['Avenida Dona Benedita Franca Da Veiga', -23.6576854, -46.4245874],  
					['Rua Roberto Stella', -23.6441634, -46.4356814],
					['Avenida Dom José Gaspar', -23.6781555, -46.4606227],
					['Avenida Capitão João', -23.6821519, -46.4542375],
					['Chácara Maria Aparecida', -23.6586111, -46.4179400],
					['Rua Jorge Máximo De Azevedo', -23.6503769, -46.4407367],
					['Avenida Valdemar Jesuíno Da Silva', -23.6670526, -46.4266082],
					['Rua Antônio Negrini', -23.6646950, -46.4461926],
					['Avenida Benvenuto Bagnara', -23.6613810, -46.4473592],

				  
				];		
				var imagedois = 'imagens/icon_Inund_menor.png';
				
				for (i = 0; i < inundapont.length; i++) { 
					marker = new google.maps.Marker({
					position: new google.maps.LatLng(inundapont[i][1], inundapont[i][2]),
					title: inundapont[i][0],
					map: map,
					icon: imagedois,
					animation: google.maps.Animation.DROP
					
				  });
				}
				var styles = [
				{"stylers":[{"saturation":-100},{"lightness":5}]},
				{"featureType":"landscape","stylers":[{"lightness":15}]},
				{"featureType":"landscape","elementType":"geometry","stylers":
				[{"color":"#bcf1e1"}]},
				{"featureType":"landscape.man_made","elementType":"geometry","stylers":
				[{"color":"#79ebc9"},{"visibility":"off"}]},
				{"featureType":"poi.business","stylers":[{"visibility":"off"}]},
				{"featureType":"poi.medical","stylers":[{"visibility":"off"}]},
				{"featureType":"poi.park","stylers":[{"visibility":"off"}]},
				{"featureType":"poi.park","elementType":"labels.text","stylers":
				[{"visibility":"off"}]},{"featureType":"poi.sports_complex","stylers":
				[{"visibility":"off"}]},{"featureType":"road","stylers":
				[{"color":"#ffffff"},{"weight":3}]},
				{"featureType":"road","elementType":"labels.text","stylers":
				[{"color":"#626262"},{"visibility":"simplified"},{"weight":6}]},
				{"featureType":"road","elementType":"labels.text.fill","stylers":
				[{"color":"#5d5d5d"},{"weight":7}]},
				{"featureType":"road.arterial","stylers":[{"weight":3}]},
				{"featureType":"road.highway","stylers":[{"weight":3}]},
				{"featureType":"transit.line","stylers":[{"color":"#ffffff"},
				{"weight":3.5}]},{"featureType":"transit.station.bus","stylers":
				[{"saturation":-100},{"lightness":20},{"weight":5}]}
    
				];

  // crio um objeto passando o array de estilos (styles) e definindo um nome para ele;
  var styledMap = new google.maps.StyledMapType(styles, {
    name: "Mapa Style"
  });

  // Aplicando as configurações do mapa
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}

function error(msg) {
    var s = document.querySelector('#status');
        s.innerHTML = typeof msg == 'string' ? msg : "falhou";
        s.className = 'fail';
}

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success, error);
} else {
    error('Seu navegador não suporta <b style="color:black;background-color:#ffff66">Geolocalização</b>!');
}