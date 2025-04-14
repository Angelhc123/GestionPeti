<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Opciones</title>
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
</head>
<body>

    <div class="titulo">INFORMACIÓN DE LA EMPRESA</div>

    <div class="fila">
        <a href="{{ route('mision') }}" class="btn">1. MISIÓN</a>
        <a href="{{ route('analisis_interno') }}" class="btn">5. ANÁLISIS INTERNO Y EXTERNO</a>
        <a href="{{ route('pest') }}" class="btn">9. PEST</a>
    </div>
    <div class="fila">
        <a href="{{ route('vision') }}" class="btn">2. VISIÓN</a>
        <a href="{{ route('cadena_de_valor') }}" class="btn">6. CADENA DE VALOR</a>
        <a href="{{ route('estrategia') }}" class="btn">10. IDENTIFICACIÓN ESTRATEGIA</a>
    </div>
    <div class="fila">
        <a href="{{ route('valores') }}" class="btn">3. VALORES</a>
        <a href="{{ route('matriz_participacion') }}" class="btn">7. MATRIZ PARTICIPACIÓN</a>
        <a href="{{ route('matriz_came') }}" class="btn">11. MATRIZ CAME</a>
    </div>
    <div class="fila">
        <a href="{{ route('objetivos') }}" class="btn">4. OBJETIVOS</a>
        <a href="{{ route('las_5_fuerzas') }}" class="btn">8. LAS 5 FUERZAS DE PORTER</a>
    </div>

    <div class="titulo">RESUMEN DEL PLAN EJECUTIVO</div>

</body>
</html>
