#Clase 3: 
- trabajaremos con el module.config.php
Cada vez que querramos un controlador se indica aqui, las url que queremos generar, en controlador por defecto, se indica el tipo de idioma.
en este archivo vamos a colocar todas las configuraciones 
Crearemos un controlador y luego crearemos metdos para llamar una vista desde un controlador, varias vistas, cual es la estructura de un controlador, config de base de datos.

NAMESPACE: Es una forma que tiene PHP u otros lenguajes de programacion, para poder hacer llamados y comunicaion entre varios archivos y varias ubicaciones

Trabajamos con 
Public : en donde se guardan tus Document Objet model
Module : para configuraciones

Por cada controlador que se cree en el src debe haber una vista en el view con el mismo nombre del controladores

Module/Application/src/Application : aqui van los controladores.
Module/Application/view/Application : aqui van todas las vistas.

despues de haber creado nuestro controlador y la vista tenemos que abrir nuestro module.config.php desde el directorio module/config/
ubicamos Controles e invokables y aqui es donde se agrga la ruta del nuevo controller

En el controler vamos a tener que crear un metodo por cada vista que querramos trabajas, y cada procedimiento que querramos ejecutar, tambien para cada procedimiento que se quiera ejecutar
pero no siempre es asi, por ejemplo cuando se crean sistemas de download de archivos se crea un metodo que no necesariamente esta asociado a una vista, y ese metodo lo que hace
es validar la informacion .. inserta datos y luego se redirecciona y carga un componente llamado FORWARD

Para poder pasar valores por la url debemos ir a nuestro module.config.php desde el directorio module/config/
ubicamos may_terminate en Route y le agregamos el parametro que va a pasar , luego tbm vamos al default y agregamos la sentencia

que es el llamado al NAMESPACE respectivo para poder llamar al controlador que se necesita y lo asocia


Plugginf Redirect : redirecciona, recargaa la pagina, peticion al servidor hhtp, quiere decir se pierde todo lo que son seciones . arrays
Pluggins forward : carga una vista dentro del metodo que no se llama exactamente como el metodo

Render , lo que hace es indicar la vista a donde tu quieres que carge, parecido a forwar, con la diferencia que en vez de llamar directamente al pluggin ,esto es para que solo reciba string


