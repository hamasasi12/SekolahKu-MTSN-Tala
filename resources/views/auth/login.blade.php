<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sekolahku adalah aplikasi manajemen sekolah berbasis website yang di bangun dan di kembangkan dengan Framework Laravel">
    <meta name="author" content="Andri Desmana">
    <title>Login Page - SekolahKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Illustration (Hidden on mobile) -->
        <div class="hidden lg:flex lg:w-3/5 bg-gradient-to-br from-green-50 to-green-100 items-center justify-center p-12">
            <div class="w-full max-w-2xl px-8">
                <img 
                    src="{{asset('Assets/Backend/images/illustration/login-v2.svg')}}" 
                    alt="Login Illustration" 
                    class="w-full h-auto object-contain"
                    loading="eager"
                />
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-2/5 flex items-center justify-center p-6 lg:p-12">
            <div class="w-full max-w-md">
                <!-- Brand Logo -->
                <div class="flex items-center mb-8">
                    <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('Assets/Frontend/img/logofix.png') }}" alt="Logo Icon MTSn 7 Tanah Laut" loading="eager" class="w-8 h-8">
                    </div>
                    <h1 class="ml-3 text-2xl font-bold text-green-700">MTSn 7 Tanah Laut</h1>
                </div>

                <!-- Alert Messages -->
                <div id="errorAlert" class="hidden mb-4 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg relative">
                    <span class="block sm:inline" id="errorMessage"></span>
                    <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.classList.add('hidden')">
                        <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </button>
                </div>

                <div id="successAlert" class="hidden mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative">
                    <span class="block sm:inline" id="successMessage"></span>
                    <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.classList.add('hidden')">
                        <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </button>
                </div>

                <!-- Welcome Text -->
                <h2 class="text-3xl font-bold text-gray-700 mb-2">Welcome to SekolahKu! 👋</h2>
                <p class="text-gray-600 mb-8">Silakan masuk ke akun Anda menggunakan email dan password yang sudah didaftarkan.</p>

                <!-- Login Form -->
                <form class="space-y-6" id="loginForm" action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition"
                            placeholder="Masukan Email"
                            required
                        >
                        <p class="mt-1 text-sm text-red-600 hidden" id="emailError"></p>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-green-600 hover:text-green-800">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <input
                                type="password" 
                                id="password" 
                                name="password" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition pr-12"
                                placeholder="············"
                                required
                            >
                            <button 
                                type="button" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700"
                                onclick="togglePassword()"
                            >
                                <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                        <p class="mt-1 text-sm text-red-600 hidden" id="passwordError"></p>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember" 
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                        >
                        <label for="remember" class="ml-2 text-sm text-gray-700">Remember Me</label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-green-700 text-white py-3 rounded-lg font-medium hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-200">
                        Masuk
                    </button>
                </form>

                <!-- Additional Links (Optional) -->
                {{-- <p class="mt-6 text-center text-sm text-gray-600">
                    Belum punya akun? 
                    <a href="#" class="text-green-600 hover:text-green-700 font-medium">Daftar Sekarang</a>
                </p> --}}
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>`;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-idth="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
            }
        }w

    </script>
</body>
</html>