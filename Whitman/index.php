<!DOCTYPE html>
<html>
<head>
	<title>Página web responsive</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="web_responsive.css">
	<link rel="stylesheet"  href="font/fontello.css">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<link rel="stylesheet" href="css/lightbox.min.css">
</head>

<body>

<!----------------------------------------------->
	<header>

	<div id="escritor">
		<p>Walt Whitman</p>
		
	</div>




	<input type="checkbox" id="menu-bar">
	<label class="icon-menu" for="menu-bar"></label>
		

	<nav id="desplegable"> 
	    <ul>
				<li><a href="#inicio">Inicio</a></li>
				<li><a href="#biografia">Biografía</a></li>
				<li><a href="#fotos">Fotos</a></li>
			    <li><a href="index.php?id=¡Oh yo, vida!#poemas">Poemas</a>

				     <ul id="poemas3" class="icon-submenu"></br>
				            <li><a href="index.php?id=¡Oh yo, vida!#poemas">Oh yo, vida!</a></li>
				            <li><a href="index.php?id=Lleno de vida hoy#poemas">Lleno de vida hoy</a></li>
				            <li><a href="index.php?id=Poetas futuros#poemas">Poetas futuros</a></li>


			         </ul>
			    </li>

		 </ul>
	</nav>


		
		
	</header>

<!----------------------------------------------->

	<section id="inicio">
		<div id="libro"></div>
	</section>

<!----------------------------------------------->


	<section id="biografia">

		<div id="linea"></div>


		<div id="palabras_1">
			<h2>Biografía</h2>
			
		</div>

		
		<div id="texto_1">

			<p>Walter Whitman nació el 31 de mayo de 1819 en un pueblo llamado West Hills, perteneciente a la localidad de Long Island, en Nueva York.</p>
			<p>Este escritor, al que bautizaron como el padre del verso libre, ha sido uno de los autores de mayor relevancia en la literatura estadounidense. Su forma de escribir épica, vitalista y libre, supuso una revolución en su época y marcó el inicio de la moderna poesía de su país. De sus fuentes literarias han bebido autores de la talla de León Felipe, Rubén Darío, Fernando Pessoa, Wallace Stevens, T. S. Eliot, D. H. Lawrence, Federico García Lorca, Pablo Neruda y Jorge Luis Borges; este último se confesó fascinado por este autor.
            Aunque experimentó con varios géneros, la obra de Walt Whitman comprende fundamentalmente poesía y parte de ensayo. Su libro "Hojas de hierba", que reune una colección poética entre la que se encuentra la popular composición "Canto a mi mismo", es su obra más importante. Whitman comenzó a escribirlo en 1850 y él mismo autopublicó la primera versión de forma anónima 5 años después. "Hojas de hierba" llamó poderosamente la atención de Ralph Waldo Emerson, que difundió el libro públicamente. Henry David Thoreau se convirtió también en uno de los mayores admiradores de este autor.</p>
            <p>Walt Whitman falleció el 26 de marzo de 1892 en Camden (Nueva Jersey).</p>
			
			
		</div>
		<div id="texto_2">
			<p>La primera edición de su gran obra, Hojas de hierba (Leaves of grass), vio la luz en 1855. Esta primera edición (habría otras ocho en vida del poeta) constaba de doce poemas, todos ellos sin título, y fue el propio Whitman quien se encargó de editarla y de llevarla a la imprenta.</p>
			
		</div>



	</section>

<!----------------------------------------------->
	

	<section id="fotos">

		
		<a href="fotos/foto1.jpg" data-lightbox="grupo1" data-title="Fotos de Walt Whitman"> <div id="foto_1">
			
		</div></a>
		<a href="fotos/foto5.png" data-lightbox="grupo1" data-title="Fotos de Walt Whitman"> <div id="foto_2">
			
		</div></a>
		<a href="fotos/foto2.jpg" data-lightbox="grupo1" data-title="Fotos de Walt Whitman"> <div id="foto_3">
			
		</div></a>
		<a href="fotos/foto6.jpg" data-lightbox="grupo1" data-title="Fotos de Walt Whitman"> <div id="foto_4">
			
		</div></a>
			
		</div>
	</section>

