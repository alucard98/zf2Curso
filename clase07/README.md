Semana 7 - Modelos
---------------------------------

* creamos al carpeta Model en module/Application/src/Application/
y dentro la carpeta Entity


Dao-> la metodologia de como nos conectaremos a la base de datos a traves del tablegateway
luego creamos la hoja Model.php

la primera instancia que colocamos es ://namespace Modulo\Model\Entity;
luego se crea una clase con el mismo nombre de la hoja creada

el objetivo de un modelo es servir de puente para traer la informacion de una base 
de datos o de un grupo de datos, cargarlos en el controlador y mediante aquel enviarle los datos a las vistas
los metodos que vamos a trabajar van 
Get->para cargar informacion
Set->para modificar informacion
delete->eliminar