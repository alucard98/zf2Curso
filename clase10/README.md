Semana 10 : ZendDB
---------------------------------
Documentacion:
https://framework.zend.com/manual/2.4/en/index.html#zend-db

El ZendDB basicamente es un conjunto de clases que nos permite trabajar con base de datos

Zend\Db\Adapter -> es co el cual se conecta a la base de datos
Zend\Db\Resulset, ->  consultas, simple, se ingresan como string como "select * from user"
Zend\Db\Sql -> es un componente ORM q posee , con el cual se hace consultas a la base 
utilizando una pequeña capa de abstraccion con la cual se hacen consultas mediante metodos
Zend\Db\TableGateway-> nos permite crear entidades para trabajar con patrones a la hora 
de conectarnos a la base de datos, usa el patron factory, crea fabrica de clases 
para poder trabajar la conexion.

En /condif/local.php 
es en donde nosotros vamos a indicar la formula mediante la cual nos vamos a conectar. dentro del array.