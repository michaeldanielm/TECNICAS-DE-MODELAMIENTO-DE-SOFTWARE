<!DOCTYPE html>
<html lang="es">
    <head>
       <!-- titulo -->
        <title>Busqueda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <style> 
header{
    width: 100%;
    height: 30px;
    background: #333;
    color: #fff;   
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
}
        
#menu-bar{
    display: none;
}
body{
    font-family: Arial;
}
nav{
    display: block;
    background-color: aqua;
    
}
nav ul{
    list-style: none;
    padding: 0;
}
nav li{
    line-height: 3rem;
    position: relative;
}
nav li ul{
    position: absolute;
}
nav a{
    color: #ddd;
    display: block;
    text-decoration: none;
    padding: 0 2.5em;
    text-decoration: none;
    transition: 0.4s;
}
nav a:hover{
    background: rgba(0,0,0,0.5);
}
nav li ul{
    display: none;
}
nav li:hover ul{
    display: block;
}

nav > ul {
    background: #333;
    display: table;
    width: 116%;
}
nav > ul > li{
    float: left;
}

nav li li{
    background: #222;
}
nav > ul > li >ul {
    top: 100%;
}
section{
    width: 100%;
    margin-bottom: 25px;
}
#banner {
    margin-top: 178px;
    position: relative;
}

#banner img {
    width: 100%;
    height: 100%;
}

#banner .contenedor {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: #fff;
}

#banner h2 {
    font-size: 28px;
}

#banner a {
    display: block;
    width: 100px;
    color: #fff;
    text-decoration: none;
    padding: 7px;
    margin-top: 10px;
    border: 3px solid #fff;
}

#banner a:hover {
    background: rgba(51,51,51,0.5);
}

@media (min-width:480px) {
    #banner h2 {
        font-size: 40px;
    }
    
    #banner a {
        margin-top: 25px;
    }
}

@media (min-width:768px) { 
    #banner {
        height: 400px;
        overflow: hidden;
    }
    
    #banner img {
        height: auto;
    }
}

