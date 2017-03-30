#Clase 05 : Modulos
Los modulos sirvern para que el sistema sea escalable, manejable y reutilizable reduciento los tiempos de produccion, 
que pueden ser usads como modulos de ventas,almacen,gestion,registros, etc.

Dentro de la carpeta module estan guardados los modulos en carpetas, la que viene por defecto es el modulo Application
dentro de Application existe 4 carpetas:
Archivo Module.php  

- Config : es donde se guarda el archivo module.config.php 

- Src : en dnde se guardan los direcctorio con nombre de aplicacion, mismo nombre del modelo, y dentro esta el directorio Controles y tbm van a ir los modelos

- View : tiene a su ves 3 subdirectiorios
    . applications.- notese que este directorio es con minuscula, aqui es el directorio principal de cada una de las vistas que van asociadas a los controladores
    . error.-
    . layout.- que es donde se guardan las configuraciones de llamados a hojas de estilos y js

Nuevos Modulos:

despues de haber realizado la creacion de una nueva carpeta con el nuevo modulo y todas sus subcarpetas y haber configurado el module.config.php
se tiene que configurar en /config/application.config.php para registrar el nuevo modulo creado y se registra en el arreglo Modules

- Modelo de directorios en /module/crear nuevo modulo
- dentro de la nueva carpeta creamos 3 carpetas config,src,view y un archivo llamado Module.php
- dentro de config un archivo de configuracion module.config.php 
- luego en src creas una carpeta con el nombre de tu modulo con mayuscula, dentro de esta una carpeta Controller, dentro de esta los controladores que van a ser utilizados aqui
ejemplo "HaroldController.php"
- dentro de view creamos la carpeta de eror, layout (que no es necesario porque se puede traer desde el modulo aplication, y seria mejor desde ahi para manejar una sola configuracion de masterpage)
una carpeta con el nombre del modulo pero con minuscula, con las vistas necesarias para poder trabajar

 