## README

Este proyecto es la página web de la orquesta "Camerata Eduard Toldrà". La página web consta de 4 pestañas (Inicio, Multimedia, Contacto y Acceder). La pestaña "Acceder" muestra un intranet donde los músicos registrados pueden acceder a las partituras de la orquesta. 

La página inicial (url inicial: localhost/proyecto/mvc/public), es decir la pestaña "Inicio", consta de una breve presentación y descripción de la orquesta.
 
La pestaña "Multimedia" consta de varios videos de la orquesta de conciertos realizados.

El apartado "Contacto" muestra un formulario para contactar con la orquesta. Además, muestra la ubicación de la sede en Google Maps.

En la pestaña "Acceder", se muestra un formulario de autentificación donde registrarse con un usuario y clave. Si el usuario y la clave son válidos, se muestra una página con una tabla que indica el instrumento, el titulo, la descripción y la partitura en pdf. La partitura se muestra al hacer click sobre ella para poder descargarla.

El proyecto consta de la base de datos "orquesta" que contiene dos tablas: tabla usuarios y tabla partituras. La tabla usuarios contiene la información necesaria para la autentificación y el acceso a la aplicación (usuario y clave).

La tabla partituras consta de los apartados titulo, instrumento, descripción y partitura. El apartado partitura contiene la ruta de las partituras a descargar. 

El schema de Mysql se ubica en la carpeta mvc/app/baseDatos del proyecto. 

Este proyecto está basado en el patrón Modelo Vista Controlador.    

