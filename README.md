# Prerequisitos
* Docker y Docker Compose

# Instalación y ejecución
Ejecutar el siguiente comando:
~~~bash
docker-compose up -d
~~~
Esto descargará las imágenes de MariaDB 10.6 y Symfony 6.1, y luego procederá a crear los contenedores para la aplicación.

Una vez creados los contenedores, se puede importar la estructura de la base de datos dentro del Gestor que se implementó. La estructura está dentro del directorio `src/sql/`.

Ahora, para ingresar al contenedor de la app, ejecutar el siguiente comando:
~~~bash
docker exec -it hbv_app sh
~~~
donde luego hay que ejecutar el siguiente comando para instalar los paquetes necesarios:
~~~bash
composer install
~~~
Una vez completado el comando anterior, la aplicación debería estar funcionando en la ruta http://localhost:4000
