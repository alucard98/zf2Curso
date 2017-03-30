#Clase 06 : Instalacion de Skeleton Module

Descargar el Zend Skeleton Module
https://github.com/zendframework/ZendSkeletonModule

descomprimimos y luego copiamos la carpeta ZendSkeletonModule-master en la nuestra carpeta Module de nuestro proyecto, la renombramos

- en application.config.php habilitamos el nuevo modulo
- en Module.php le cambiamos el nombre del nuevo modulo
- en config/module.config.php modificamos los nombresdel modulo
- en src tbm le cambiamos el nombre coon el del modulo
- en /src/(nuevo modulo)/Controller/indexController.php tbm se cambian los datos del namespace
- en /view/ tbm le cambiamos el nombre a la vista con la del modulo