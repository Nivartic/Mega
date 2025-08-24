<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA Drivers | Reclutamiento de Motorizados Independientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Chosen Palette: MEGA (Celeste: #00BFFF, Negro: #000000, Azul Oscuro: #00008B, Blanco: #FFFFFF, Gris para reflectante) -->
    <!-- Application Structure Plan: A single-page interactive recruitment system for independent motorizados. It features a hero section highlighting benefits, followed by a multi-step registration form (Personal, Vehicle, Documents, Payment, Confirmation). The form steps are managed via JavaScript to show/hide sections. This structure provides a guided and user-friendly onboarding experience for potential drivers. -->
    <!-- Visualization & Content Choices: 1. Benefits Section: Goal=Inform/Attract. Method=Text blocks with icons. Interaction=None. Justification=Clear, concise presentation of value proposition. 2. Registration Form: Goal=Collect Data. Method=HTML form with input fields and file uploads. Interaction=Step-by-step navigation, basic validation. Justification=Standard and intuitive for data collection. 3. Payment Simulation: Goal=Process Transaction. Method=HTML button with JS simulation. Interaction=Click to simulate payment. Justification=Simplifies the payment process for the user in this demo. 4. Confirmation: Goal=Acknowledge. Method=Text message. Interaction=None. Justification=Provides closure to the registration process. -->
    <!-- CONFIRMATION: NO SVG graphics used. NO Mermaid JS used. -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .mega-arrow {
            width: 30px;
            height: 30px;
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin-right: 8px;
        }
        .mega-arrow::before,
        .mega-arrow::after {
            content: '';
            position: absolute;
            background-color: #00BFFF; /* Celeste */
            width: 2px;
            height: 15px;
        }
        .mega-arrow::before {
            transform: rotate(45deg);
            left: 5px;
            top: 7px;
        }
        .mega-arrow::after {
            transform: rotate(-45deg);
            left: 5px;
            top: 15px;
        }
        .section-fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .section-fade-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <header class="bg-black/80 backdrop-blur-lg fixed top-0 left-0 right-0 z-50 border-b border-gray-700">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="#hero" class="text-2xl font-bold text-white flex items-center">
                    <span class="mega-arrow"></span> MEGA Drivers
                </a>
                <nav class="hidden md:flex space-x-8">
                    <a href="#beneficios" class="text-gray-300 hover:text-white transition-colors">Beneficios</a>
                    <a href="#registro" class="text-gray-300 hover:text-white transition-colors">Registro</a>
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors">Iniciar Sesión</a>
                    <a href="#faq" class="text-gray-300 hover:text-white transition-colors">FAQ</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="pt-16">
        @extends('shared.Layout')

        @section('styles')
        <!-- Estilos específicos de esta página -->
        @endsection

        @section('content')
        <section id="hero" class="min-h-screen flex items-center justify-center bg-black text-center relative overflow-hidden">
            <div class="absolute inset-0 z-0 opacity-20" style="background-image: url('https://placehold.co/1920x1080/000000/00BFFF?text=MEGA+DRIVERS+BACKGROUND'); background-size: cover; background-position: center;"></div>
            <div class="relative z-10 max-w-4xl mx-auto px-4 py-16">
                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-4">¡Conviértete en un MEGA Driver!</h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    Sé parte de la élite de la logística premium. Conduce tu futuro con nosotros.
                </p>
                <a href="#registro" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full text-lg transition-colors shadow-lg">
                    ¡Únete Ahora!
                </a>
            </div>
        </section>

        <section id="beneficios" class="py-20 md:py-32 bg-gray-900 section-fade-in">
            <div class="max-w-6xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold text-white mb-12">Beneficios de ser un MEGA Driver</h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto mb-16">
                    En MEGA, valoramos tu esfuerzo y te ofrecemos las herramientas y el soporte para que tu trabajo sea más rentable y profesional.
                </p>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
                        <span class="text-5xl text-blue-500 mb-4 block">💰</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Gana Más</h3>
                        <p class="text-gray-400">¡Accede a tarifas premium de S/1.20 por km y bonos por desempeño!</p>
                    </div>
                    <div class="bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
                        <span class="text-5xl text-blue-500 mb-4 block">🎒</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Equípate con Estilo</h3>
                        <p class="text-gray-400">Obtén tu exclusivo Backpack de MEGA y polo celeste para un look profesional.</p>
                    </div>
                    <div class="bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
                        <span class="text-5xl text-blue-500 mb-4 block">🗺️</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Libertad y Control</h3>
                        <p class="text-gray-400">Trabaja a tu propio ritmo, con seguimiento en tiempo real de tus pedidos.</p>
                    </div>
                    <div class="bg-gray-800 p-8 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition-all duration-300">
                        <span class="text-5xl text-blue-500 mb-4 block">🤝</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Comunidad MEGA</h3>
                        <p class="text-gray-400">Únete a una red de profesionales independientes y accede a beneficios exclusivos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="registro" class="py-20 md:py-32 bg-gray-800 section-fade-in">
            <div class="max-w-3xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-white text-center mb-12">Proceso de Registro</h2>
                <div class="bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-700">
                    <!-- Step Indicators -->
                    <div class="flex justify-between items-center mb-8 text-gray-400 font-semibold">
                        <div id="step-1-indicator" class="flex-1 text-center text-blue-500">1. Personal</div>
                        <div class="w-8 h-1 bg-gray-700 rounded-full mx-2"></div>
                        <div id="step-2-indicator" class="flex-1 text-center">2. Vehículo</div>
                        <div class="w-8 h-1 bg-gray-700 rounded-full mx-2"></div>
                        <div id="step-3-indicator" class="flex-1 text-center">3. Documentos</div>
                        <div class="w-8 h-1 bg-gray-700 rounded-full mx-2"></div>
                        <div id="step-4-indicator" class="flex-1 text-center">4. Activación</div>
                        <div class="w-8 h-1 bg-gray-700 rounded-full mx-2"></div>
                        <div id="step-5-indicator" class="flex-1 text-center">5. Confirmación</div>
                    </div>

                    <!-- Form Steps -->
                    <form id="registrationForm" enctype="multipart/form-data">
                        @csrf
                        <!-- Step 1: Personal Information -->
                        <div id="step1" class="form-step">
                            <h3 class="text-2xl font-bold text-white mb-6">Información Personal</h3>
                            <div class="mb-4">
                                <label for="fullName" class="block text-gray-300 text-sm font-bold mb-2">Nombre Completo:</label>
                                <input type="text" id="fullName" name="fullName" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="dob" class="block text-gray-300 text-sm font-bold mb-2">Fecha de Nacimiento:</label>
                                <input type="date" id="dob" name="dob" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Correo Electrónico:</label>
                                <input type="email" id="email" name="email" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-300 text-sm font-bold mb-2">Número de Teléfono:</label>
                                <input type="tel" id="phone" name="phone" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block text-gray-300 text-sm font-bold mb-2">Contraseña:</label>
                                <input type="password" id="password" name="password" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required minlength="8">
                            </div>
                            <div class="mb-6">
                                <label for="confirmPassword" class="block text-gray-300 text-sm font-bold mb-2">Confirmar Contraseña:</label>
                                <input type="password" id="confirmPassword" name="confirmPassword" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required minlength="8">
                                <p id="passwordMatchError" class="text-red-500 text-xs italic mt-2 hidden">Las contraseñas no coinciden.</p>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" onclick="nextStep()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Siguiente</button>
                            </div>
                        </div>

                        <!-- Step 2: Vehicle Information -->
                        <div id="step2" class="form-step hidden">
                            <h3 class="text-2xl font-bold text-white mb-6">Información del Vehículo</h3>
                            <div class="mb-4">
                                <label for="vehicleType" class="block text-gray-300 text-sm font-bold mb-2">Tipo de Vehículo:</label>
                                <select id="vehicleType" name="vehicleType" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                                    <option value="">Seleccione</option>
                                    <option value="moto">Moto</option>
                                    <option value="bicicleta">Bicicleta</option>
                                    <option value="auto">Auto</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="vehicleBrand" class="block text-gray-300 text-sm font-bold mb-2">Marca:</label>
                                <input type="text" id="vehicleBrand" name="vehicleBrand" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="vehicleModel" class="block text-gray-300 text-sm font-bold mb-2">Modelo:</label>
                                <input type="text" id="vehicleModel" name="vehicleModel" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <label for="licensePlate" class="block text-gray-300 text-sm font-bold mb-2">Placa:</label>
                                <input type="text" id="licensePlate" name="licensePlate" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="flex justify-between">
                                <button type="button" onclick="prevStep()" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Anterior</button>
                                <button type="button" onclick="nextStep()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Siguiente</button>
                            </div>
                        </div>

                        <!-- Step 3: Document Upload -->
                        <div id="step3" class="form-step hidden">
                            <h3 class="text-2xl font-bold text-white mb-6">Subida de Documentos</h3>
                            <p class="text-gray-400 mb-6">Por favor, sube fotos claras o escaneos de los siguientes documentos:</p>
                            <div class="mb-4">
                                <label for="dniUpload" class="block text-gray-300 text-sm font-bold mb-2">DNI (Anverso y Reverso):</label>
                                <input type="file" id="dniUpload" name="dniUpload" accept="image/*,.pdf" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="antecedentesUpload" class="block text-gray-300 text-sm font-bold mb-2">Antecedentes Policiales:</label>
                                <input type="file" id="antecedentesUpload" name="antecedentesUpload" accept="image/*,.pdf" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="licenseUpload" class="block text-gray-300 text-sm font-bold mb-2">Licencia de Conducir:</label>
                                <input type="file" id="licenseUpload" name="licenseUpload" accept="image/*,.pdf" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="soatUpload" class="block text-gray-300 text-sm font-bold mb-2">SOAT:</label>
                                <input type="file" id="soatUpload" name="soatUpload" accept="image/*,.pdf" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <label for="propertyCardUpload" class="block text-gray-300 text-sm font-bold mb-2">Tarjeta de Propiedad del Vehículo:</label>
                                <input type="file" id="propertyCardUpload" name="propertyCardUpload" accept="image/*,.pdf" class="shadow appearance-none border border-gray-700 rounded w-full py-2 px-3 bg-gray-800 text-white leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500" required>
                            </div>
                            <div class="mb-6">
                                <input type="checkbox" id="termsAccepted" name="termsAccepted" class="mr-2 leading-tight" required>
                                <label for="termsAccepted" class="text-gray-300 text-sm">Acepto los <a href="#" class="text-blue-500 hover:underline">Términos y Condiciones</a>.</label>
                            </div>
                            <div class="flex justify-between">
                                <button type="button" onclick="prevStep()" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Anterior</button>
                                <button type="button" onclick="nextStep()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Siguiente</button>
                            </div>
                        </div>

                        <!-- Step 4: Activation -->
                        <div id="step4" class="form-step hidden">
                            <h3 class="text-2xl font-bold text-white mb-6">Activación de Cuenta y Kit MEGA</h3>
                            <p class="text-gray-400 mb-4">¡Bienvenido a MEGA! Como parte de tu inicio, tendrás acceso a **4 envíos de prueba** para familiarizarte con nuestra plataforma y servicio.</p>
                            <p class="text-gray-400 mb-4">Una vez completados estos envíos, para continuar recibiendo pedidos y reclamar tu exclusivo **Backpack de MEGA y polo celeste**, se requiere un pago único de:</p>
                            <p class="text-5xl font-bold text-blue-500 text-center mb-8">S/ 50.00</p>
                            <p class="text-gray-400 mb-8 text-center">Este monto activa tu cuenta de forma permanente y te integra completamente a la red de MEGA Drivers.</p>
                            <div id="paymentMessage" class="text-green-400 text-center mb-4 hidden"></div>
                            <div class="flex justify-between">
                                <button type="button" onclick="prevStep()" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Anterior</button>
                                <button type="button" onclick="simulatePayment()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline transition-colors">Entendido, Activar Mi Cuenta</button>
                            </div>
                        </div>

                        <!-- Step 5: Confirmation -->
                        <div id="step5" class="form-step hidden">
                            <h3 class="text-2xl font-bold text-white mb-6 text-center">¡Registro Completado!</h3>
                            <div class="text-center text-green-400 text-6xl mb-8">✅</div>
                            <p class="text-gray-300 text-lg text-center mb-4">¡Felicidades, te has registrado exitosamente como potencial MEGA Driver!</p>
                            <p class="text-gray-400 text-center mb-8">
                                Tu solicitud está siendo revisada. Recibirás un correo electrónico con los próximos pasos, incluyendo la verificación de tus documentos y la coordinación para iniciar tus 4 envíos de prueba. Una vez completados, podrás realizar el pago de S/50 para reclamar tu kit y continuar recibiendo pedidos.
                            </p>
                            <p class="text-gray-300 text-lg text-center">¡Bienvenido a la comunidad MEGA!</p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="faq" class="py-20 md:py-32 bg-gray-900 section-fade-in">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-white text-center mb-12">Preguntas Frecuentes (FAQ)</h2>
                <div class="space-y-6">
                    <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                        <h3 class="text-xl font-bold text-white mb-2">¿Qué necesito para ser un MEGA Driver?</h3>
                        <p class="text-gray-400">Necesitas tener un vehículo (moto, bicicleta o auto), DNI, antecedentes policiales, licencia de conducir, SOAT y tarjeta de propiedad. Debes ser mayor de edad y tener ganas de ofrecer un servicio de calidad.</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                        <h3 class="text-xl font-bold text-white mb-2">¿Cuál es el costo de activación de cuenta?</h3>
                        <p class="text-gray-400">Una vez que completes tus 4 envíos de prueba iniciales, se requiere un pago único de S/ 50 para activar tu cuenta permanentemente y recibir tu Backpack y Polo de MEGA.</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                        <h3 class="text-xl font-bold text-white mb-2">¿Cómo gano dinero con MEGA?</h3>
                        <p class="text-gray-400">Recibirás tarifas de S/1.20 por km, bonos por desempeño y acceso a carreras preferenciales. Nuestro sistema de puntos te permite acumular beneficios adicionales.</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-700">
                        <h3 class="text-xl font-bold text-white mb-2">¿Cuándo recibo mi Backpack y Polo?</h3>
                        <p class="text-gray-400">Después de completar tus 4 envíos de prueba y realizar el pago de S/50, te contactaremos para coordinar la entrega de tu kit de bienvenida.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-black text-gray-400 py-8 text-center border-t border-gray-700">
        <p>&copy; 2025 MEGA. Todos los derechos reservados.</p>
    </footer>

    <script>
        let currentStep = 1;
        const totalSteps = 5;

        // Function to show a specific form step
        function showStep(stepNum) {
            document.querySelectorAll('.form-step').forEach(step => {
                step.classList.add('hidden');
            });
            document.getElementById(`step${stepNum}`).classList.remove('hidden');

            // Update step indicators
            document.querySelectorAll('[id^="step-"][id$="-indicator"]').forEach(indicator => {
                indicator.classList.remove('text-blue-500');
            });
            document.getElementById(`step-${stepNum}-indicator`).classList.add('text-blue-500');
            currentStep = stepNum;
        }

        // Function to validate current step before moving next
        function validateStep(stepNum) {
            const currentFormStep = document.getElementById(`step${stepNum}`);
            const requiredInputs = currentFormStep.querySelectorAll('[required]');
            let isValid = true;

            requiredInputs.forEach(input => {
                if (input.type === 'file') {
                    if (input.files.length === 0) {
                        isValid = false;
                        input.style.borderColor = 'red';
                    } else {
                        input.style.borderColor = ''; // Reset border
                    }
                } else if (input.type === 'checkbox') {
                    if (!input.checked) {
                        isValid = false;
                        // No visual cue for checkbox, relies on browser default validation
                    }
                } else {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.style.borderColor = 'red';
                    } else {
                        input.style.borderColor = ''; // Reset border
                    }
                }
            });

            // Specific validation for Step 1 (Personal Information)
            if (stepNum === 1) {
                const password = document.getElementById('password');
                const confirmPassword = document.getElementById('confirmPassword');
                const passwordMatchError = document.getElementById('passwordMatchError');

                if (password.value !== confirmPassword.value) {
                    isValid = false;
                    password.style.borderColor = 'red';
                    confirmPassword.style.borderColor = 'red';
                    passwordMatchError.classList.remove('hidden');
                } else {
                    password.style.borderColor = '';
                    confirmPassword.style.borderColor = '';
                    passwordMatchError.classList.add('hidden');
                }

                if (password.value.length < 8) {
                    isValid = false;
                    password.style.borderColor = 'red';
                    // Optionally, add another error message for password length
                }
            }

            return isValid;
        }

        // Function to go to the next step
        function nextStep() {
            if (validateStep(currentStep)) {
                if (currentStep < totalSteps) {
                    showStep(currentStep + 1);
                }
            } else {
                // In a real application, you'd show a more user-friendly error message
                // For this demo, browser's default required field validation will show
            }
        }

        // Function to go to the previous step
        function prevStep() {
            if (currentStep > 1) {
                showStep(currentStep - 1);
            }
        }

        // Simulate payment process and register driver
        function simulatePayment() {
            const paymentMessage = document.getElementById('paymentMessage');
            paymentMessage.classList.remove('hidden');
            paymentMessage.textContent = 'Procesando activación...';

            // Crear FormData con todos los datos del formulario
            const formData = new FormData(document.getElementById('registrationForm'));
            
            // Enviar datos al servidor
            fetch('{{ route("register.driver") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Mostrar mensaje de éxito
                    paymentMessage.textContent = 'Activación exitosa!';
                    paymentMessage.style.color = '#4ade80'; // verde
                    
                    // Avanzar al paso 5 (confirmación)
                    setTimeout(() => {
                        showStep(5);
                    }, 1500);
                } else {
                    // Mostrar mensaje de error
                    paymentMessage.textContent = 'Error: ' + data.message;
                    paymentMessage.style.color = '#ef4444'; // rojo
                }
            })
            .catch(error => {
                console.error('Error:', error);
                paymentMessage.textContent = 'Error al procesar la solicitud. Inténtalo de nuevo.';
                paymentMessage.style.color = '#ef4444'; // rojo
            });
        }

        // Initial display
        showStep(1);

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Fade-in effect for sections on scroll
        const sections = document.querySelectorAll('.section-fade-in');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const sectionObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    // Only unobserve if you want the animation to play once
                    // If you want it to play every time it enters viewport, remove this line
                    // observer.unobserve(entry.target);
                } else {
                    // Optional: remove is-visible when out of view to re-trigger on scroll back
                    // entry.target.classList.remove('is-visible');
                }
            });
        }, observerOptions);

        sections.forEach(section => {
            sectionObserver.observe(section);
        });
    </script>
</body>
</html>

<script>
    // Aquí van los scripts específicos de esta página
    // Incluye todo el JavaScript que tenías antes
</script>
@endsection
