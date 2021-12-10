<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artiliser | Register</title>
	<meta name="author" content="Agastya Arimbawa">
    <meta name="description" content="">

    {{-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            /* background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%); */
            background: url('{{ asset('img/backend/background.jpg') }}');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="min-h-screen px-2 pt-12 pb-6 body-bg md:pt-8 md:px-0" style="font-family:'Lato',sans-serif;">
    <div class="w-full h-full mt-10">
        <div class="flex flex-col items-center justify-center flex-1 h-full px-4 sm:px-0">
            <div class="flex w-full bg-white rounded-lg shadow-2xl sm:w-3/4 lg:w-1/2 sm:mx-0" style="height: 500px;">
                <div class="flex flex-col w-full p-4 md:w-1/2" style="border-right: 1px solid #670067">
                    <div class="flex flex-col justify-center flex-1 mb-8">
                        {{-- Login Header --}}
                        <h1 class="text-2xl font-thin text-center" style="color: #670067">Don't have an account?</h1>
                        <h2 class="text-sm font-thin text-center" style="color: #670067">Register your account</h2>

                        <div class="w-full mt-4">
                            <form class="w-3/4 mx-auto form-horizontal" method="POST" action="{{ route('register') }}">
                                @csrf
                                {{-- Input Name --}}
                                <div class="flex flex-col mt-4">
                                    <input id="name" type="text" class="flex-grow h-8 px-2 focus:outline-none focus:ring-1 focus:ring-purple-400 focus:border-transparent" name="name" value="{{ old('name') }}" placeholder="Name"  style="border: 1px solid #670067; box-sizing: border-box; border-radius: 8px; color: #670067">
                                </div>

                                {{-- Input Email --}}
                                <div class="flex flex-col mt-4">
                                    <input id="email" type="text" class="flex-grow h-8 px-2 focus:outline-none focus:ring-1 focus:ring-purple-400 focus:border-transparent" name="email" value="{{ old('email') }}" placeholder="Email"  style="border: 1px solid #670067; box-sizing: border-box; border-radius: 8px; color: #670067">
                                </div>

                                {{-- Input Password --}}
                                <div class="flex flex-col mt-4">
                                    <input id="password" type="password" class="flex-grow h-8 px-2 focus:outline-none focus:ring-1 focus:ring-purple-400 focus:border-transparent" name="password" required placeholder="Password" style="border: 1px solid #670067; box-sizing: border-box; border-radius: 8px; color: #670067">
                                </div>

                                {{-- Input Confirm Password --}}
                                <div class="flex flex-col mt-4">
                                    <input id="password_confirmation" type="password" class="flex-grow h-8 px-2 focus:outline-none focus:ring-1 focus:ring-purple-400 focus:border-transparent" name="password_confirmation" required placeholder="Confirm Password" style="border: 1px solid #670067; box-sizing: border-box; border-radius: 8px; color: #670067">
                                </div>

                                {{-- Remember Me --}}
                                <div class="flex items-center mt-4">
                                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                                    <label for="remember" class="text-sm" style="color: #670067; margin-left: -2px">Remember Me</label>
                                </div>
                                
                                {{-- Button Sign In --}}
                                <div class="flex flex-col mt-8">
                                    <button type="submit" class="px-4 py-2 text-sm font-semibold text-white rounded hover:bg-blue-700" style="background-color: #670067; border-radius: 8px;">
                                        Sign In
                                    </button>
                                </div>
                            </form>

                            {{-- Forgot Password --}}
                            <div class="mt-4 text-center">
                                <a class="text-sm no-underline hover:underline text-blue-dark" href="{{ route('password.request') }}" style="color: #670067">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                {{-- Login Image --}}
                <div class="hidden rounded-r-lg md:block md:w-1/2" style="background: url('{{ asset('img/logo.png') }}'); background-size: auto; background-position: center center; background-repeat: no-repeat">
                </div>
            </div>
        </div>
    </div>
</body>
</html>