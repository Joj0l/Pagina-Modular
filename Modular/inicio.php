<?php include 'Recursos/header.html'; ?>

<!-- Fondo superior (Banner) -->
<div class="absolute top-0 left-0 w-full h-72 bg-primary z-0 rounded-b-[3rem] shadow-lg">
    <!-- Decoración de fondo -->
    <img src="Recursos/Imagenes/LogoUdeg.png" class="absolute top-0 right-0 opacity-5 transform translate-x-1/4 -translate-y-1/4" width="800" height="800" viewBox="0 0 200 200"  style="filter: invert(1);">

</div>

<!-- Contenedor Principal -->
<main class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-12 min-h-screen flex flex-col">
    
    <!-- Encabezado / Menú del Dashboard -->
    <header class="flex justify-between items-center mb-10 bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-sm">
        <div class="text-white">
            <h1 class="text-2xl font-bold tracking-wide">Panel de Servicios</h1>
            <p class="text-sm text-gray-300">Bienvenido, Usuario Institucional</p>
        </div>

        <!-- Botón de Menú Desplegable (Reportes) -->
        <div class="relative group">
            <button class="bg-white text-primary font-semibold py-2.5 px-5 rounded-xl shadow hover:bg-gray-50 transition-all flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation"></i>
                Reportar Servicio
                <i class="fa-solid fa-chevron-down text-xs ml-1 transition-transform group-hover:rotate-180"></i>
            </button>
            
            <!-- Menú Desplegable (Oculto por defecto, se muestra al hacer hover) -->
            <div class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right z-50 overflow-hidden">
                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">
                    <i class="fa-solid fa-wifi w-5 text-center mr-2 text-gray-400"></i> Fallo de Red / Internet
                </a>
                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary border-b border-gray-50">
                    <i class="fa-solid fa-desktop w-5 text-center mr-2 text-gray-400"></i> Equipo Dañado
                </a>
                <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">
                    <i class="fa-solid fa-server w-5 text-center mr-2 text-gray-400"></i> Problema de Sistema
                </a>
            </div>
        </div>
    </header>

    <!-- Tarjetas de Resumen (Estadísticas) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Tarjeta 1 -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Reportes Activos</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">14</h3>
            </div>
            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-500 text-xl">
                <i class="fa-solid fa-file-circle-exclamation"></i>
            </div>
        </div>
        
        <!-- Tarjeta 2 -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Resueltos Hoy</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">8</h3>
            </div>
            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-500 text-xl">
                <i class="fa-solid fa-check-double"></i>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Tiempo de Atención</p>
                <h3 class="text-3xl font-extrabold text-primary mt-1">2.4<span class="text-lg text-gray-400 font-medium"> hrs</span></h3>
            </div>
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-500 text-xl">
                <i class="fa-solid fa-stopwatch"></i>
            </div>
        </div>
    </div>

    <!-- Sección Central: Gráfica de Reportes -->
    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 mb-8 flex-grow">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-bold text-primary">Volumen de Reportes (Últimos 7 días)</h2>
            <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-3 py-1 rounded-full">Actualizado hace 5 min</span>
        </div>

        <!-- Simulación de Gráfica de Barras con CSS -->
        <div class="w-full h-64 flex items-end justify-between gap-2 sm:gap-4 px-2">
            <!-- Lunes -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/20 hover:bg-primary/40 transition-colors rounded-t-md h-[40%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">12</div>
                </div>
                <span class="text-xs text-gray-500 mt-3 font-medium">Lun</span>
            </div>
            <!-- Martes -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/20 hover:bg-primary/40 transition-colors rounded-t-md h-[65%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">25</div>
                </div>
                <span class="text-xs text-gray-500 mt-3 font-medium">Mar</span>
            </div>
            <!-- Miércoles -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/20 hover:bg-primary/40 transition-colors rounded-t-md h-[30%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">9</div>
                </div>
                <span class="text-xs text-gray-500 mt-3 font-medium">Mié</span>
            </div>
            <!-- Jueves -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/20 hover:bg-primary/40 transition-colors rounded-t-md h-[80%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">32</div>
                </div>
                <span class="text-xs text-gray-500 mt-3 font-medium">Jue</span>
            </div>
            <!-- Viernes (Día Actual Destacado) -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary hover:bg-primary/90 transition-colors rounded-t-md h-[55%] relative shadow-lg shadow-primary/30">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">18</div>
                </div>
                <span class="text-xs text-primary mt-3 font-bold">Vie</span>
            </div>
            <!-- Sábado -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/10 hover:bg-primary/30 transition-colors rounded-t-md h-[15%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">4</div>
                </div>
                <span class="text-xs text-gray-400 mt-3 font-medium">Sáb</span>
            </div>
            <!-- Domingo -->
            <div class="flex flex-col items-center flex-1 group">
                <div class="w-full bg-primary/10 hover:bg-primary/30 transition-colors rounded-t-md h-[10%] relative">
                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">2</div>
                </div>
                <span class="text-xs text-gray-400 mt-3 font-medium">Dom</span>
            </div>
        </div>
    </div>

    <!-- Botones de Acción Rápida (Abajo) -->
    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-auto">
        <button class="bg-primary text-white font-semibold py-3 px-8 rounded-xl hover:bg-primary/90 hover:shadow-lg hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-plus"></i>
            Crear Nuevo Reporte
        </button>
        <button class="bg-white text-primary border border-gray-200 font-semibold py-3 px-8 rounded-xl hover:bg-gray-50 hover:border-primary/50 transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-list-check"></i>
            Mis Tickets
        </button>
        <button class="bg-white text-gray-600 border border-gray-200 font-semibold py-3 px-8 rounded-xl hover:bg-gray-50 transition-all flex items-center justify-center gap-2">
            <i class="fa-solid fa-headset"></i>
            Contactar Soporte
        </button>
    </div>

</main>

<?php include 'Recursos/footer.html'; ?>