@extends('layout')

@section('title','Home')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary py-4"> Descripcion de esta aplicacion </h1>
            <hr>
            <h2 class="display-9">Implementacion de Gates o puertas de acceso  </h2>
                <p class="lead text-secondary">El Usuario Admin con el cual podra Crear, Actualizar y Borrar
                    es danicolmenares7@gmail.com su password es 12345678 para comprobar la politica de seguridad
                cree otro usuario desde  
                <x-nav-link :href="route('register')" :active="request()->routeIs('home')">
                    @lang('Aqui')
                 </x-nav-link>podra visualizar mas no podra  Crear, Actualizar o Borrar esta Nota: los botones estaran activos
                 aun no tenga el permiso esto es totalmente intencional esta deuda tecnica es para demostrar 
                 el retorno del la vista forbidden o prohibido
            
                               
        </div>
        <div class="col-12 col-lg-6 py-5">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    <h2 class="display-9"> Manipulacion e integracion de Imagenes </h2>
                <p class="lead text-secondary">Subir multiples formatos haciendo uso del metodo Storage mas un crud de imagenes
                     tratamiento y optimizacion de las mismas para reducir el tiempo de carga  y el peso 
                     de las mismas a travez de un paquete intervention/image y con Events y Listeners, configuracion de memoria
                     y limite de almacenamiento permitido por laravel en el archivo ini creacion de sybolic link a travez de 
                     php artisan storage:link -h

                        .</p>
           
                      <h2 class="display-9">AWS</h2>
                <p class="lead text-secondary">Creacion de Instacia de servidor virtual con EC2
                    instalacion de todo el entorno de trabajo con ubuntu server, apache2, php, composer, git clonacion de proyecto,
                    configuaracion de archivo ini, instalacion de dependencias de composer.json con composer install / update generacion 
                    key segura con php artisan key:generate creacion de base de datos con RDS y administracion remota desde gestor de base 
                    de datos local a travez del endpoint que ofrece aws al realizar la conf,modificacion del archivo .env con nano     .</p>
           
                    <h2 class="display-9">Relaciones con Eloquent y base de datos</h2>
                <p class="lead text-secondary"> El modelo Project que son los proyectos pertenecen al (belongsTO) modelo Category que 
                    son las categorias y a su vez el modelo Category tiene muchos proyectos (hasMany) solucion del problema n+1 
                    al precargar la relacion a travez del metodo with() evitando que se realize una consulta por cada proyecto a 
                    la base de datos .</p>
           
                    <h2 class="display-9">Factories, Faker y Test </h2>
                <p class="lead text-secondary">Cree metodos usando factories y faker con una base de datos en memoria para probar los metodos 
                    rest de mi aplicacion de esta manera no toca los datos reales de mi aplicacion .</p>

                    <h2 class="display-9">Aspectos generales y diseño </h2>
                <p class="lead text-secondary">CRUD con imagenes, Autenticacion Realizada con laravel brezze, Rutas con nombre para prevenir remplasos en toda app,
                    Validacion de formularios,implementamos directivas utiles de blade para bloques de codigos mas pequeños, migraciones, evitar
                    asignacion masiva, animacion al logearse se realizo con javascript,diseño autoadaptable con bootstrap   .</p>
                     <a class="btn btn-lg btn-block btn-primary" 
                     href="https://www.facebook.com/dani.colmenarescadiz">Contactame</a>
                     <a class="btn btn-lg btn-block btn-outline-primary" 
                     href="{{ route('projects.index')}}">Portafolio</a>  
</div>
@endsection