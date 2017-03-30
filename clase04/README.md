#Clase 4:

LayOuts:
es fundamental porque con esto se da un diseño personalizado a la aplicacion.
La distribucion de los espacios de determinada forma, diseño, diseñlo orientado a distintas vertienes, de distribucion, estetico.
es en realidad una plantilla html que viene con varios parametros dinamicos que permiten manejar toda la conf html, y solo nos preocupamos por las vistas, por lo q queremos mostrar
en determinados zonas de nuestro codigo html
basicamente el layout contiene todo el head, el esqueleto html, y en las vistas es donde se llena el cuerpo de la aplicacion

Para empezar iremos a nuestro directorio /module/Application/config/module.config.php
en View_manager: aqui se le ayuda a zend a manejar el administrador de vistas.
template_map: se configura a la ruta del layout con el que vas a trabajar

se puede manejar varios layout, incluso es una practica habitual crear un layout por controlador, sobretodo cuando los layout van a trabajar con los metodos de forma dinamica
asociandodos para la configuracion del title, o metaname descccription..


inlineScript -> esto permite que tu codigo quede limpio, renderizado y mas simple

para tener mas conocimiento de las propiedades:

headmeta -> https://framework.zend.com/manual/2.1/en/modules/zend.view.helpers.head-meta.html
setTerminal(true) -> carga la vista pero sin layout, se usa para ajax por ejemplo

    