@media (min-width:1024px) { 
    #banner img {
        margin-top: 0;
    }
}
            input{
    display: block;
    padding: 10px;
    margin: 17px 0;
                width: 700px;
    font-size: 20px;
}
#boton{
    /*Personalización boton*/
    background: #0020AE;
    color: #fff;
    padding: 10px;
    width: 200px;
    border-radius: 8px;
}
#boton:hover{
    /*puntero*/
    cursor: pointer;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>
    </head>
    
    <body>
       <header>
           <div class="contenedor">
            <nav>  
                <ul> 
                  <li>
                      <a><span class="icon-download"></span>Seleccione sede</a>
                      <ul> <li><a href="http://www.uniminuto.edu/web/seccionalbello">Antioquia y Eje Cafetero</a></li> <li><a href="http://www.uniminuto.edu/web/atlantico">Atlántico</a></li> <li><a href="http://www.uniminuto.edu/web/bolivar">Bolívar</a></li> <li><a href="http://www.uniminuto.edu/web/bogota-presencial">Bogotá Clle. 80&nbsp;Presencial</a></li> <li><a href="http://www.uniminuto.edu/web/uvd/">Bogotá Clle. 80&nbsp;Virtual y Distancia&nbsp;</a></li> <li><a href="http://www.uniminuto.edu/web/bogotasur">Bogotá Sur</a></li> <li><a href="http://www.uniminuto.edu/web/cicu">Bogotá Centro Integral Coprogreso</a></li> <li><a href="http://www.uniminuto.edu/web/cundinamarca">Cundinamarca</a></li> <li><a href="http://www.uniminuto.edu/web/huila">Huila</a></li> <li><a href="http://www.uniminuto.edu/web/llanos">Llanos</a></li> <li><a href="http://www.uniminuto.edu/web/pasto">Nariño</a></li> <li><a href="http://www.uniminuto.edu/web/norte-de-santander">Norte de Santander</a></li> <li><a href="http://www.uniminuto.edu/web/santander">Santander</a></li> <li><a href="http://www.uniminuto.edu/web/tolima">Tolima</a></li> <li><a href="http://www.uniminuto.edu/web/valle">Valle</a></li> </ul>
                  </li>
                  
                  <li>
                  <a><span class="icon-download"></span>Portales de apoyo</a>
                  <ul>
                      <ul> <li><a href="http://www.uniminuto.edu/web/noticias-uniminuto">Agencia de Noticias</a></li> <li><a href="http://www.uniminuto.edu/web/biblioteca">Biblioteca</a></li> <li><a href="http://www.uniminuto.edu/web/bienestarinstitucional/">Bienestar Institucional</a></li> <li><a href="http://www.uniminuto.edu/web/bienestaruvd">Bienestar&nbsp;Virtual</a></li> <li><a href="http://www.nuevaevangelizacion.co/" target="_blank">Centro de Formación para la Nueva Evangelización</a></li> <li><a href="/web/pastoral">Pastoral UNIMINUTO</a></li> <li><a href="http://www.uniminuto.edu/web/ecna">Escuela de Ciencias Naturales Aplicadas</a></li> <li><a href="http://www.uniminuto.edu/web/gestionhumana">Gestión Humana</a></li> <li><a href="http://www.uniminuto.edu/web/internacionalizacion">Internacionalización académica</a></li> <li><a href="http://www.uniminuto.edu/web/pcis">Parque Científico de Innovación Social</a></li> <li><a href="http://www.uniminuto.edu/web/pyd/">Planeación y Desarrollo</a></li> </ul>
                  </ul>
                  </li>
                  <li><a href="home.html">Estudiantes</a></li>
                  <li><a href="home.html">Colaboradores</a></li> <li><a href="home.html">Donaciones</a></li>
                  <li><a href="home.html">Contactenos</a></li>
                 </ul>
             </nav>
          </div>
              <div class="contenedor" >
               <h1 class="site-title"> <a class="logo custom-logo" href="http://www.uniminuto.edu" title="Ir a Sistema Nacional de Bibliotecas"> <img alt="Sistema Nacional de Bibliotecas" height="68" src="../imagenes/logo%20uniminuto.png" width="374"> </a> <span  style="color: blue;">    Sistema Nacional de Bibliotecas </span> <span style="color: blue;"> Rafael García-Herreros </span> </h1> 
              </div>
              
            <nav class="sort-pages modify-pages" id="navigation" role="navigation" style="height: 54px;"> <ul aria-label="Páginas del sitio web" role="menubar"> <li aria-selected="true" class="selected" id="layout_1" role="presentation"> <a aria-labelledby="layout_1" aria-haspopup="true" href="http://biblioteca.uniminuto.edu/inicio" role="menuitem"><span> Inicio</span></a> </li> <li class="" id="layout_5" role="presentation"> <a aria-labelledby="layout_5" href="http://biblioteca.uniminuto.edu/quienes-somos" role="menuitem"><span> Nosotros</span></a> <ul class="child-menu row-fluid" role="menu"> <div class="span12"> <li class="" id="layout_8" role="presentation"> <a aria-labelledby="layout_8" href="http://biblioteca.uniminuto.edu/mision-y-vision" role="menuitem">Misión y Visión</a> </li> <li class="" id="layout_12" role="presentation"> <a aria-labelledby="layout_12" href="http://biblioteca.uniminuto.edu/convenios-y-alianzas" role="menuitem">Convenios y Alianzas</a> </li> <li class="" id="layout_66" role="presentation"> <a aria-labelledby="layout_66" href="http://biblioteca.uniminuto.edu/mapa-del-sitio" role="menuitem">Mapa del Sítio</a> </li> </div> </ul> </li> <li class="" id="layout_10" role="presentation"> <a aria-labelledby="layout_10" href="http://biblioteca.uniminuto.edu/herramientas-de-busqueda" role="menuitem"><span> Herramientas de Búsqueda</span></a> <ul class="child-menu row-fluid" role="menu"> <div class="span12"> <li class="" id="layout_15" role="presentation"> <a aria-labelledby="layout_15" href="http://biblioteca.uniminuto.edu/bases-de-datos" role="menuitem">Bases de Datos</a> </li> <li class="" id="layout_38" role="presentation"> <a aria-labelledby="layout_38" href="http://200.38.75.83:8982/F?func=find-b-0" target="_blank" role="menuitem">Catálogo en Línea</a> </li> <li class="" id="layout_16" role="presentation"> <a aria-labelledby="layout_16" href="http://biblioteca.uniminuto.edu/libros-electronicos" role="menuitem">Libros Electrónicos</a> </li> <li class="" id="layout_39" role="presentation"> <a aria-labelledby="layout_39" href="http://repository.uniminuto.edu" target="_blank" role="menuitem">Repositorio Institucional</a> </li> <li class="" id="layout_40" role="presentation"> <a aria-labelledby="layout_40" href="http://200.38.75.83:8982/F/?func=find-c&amp;ccl_term=(+(+WRD+=+(+universidad+minuto+de+dios+))+OR+(+WRD+=+(+uniminuto+)))+NOT+(+WRD+=+(+tesis+))&amp;local_base=UNM01" target="_blank" role="menuitem">Libros Académicos</a> </li> <li class="" id="layout_51" role="presentation"> <a aria-labelledby="layout_51" href="http://biblioteca.uniminuto.edu/ojs" target="_blank" role="menuitem">Revistas Académicas</a> </li> </div> </ul> </li> <li class="" id="layout_22" role="presentation"> <a aria-labelledby="layout_22" href="http://biblioteca.uniminuto.edu/recursos-para-la-investigacion" role="menuitem"><span> Recursos para la Investigación</span></a> <ul class="child-menu row-fluid" role="menu"> <div class="span12"> <li class="" id="layout_23" role="presentation"> <a aria-labelledby="layout_23" href="http://biblioteca.uniminuto.edu/herramientas-para-la-medicion-cientifica" role="menuitem">Herramientas de Apoyo</a> </li> <li class="" id="layout_24" role="presentation"> <a aria-labelledby="layout_24" href="http://biblioteca.uniminuto.edu/gestores-bibliograficos" role="menuitem">Gestores Bibliográficos</a> </li> <li class="" id="layout_25" role="presentation"> <a aria-labelledby="layout_25" href="http://biblioteca.uniminuto.edu/solicitud-de-articulos" role="menuitem">Solicitud de Artículos</a> </li> <li class="" id="layout_26" role="presentation"> <a aria-labelledby="layout_26" href="http://biblioteca.uniminuto.edu/derechos-de-autor" role="menuitem">Derechos de Autor</a> </li> <li class="" id="layout_27" role="presentation"> <a aria-labelledby="layout_27" href="http://biblioteca.uniminuto.edu/normas-apa" role="menuitem">Guía Normas-APA</a> </li> </div> </ul> </li> <li class="" id="layout_95" role="presentation"> <a aria-labelledby="layout_95" href="http://biblioteca.uniminuto.edu/scopus" role="menuitem"><span> Scopus</span></a> <ul class="child-menu row-fluid" role="menu"> <div class="span12"> <li class="" id="layout_94" role="presentation"> <a aria-labelledby="layout_94" href="http://biblioteca.uniminuto.edu/uniminuto-en-scopus" role="menuitem">Uniminuto en Scopus</a> </li> <li class="" id="layout_97" role="presentation"> <a aria-labelledby="layout_97" href="https://ezproxy.uniminuto.edu/login?url=https://www.scopus.com" target="_blank" role="menuitem">Scopus</a> </li> </div> </ul> </li> <li class="" id="layout_41" role="presentation"> <a aria-labelledby="layout_41" href="http://200.38.75.83:8982/F/?func=bor-info" target="_blank" role="menuitem"><span> Renovación</span></a> </li> <li class="" id="layout_42" role="presentation"> <a aria-labelledby="layout_42" href="http://biblioteca.uniminuto.edu/capacitacion" role="menuitem"><span> Capacitación</span></a> </li> </ul> </nav>
       </header>
		<?php
		     $bus = $_POST["buscar"];
		     include '../conexion/conexion.php';
             $consulta = "SELECT idlibro,titulo,autor,categoria,portada FROM libros";
             $res=mysqli_query($conexion,$consulta);
		?>
       <section id="banner">
		   <center>
			   <br><br>
		     <table >
				 <tr>
					 <td width="150" bgcolor="#acfdc5" height="50" >ID libro</td>
					 <td width="150" bgcolor="#acfdc5" height="50">Titulo</td>
					 <td width="150" bgcolor="#acfdc5" height="50">Autor</td>
					 <td width="150" bgcolor="#acfdc5" height="50">Categoria</td>
					 <td width="150" bgcolor="#acfdc5" height="50">Portada</td>
				 </tr>
				 <?php
				 while($row = mysqli_fetch_array($res))
				 {
					 if($bus == $row["titulo"]){
				 ?>
				 <tr>
					 <td width="150" bgcolor="#acfdc5" height="50" ><?php echo $row['idlibro'] ?></td>
					 <td width="150" bgcolor="#acfdc5" height="50"><?php echo $row['titulo'] ?></td>
					 <td width="150" bgcolor="#acfdc5" height="50"><?php echo $row['autor'] ?></td>
					 <td width="150" bgcolor="#acfdc5" height="50"><?php echo $row['categoria'] ?></td>
					 <td width="150" bgcolor="#acfdc5" height="100"><?php echo $row['portada'] ?></td>
				 </tr>
				 <?php
					 }else{}
				 }
				 ?>
           </table>
           </center>
          </section>

       
    </body>
</html>