{{-- resources/views/mision.blade.php --}}
@extends('layouts.app')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
<div class="container">
    <!-- Título de la Misión -->
    <h2>MISIÓN</h2>
    
    <p>"La MISIÓN es la razón de ser de la empresa/organización."</p>
    <ul>
        <li>Debe ser clara, concisa y compartida.</li>
        <li>Siempre orientada hacia el cliente no hacia el producto o servicio.</li>
        <li>Refleja el propósito fundamental de la empresa en el mercado.</li>
    </ul>

    <p>En términos generales describe la actividad y razón de ser de la organización y contribuye como una referencia permanente en el proceso de planificación estratégica.</p>
    <p>Se expresa a través de una oración que define el propósito fundamental de su existencia, estableciendo qué hace la empresa, por qué y para quién lo hace.</p>
    
    <h3>EJEMPLOS</h3>
    <h4>Empresa de servicios</h4>
    <p>"La gestión de servicios que contribuyen a la calidad de vida de las personas y generan valor para los grupos de interés."</p>

    <h4>Empresa productora de café</h4>
    <p>"Gracias a nuestro entusiasmo, trabajo en equipo y valores, queremos deleitar a todos aquellos que, en el mundo aman la calidad de vida, a través del mejor café que la naturaleza pueda ofrecer, ensalzado por las mejores tecnologías, por la emoción y la implicación intelectual que nacen de la búsqueda de lo bello en todo lo que hacemos."</p>

    <h4>Agencia de certificación</h4>
    <p>"Dar a nuestros clientes valor económico a través de la gestión de la Calidad, la Salud y la Seguridad, el Medio Ambiente y la Responsabilidad Social de sus activos, proyectos, productos y sistemas, obteniendo como resultado la capacidad para lograr la reducción de riesgos y la mejora de los resultados."</p>
    
    <h4>En este apartado describa la Misión de su empresa:</h4>
    
    <!-- Textarea para describir la misión -->
    <textarea class="form-control" rows="4" placeholder="Escriba la misión de su empresa aquí..."></textarea>

    <!-- Botones en la parte inferior con el orden correcto -->
    <div class="d-flex justify-content-between mt-4">
        <!-- Botón para volver al panel (izquierda) -->
        <a href="{{ route('panel') }}" class="btn btn-secondary">Volver al Panel</a>

        <!-- Botón para redirigir a la sección de visión (derecha) -->
        <a href="{{ route('vision') }}" class="btn btn-success">Ir a Visión</a>
    </div>
</div>
@endsection
