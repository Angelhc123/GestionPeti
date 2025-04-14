<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido adicional de tu panel de opciones -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="titulo">INFORMACIÓN DE LA EMPRESA</div>

                    <div class="fila">
                        <div class="btn">1. MISIÓN</div>
                        <div class="btn">5. ANÁLISIS INTERNO Y EXTERNO</div>
                        <div class="btn">9. PEST</div>
                    </div>
                    <div class="fila">
                        <div class="btn">2. VISIÓN</div>
                        <div class="btn">6. CADENA DE VALOR</div>
                        <div class="btn">10. IDENTIFICACIÓN ESTRATEGIA</div>
                    </div>
                    <div class="fila">
                        <div class="btn">3. VALORES</div>
                        <div class="btn">7. MATRIZ PARTICIPACIÓN</div>
                        <div class="btn">11. MATRIZ CAME</div>
                    </div>
                    <div class="fila">
                        <div class="btn">4. OBJETIVOS</div>
                        <div class="btn">8. LAS 5 FUERZAS DE PORTER</div>
                    </div>

                    <div class="titulo">RESUMEN DEL PLAN EJECUTIVO</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Estilos adicionales -->
<style>
    body {
        font-family: Arial;
        text-align: center;
    }
    .fila {
        display: flex;
        justify-content: center;
        margin: 10px 0;
    }
    .btn {
        background-color: #3498db;
        color: white;
        padding: 20px;
        margin: 5px;
        width: 180px;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }
    .titulo {
        background-color: #2980b9;
        color: white;
        padding: 10px;
        font-weight: bold;
    }
</style>