<!----------------------------------------------->


	<section id="poemas">

		<nav id="bot_poemas">
			<ul>
				<li><a href="index.php?id=¡Oh yo, vida!#poemas">Oh yo, vida!</a></li>
				<li><a href="index.php?id=Lleno de vida hoy#poemas">Lleno de vida hoy</a></li>
				<li><a href="index.php?id=Poetas futuros#poemas">Poetas futuros</a></li>

			</ul>
		</nav>

		<?php

    if(isset($_GET['id'])) {
			
	

	    switch ($_GET['id']) {
			
			case '¡Oh yo, vida!':

			    $titulo='¡Oh yo, vida!';
				$texto='¡Oh yo, vida! Todas estas cuestiones me asaltan,</br>
			 Del desfile interminable de los desleales, </br>
			 De ciudades llenas de necios, de mí mismo, </br>
			 Que me reprocho siempre, pues,</br>
             ¿Quién es más necio que yo, ni más desleal?</br>
             De los ojos que en vano ansían la luz, de los objetos</br>
             Despreciables, de la lucha siempre renovada,</br>
             De los malos resultados de todo, de las multitudes</br>
             Afanosas y sórdidas que me rodean,</br>
             De los años vacíos e inútiles de los demás,</br>
             Yo entrelazado con los demás,</br>
             La pregunta, ¡oh, mi yo!, la triste pregunta que</br>
             Vuelve: «¿Qué hay de bueno en todo esto?»</br>
             Y la respuesta:</br>
             «Que estás aquí, que existen la vida y la identidad,</br>
             Que prosigue el poderoso drama y que quizás</br>
             Tú contribuyes a él con tu rima.';
				$imagen='foto3.jpg';
				
			   

				break;

			case 'Lleno de vida hoy':
				$titulo='Lleno de vida hoy';
				$texto='Lleno de vida hoy, compacto, visible,</br>
               Yo, de cuarenta años de edad el año ochenta y tres de los Estados,</br>
               A tí, dentro de un siglo o de muchos siglos,</br>
               A tí, que no has nacido, te busco.</br>
               Estas leyéndome. Ahora el invisible soy yo,</br>
               Ahora eres tú, compacto, visible, el que intuye los versos y el que me busca,</br>
               Pensando lo feliz que sería si yo pudiera ser tu compañero.</br>
               Sé feliz como si yo estuviera contigo.</br>
               (No tengas demasiada seguridad de que no estoy contigo.)';
                $imagen='foto4.jpg';

				break;

			case 'Poetas futuros':
			    $titulo='Poetas futuros';
				$texto='¡Poetas del futuro! ¡Oradores, cantantes, músicos futuros!</br>
				No es el presente el que me justifica ni el que asegura que yo esté un día con ustedes,</br>
				Son ustedes, la raza nueva y autóctona, atlética, continental,</br>
				la mayor de cuantas son conocidas;</br>
				¡Arriba! Porque ustedes me justificarán.</br>
				Yo no hago más que escribir una o dos palabras para el futuro,</br>
				Solo me adelanto un instante, para retornar luego a las sombras.</br>
				Soy un hombre que, vagabundo, siempre sin hacer alto,</br>
				echo sobre ustedes una mirada al azar, y sigo,</br>
				Dejándoles la encomienda de probarla y definirla,</br>
				Aguardando de vosotros la realización de la magna obra.';
				$imagen='foto7.jpg';

				break;

			  

		}






		?>

		<div id="imagen">
			<img src="fotos/<?php echo $imagen;  ?>">
		
		</div>


		<div id="poema">
			<h1>
				<?php
				echo $titulo;

				?>
			</h1></br></br>
			<p>
				<?php
				echo $texto;
				?>
			</p>

			


<?php }   ?>


	</section>


<!----------------------------------------------->

	<footer>



		<div id="contacto">


		
       <input type="checkbox" id="mail-icono">
	   <label class="icon-mail" for="mail-icono"></label>
		
		
		<form method="POST" action="enviar_datos.php">

			<h2>CONTACTO</h2>
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellido" placeholder="Apellido" required>
			<input type="email" name="correo" placeholder="Correo electrónico" required>
			<textarea name="mensaje" placeholder="Escriba aquí su mensaje"></textarea>
			<input type="submit" value="Enviar" id="boton">
			



		</form>

	
	<?php
		if (isset($_GET['e'])) {

		echo " <script>
			alert ('Mensaje enviado exitosamente');
			
			</script>";
	
		}


	?>

		
	</div>
		
		<div id="datos_2">
			<p>Curso de programación web inicial.</br>Adrián Falasca.</p>

			
		</div>
			
	</footer>
	
	<!----------------------------------------------->		

<script src="js/lightbox-plus-jquery.min.js"></script>


</body>
			


</html>