@extends('layout')

@section('title','About')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary py-4"> Quien soy </h1>
            <hr>
            <h2 class="display-9"> Dani Jose Colmenares Cadiz </h2>
                <p class="lead text-secondary">Soy un desarrollador web con un
                     historial demostrado de trabajo en la industria de servicios y 
                     tecnología de la información. Mi experiencia incluye el desarrollo 
                     de aplicaciones web utilizando Laravel, un framework de PHP que me
                      permite crear aplicaciones escalables y robustas. Además, también tengo 
                      experiencia en el desarrollo full-stack, lo que significa que puedo trabajar 
                      tanto en el back-end como en el front-end. Estoy especializado en el uso de Vue.js,
                       JavaScript y AJAX para desarrollar funciones de interfaz de usuario y mejorar la
                        experiencia del usuario. A lo largo de mi carrera, he trabajado en una variedad 
                        de proyectos, desde pequeños sitios web hasta aplicaciones de gran escala para empresas
                         nacionales e internacionales. Estoy constantemente aprendiendo y actualizando mis habilidades 
                         para seguir siendo un desarrollador web competitivo en el mercado...</p>
                     
                               
          </div>
        <div class="col-11 col-lg-5">
            <img class="img-fluid mb-1" src="/img/perfil.png" alt="Desarrollo Web">
        </div>
                     <a class="btn btn-lg btn-block btn-primary" 
                     href="{{ route('contact')}}">Contactame</a>
                     <a class="btn btn-lg btn-block btn-outline-primary" 
                     href="{{ route('projects.index')}}">Portafolio</a>  
    </div>
</div>
@endsection