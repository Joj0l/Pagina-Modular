<?php include 'Recursos/header.html'; ?>

<!-- Fondo Gráfico Principal -->
<div class="absolute top-0 left-0 w-full h-[65vh] bg-primary clip-diagonal z-0">
    <!-- Patrón SVG abstracto en el fondo -->
    <img src="Recursos/Imagenes/LogoUdeg.png" class="absolute top-0 right-0 opacity-5 transform translate-x-1/4 -translate-y-1/4" width="800" height="800" viewBox="0 0 200 200"  style="filter: invert(1);">

    <svg class="absolute bottom-20 left-10 opacity-10" width="150" height="150" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <rect width="100" height="100" fill="none" stroke="#ffffff" stroke-width="2" transform="rotate(45 50 50)"/>
        <rect x="20" y="20" width="60" height="60" fill="none" stroke="#ffffff" stroke-width="2" transform="rotate(45 50 50)"/>
    </svg>
</div>

<!-- Contenedor Principal (Flotante) -->
<main class="relative z-10 flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8 mt-20 mb-10">
    
    <!-- Tarjeta de Login (Diseño de doble panel) -->
    <div class="bg-white rounded-3xl shadow-2xl flex flex-col lg:flex-row w-full max-w-5xl overflow-hidden border border-gray-100">
        
        <!-- Panel Izquierdo: Formulario Blanco -->
        <div class="w-full lg:w-1/2 p-10 sm:p-14 bg-white flex flex-col justify-center">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-primary mb-2">Inicio De Sesión</h2>
                <p class="text-gray-500 text-sm">Por favor ingresa tus datos.</p>
            </div>

            <form action="inicio.php" method="POST" class="space-y-6">
                <!-- Input Usuario -->
                <div class="relative">
                    <div class="relative flex items-center">
                        <i class="fa-regular fa-envelope absolute left-4 text-gray-400"></i>
                        <!-- CORRECCIÓN: type="text" y se agregó name="codigo" -->
                        <input type="text" name="codigo" required 
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 focus:bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all duration-300" 
                            placeholder="Código">
                    </div>
                </div>

                <!-- Input Contraseña -->
                <div class="relative">
                    <div class="flex justify-between items-center mb-1">
                        <a href="#" class="text-xs font-semibold text-primary hover:text-blue-800 transition-colors">¿Olvidó su contraseña?</a>
                    </div>
                    <div class="relative flex items-center">
                        <i class="fa-solid fa-lock absolute left-4 text-gray-400"></i>
                        <!-- CORRECCIÓN: Se agregó name="nip" -->
                        <input type="password" name="nip" required 
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 focus:bg-white focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all duration-300" 
                            placeholder="NIP">
                    </div>
                </div>

                <!-- Botón de Envío -->
                <button type="submit" class="w-full group bg-primary text-white font-semibold py-3.5 px-4 rounded-xl hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-300 flex justify-between items-center">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </button>
            </form>
        </div>

        <!-- Panel Derecho: Creativo / Branding Corporativo -->
        <div class="hidden lg:flex w-1/2 bg-primary relative p-12 flex-col justify-center overflow-hidden">
            <!-- Capa de color de fondo asegurada -->
            <div class="absolute inset-0 bg-primary"></div>
            
            <!-- Elementos gráficos de "Dashboard" generados con HTML/CSS -->
            <div class="relative z-10 w-full">
                <h3 class="text-white text-2xl font-bold mb-6">Red de Infraestructura</h3>
                
                <!-- Tarjeta de métrica (Glassmorphism) -->
                <div class="glass-card rounded-2xl p-6 mb-4 transform hover:-translate-y-1 transition-transform duration-300">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-white/80 text-sm font-medium"><i class="fa-solid fa-server mr-2"></i>Estado del Servidor</span>
                        <span class="bg-green-400/20 text-green-400 text-xs px-2 py-1 rounded-full font-bold border border-green-400/30">Óptimo</span>
                    </div>
                    <div class="text-white text-3xl font-light">99.99% <span class="text-white/50 text-sm">Uptime</span></div>
                </div>

                <!-- Tarjeta de actividad -->
                <div class="glass-card rounded-2xl p-6 relative overflow-hidden">
                    <span class="text-white/80 text-sm font-medium mb-4 block"><i class="fa-solid fa-chart-line mr-2"></i>Tráfico de Red</span>
                    
                    <!-- Simulación de gráfica con barras CSS -->
                    <div class="flex items-end space-x-2 h-16 mt-2">
                        <div class="w-1/6 bg-white/20 rounded-t-sm h-2/6"></div>
                        <div class="w-1/6 bg-white/40 rounded-t-sm h-4/6"></div>
                        <div class="w-1/6 bg-white/30 rounded-t-sm h-3/6"></div>
                        <div class="w-1/6 bg-white rounded-t-sm h-full relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-white text-primary text-[10px] font-bold px-2 py-0.5 rounded">Hoy</div>
                        </div>
                        <div class="w-1/6 bg-white/50 rounded-t-sm h-5/6"></div>
                        <div class="w-1/6 bg-white/20 rounded-t-sm h-2/6"></div>
                    </div>
                </div>
            </div>
            
            <!-- Círculo decorativo inferior -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 border-[30px] border-white/5 rounded-full"></div>
        </div>
        
    </div>
</main>

<?php include 'Recursos/footer.html'; ?>