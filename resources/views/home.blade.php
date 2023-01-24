@extends('layout')

@section('title','Home')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary py-4"> Desarrollo web </h1>
            <hr>
            <h2 class="display-9"> Disponibilidad Inmediata de Aplicaciones y Data</h2>
                <p class="lead text-secondary">El desarrollo web  es un campo emocionante
                     y en constante evolución, con un gran potencial para impactar positivamente 
                     en la vida de las personas y en la economía global existe una gran
                    tendencia a mover todo tipo de desarrollo a la nube y tener 
                    las aplicaciones y la data siempre disponibles, cerrando asi la brecha de la
                    imcompatibilidad con caulquier dispositivo y sin necesidad de tener nada instalado en
                    nuestros equipos.</p>
            
                               
        </div>
        <div class="col-12 col-lg-6 py-5">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    <h2 class="display-9"> Desarrollo de APIs REST </h2>
                <p class="lead text-secondary">El desarrollo de APIs REST seguirá 
                    creciendo en los próximos años debido a la necesidad de conectar 
                    sistemas, el aumento de la movilidad y el crecimiento de la nube y el IoT.
                    Las empresas que adopten esta tecnología tendrán una ventaja competitiva, 
                    ya que podrán ofrecer servicios de valor agregado a sus clientes y competir
                    de manera más eficiente en el mercado.</p>
            <h2 class="display-9">Separar Back y front </h2>
                <p class="lead text-secondary">La separación de back-end y front-end tiene varios beneficios.
                     Primero, permite especializarse en una área específica y trabajar 
                     de manera más eficiente. También facilita el mantenimiento y escalabilidad de la aplicación,
                    ya que las actualizaciones y cambios en una parte de la aplicación no afectan a la otra.
                    Además, la separación también ayuda a aumentar la seguridad de la aplicación, 
                    ya que los datos confidenciales se almacenan en el back-end y están protegidos 
                    contra ataques externos.</p>
            <h2 class="display-9">Web apps SPA</h2>
                <p class="lead text-secondary">El desarrollo de aplicaciones web 
                    de una sola página(SPA) seguirá creciendo este año, y es la 
                    parte frontend del desarrollo de una aplicación web moderna.</p>
            <h2 class="display-9">Frameworks de desarrollo</h2>
                <p class="lead text-secondary">La gran demanda del desarrollo con 
                    frameworks ya es un hecho. El desarrollo en lenguajes como 
                    JavaScript, vue.js y en frameworks de desarrollo web 
                    para PHP como Laravel cada vez se comenzarán mas 
                    desarrollos con estas tecnologías y las empresas los solicitarán
                     mucho más de lo que ya lo hacen.</p>
                     <a class="btn btn-lg btn-block btn-primary" 
                     href="{{ route('contact')}}">Contactame</a>
                     <a class="btn btn-lg btn-block btn-outline-primary" 
                     href="{{ route('projects.index')}}">Portafolio</a>  
</div>
@endsection