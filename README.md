# learning-Laravel
Este repositorio contiene los sites desarrollados en el Curso de Introducción a Laravel de Platzi,
guiado por el profesor Italo Morales.

            - ciclo.test
            - middleware.test
            - routes.test
            - formrequest.test
            - blade.test
            - ui.test
            - eloquent.test
            - basic.test
            - api-new.test

El ambiente local se configuró con Laradock, habilitando:
  - Nginx server
  - PHP 7.3.17
  - MariaDB 10.4.2
  
Por lo tanto desplegar los site en el navegador requiere:

1- Configurar el hosts, en mi caso (ubuntu 20.04) editando el archivo /etc/hosts

2- Iniciar los servicios para webserver y DB
     - Acceder al directorio laradock desde la terminal
       laradock$ docker-compose up -d nginx mariadb phpmyadmin
       
3- Validar la creación de Base de Datos según se requiera (ver .env correspondiente)
   Por ejemplo, ciclo.test referencia a la base de datos cruddb, para crearla ingresa a la consola del servicio de BD
   
       3.1 Ingresar a la consola de mariadb
       
           laradock$ docker-compose exec mariadb bash
   
              root@xxxxx:/# mysql -u root -p 
                mysql> create database cruddb;
   
       3.2 Igresar a la consola del server para ejecutar la migración de BD
       
           laradock$ docker-compose exec workspace bash
           
              root@yyyyy:/var/www# cd ciclo/   (ingresa al proyecto específico)
              root@yyyyy:/var/www/ciclo# php artisan migrate
 

              
       
       
