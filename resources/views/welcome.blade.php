<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Personal portfolio of Lovely Ann S. Laro — a fourth-year BSIT student passionate about technology, learning, and creating.">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-gray-800 antialiased">
        {{-- Navigation --}}
        <nav class="fixed inset-x-0 top-0 z-50 bg-white/70 backdrop-blur-md border-b border-pink-100">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="#home" class="flex items-center gap-2 text-lg font-semibold text-pink-600">
                        <span class="text-2xl">💗</span>
                        <span class="hidden sm:inline">Lovely Ann</span>
                    </a>
                    <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                        <a href="#home" class="hover:text-pink-500 transition-colors">Home</a>
                        <a href="#about" class="hover:text-pink-500 transition-colors">About</a>
                        <a href="#skills" class="hover:text-pink-500 transition-colors">Skills</a>
                        <a href="#projects" class="hover:text-pink-500 transition-colors">Projects</a>
                        <a href="#education" class="hover:text-pink-500 transition-colors">Education</a>
                        <a href="#hobbies" class="hover:text-pink-500 transition-colors">Hobbies</a>
                        <a href="#contact" class="hover:text-pink-500 transition-colors">Contact</a>
                    </div>
                    <button id="mobile-menu-btn" class="md:hidden text-gray-600 hover:text-pink-500" aria-label="Open menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md border-b border-pink-100">
                <div class="px-4 py-3 space-y-2 text-sm font-medium text-gray-600">
                    <a href="#home" class="block py-2 hover:text-pink-500">Home</a>
                    <a href="#about" class="block py-2 hover:text-pink-500">About</a>
                    <a href="#skills" class="block py-2 hover:text-pink-500">Skills</a>
                    <a href="#projects" class="block py-2 hover:text-pink-500">Projects</a>
                    <a href="#education" class="block py-2 hover:text-pink-500">Education</a>
                    <a href="#hobbies" class="block py-2 hover:text-pink-500">Hobbies</a>
                    <a href="#contact" class="block py-2 hover:text-pink-500">Contact</a>
                </div>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section id="home" class="relative min-h-screen flex items-center justify-center pt-24 pb-16 px-4 sm:px-6 lg:px-8 overflow-hidden">
            {{-- Decorative background blobs --}}
            <div class="absolute inset-0 -z-10 bg-gradient-to-br from-pink-50 via-white to-pink-100"></div>
            <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-pink-200/40 blur-3xl"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-pink-100/50 blur-3xl"></div>
            <div class="absolute top-20 right-1/4 text-pink-300 text-3xl opacity-30">🌸</div>
            <div class="absolute bottom-32 left-1/5 text-pink-300 text-2xl opacity-30">💫</div>
            <div class="absolute top-1/3 right-10 text-pink-300 text-2xl opacity-20">🦋</div>

            <div class="max-w-6xl w-full grid lg:grid-cols-2 gap-12 items-center">
                {{-- Left: text content --}}
                <div class="text-center lg:text-left space-y-8">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-pink-100/70 backdrop-blur text-pink-600 text-sm font-medium border border-pink-200">
                        <span>✨</span> Welcome to my portfolio
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Hi, I'm
                        <span class="bg-gradient-to-r from-pink-500 to-pink-300 bg-clip-text text-transparent">
                            Lovely Ann S. Laro
                        </span>
                        <span class="text-pink-400">💗</span>
                    </h1>

                    <p class="text-lg text-gray-600 max-w-xl mx-auto lg:mx-0">
                        A passionate fourth-year BSIT student who loves learning, creating, and exploring the world of technology.
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        <a href="#about" class="px-6 py-3 rounded-full bg-pink-500 hover:bg-pink-600 text-white font-medium shadow-lg shadow-pink-200/60 hover:shadow-pink-300/60 transition-all duration-300 hover:-translate-y-0.5">
                            About Me
                        </a>
                        <a href="#projects" class="px-6 py-3 rounded-full bg-white hover:bg-pink-50 text-pink-600 font-medium border border-pink-200 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                            View My Projects
                        </a>
                        <a href="#contact" class="px-6 py-3 rounded-full border border-pink-300 text-gray-700 hover:bg-pink-100/50 font-medium transition-all duration-300 hover:-translate-y-0.5">
                            Contact Me
                        </a>
                    </div>

                    <div class="flex items-center gap-6 justify-center lg:justify-start text-sm text-gray-500">
                        <span class="flex items-center gap-1.5"><span>📍</span> Abra, Philippines</span>
                        <span class="flex items-center gap-1.5"><span>🎓</span> BSIT</span>
                        <span class="flex items-center gap-1.5"><span>🐱</span> 7 cats</span>
                    </div>
                </div>

                {{-- Right: profile frame --}}
                <div class="flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-300 to-pink-500 rounded-full blur-xl opacity-40"></div>
                        <div class="relative w-64 h-64 sm:w-80 sm:h-80 rounded-full p-2 bg-gradient-to-br from-pink-300 via-pink-200 to-pink-400 shadow-2xl shadow-pink-200/60">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-pink-100 to-pink-200 flex items-center justify-center overflow-hidden">
                                <span class="text-7xl sm:text-8xl"><img src="{{ asset('image/lvly.png') }}" alt="Lovely Ann S. Laro" class="w-full h-full object-cover"></span>
                            </div>
                        </div>
                        <div class="absolute -top-2 -right-2 w-12 h-12 flex items-center justify-center rounded-full bg-white shadow-lg text-xl">🌸</div>
                        <div class="absolute -bottom-2 -left-2 w-12 h-12 flex items-center justify-center rounded-full bg-white shadow-lg text-xl">💗</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- About Section --}}
        <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-pink-50/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">💕</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">About Me</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Hi! I'm <span class="font-semibold text-pink-600">Lovely Ann S. Laro</span>, a fourth-year
                        <span class="font-semibold text-pink-600">BSIT student</span> at
                        <span class="font-semibold text-pink-600">Data Center College of the Philippines</span>.
                        I'm passionate about technology, learning, and personal growth. I love exploring new ideas,
                        building things, and continuously improving my skills to become a better developer and professional.
                    </p>
                </div>

                {{-- Info cards --}}
                <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">🎓</span>
                        <h3 class="font-semibold text-gray-800">Education</h3>
                        <p class="text-sm text-gray-500 mt-1">BSIT Student</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">💻</span>
                        <h3 class="font-semibold text-gray-800">IT Student</h3>
                        <p class="text-sm text-gray-500 mt-1">4th Year</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">📍</span>
                        <h3 class="font-semibold text-gray-800">Home</h3>
                        <p class="text-sm text-gray-500 mt-1">La Paz, Abra</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">📚</span>
                        <h3 class="font-semibold text-gray-800">Hobbies</h3>
                        <p class="text-sm text-gray-500 mt-1">Reading & More</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">🎬</span>
                        <h3 class="font-semibold text-gray-800">Movies</h3>
                        <p class="text-sm text-gray-500 mt-1">Movie Lover</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">🏐</span>
                        <h3 class="font-semibold text-gray-800">Volleyball</h3>
                        <p class="text-sm text-gray-500 mt-1">Love the Court</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">🏊</span>
                        <h3 class="font-semibold text-gray-800">Swimming</h3>
                        <p class="text-sm text-gray-500 mt-1">Water Enthusiast</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white shadow-sm hover:shadow-lg border border-pink-100 hover:border-pink-200 transition-all duration-300 group text-center">
                        <span class="text-3xl block mb-3 group-hover:scale-110 transition-transform">🐱🐶</span>
                        <h3 class="font-semibold text-gray-800">Pet Lover</h3>
                        <p class="text-sm text-gray-500 mt-1">7 Cats & 2 Dogs</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Skills Section --}}
        <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">💻</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">My Skills</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    @php
                        $skills = [
                            'Design System' => '95',
                            'User Research' => '90',
                            'JavaScript' => '80',
                            'Design & Multimedia' => '85',
                            'Requirements Gathering' => '90',
                            'Communication & Collaboration' => '95',
                            'Project Management & Leadership' => '95',
                        ];
                    @endphp

                    @foreach ($skills as $name => $level)
                        <div class="p-6 rounded-2xl bg-gradient-to-br from-white to-pink-50/50 shadow-sm hover:shadow-lg border border-pink-100 transition-all duration-300 hover:-translate-y-1 group">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800 group-hover:text-pink-600 transition-colors">{{ $name }}</h3>
                                <span class="text-sm font-medium text-pink-500">{{ $level }}%</span>
                            </div>
                            <div class="w-full h-2.5 rounded-full bg-pink-100/80 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-pink-400 to-pink-500 transition-all duration-1000" style="width: {{ $level }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Projects Section --}}
        <section id="projects" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-pink-50/60 to-white">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">🚀</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">My Projects</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl border border-pink-200 transition-all duration-300 hover:-translate-y-1">
                        <div class="h-44 bg-gradient-to-br from-pink-200 to-pink-400 relative flex items-center justify-center">
                             <span class="text-5xl"><img src="{{ asset('image/1.png') }}" width="500" height="500" alt="Project Image" class="object-contain"></span>
                            <span class="absolute bottom-3 right-3 text-xs bg-white/80 backdrop-blur px-2.5 py-1 rounded-full text-pink-600 font-medium">VB.Net</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-800 text-lg">Permanent Records</h3>
                            <p class="text-sm text-gray-500 mt-1.5">This is a simple VB.NET application designed to automate the process of computing student grades. It allows users to enter and manage grades, calculate final scores, and easily monitor students’ academic performance.</p>
                            
                        </div>
                    </div>

                    <div class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl border border-pink-200 transition-all duration-300 hover:-translate-y-1">
                        <div class="h-44 bg-gradient-to-br from-pink-300 to-pink-500 relative flex items-center justify-center">
                             <span class="text-5xl"><img src="{{ asset('image/2.png') }}" width="500" height="500" alt="Project Image" class="object-contain"></span>
                            <span class="absolute bottom-3 right-3 text-xs bg-white/80 backdrop-blur px-2.5 py-1 rounded-full text-pink-600 font-medium">VB.Net</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-800 text-lg">Grade computation System</h3>
                            <p class="text-sm text-gray-500 mt-1.5">A simple system developed to automate the process of calculating student grades, making it easier to manage, record, and monitor academic performance accurately and efficiently.</p>
                           
                        </div>
                    </div>

                    <div class="rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl border border-pink-200 transition-all duration-300 hover:-translate-y-1">
                        <div class="h-44 bg-gradient-to-br from-pink-100 to-pink-300 relative flex items-center justify-center">
                             <span class="text-5xl"><img src="{{ asset('image/3.png') }}" width="500" height="500" alt="Project Image" class="object-contain"></span>
                            <span class="absolute bottom-3 right-3 text-xs bg-white/80 backdrop-blur px-2.5 py-1 rounded-full text-pink-600 font-medium">Powerpoint</span>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-800 text-lg">Wireframe</h3>
                            <p class="text-sm text-gray-500 mt-1.5">My wireframe is for AgriTrack, a weather-adaptive farming app that helps farmers with their farming activities. It includes a login page, dashboard, planting guide, and settings page to make the app simple and easy to use.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Education Section --}}
        <section id="education" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">🎓</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">Education</h2>
                    <div class="mx-auto mt-4 w-30 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="relative flex flex-col items-center">
                    <div class="absolute top-0 bottom-8 w-0.5 bg-gradient-to-b from-pink-300 to-pink-200"></div>

                    <div class="relative bg-white rounded-2xl border border-pink-100 shadow-sm hover:shadow-lg p-8 w-full max-w-xl text-center transition-all duration-300">
                        <div class="absolute left-1/2 -translate-x-1/2 -top-4 w-8 h-8 rounded-full bg-pink-500 ring-4 ring-pink-100 flex items-center justify-center">
                            <span class="text-sm">🎓</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mt-2">Data Center College of the Philippines</h3>
                        <p class="text-pink-500 font-medium mt-2">Bachelor of Science in Information Technology</p>
                        <p class="text-gray-500 text-sm mt-1">Fourth Year Student</p>
                    </div>
                </div>
            </div>
        </section>
        

        {{-- Hobbies Section --}}
        <section id="hobbies" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-pink-50/50">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">🌟</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">Hobbies & Interests</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">📖</div>
                        <h3 class="font-semibold text-gray-800">Reading</h3>
                    </div>
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">🎬</div>
                        <h3 class="font-semibold text-gray-800">Watching Movies</h3>
                    </div>
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">🏐</div>
                        <h3 class="font-semibold text-gray-800">Playing Volleyball</h3>
                    </div>
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">🏊</div>
                        <h3 class="font-semibold text-gray-800">Swimming</h3>
                    </div>
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">🐱</div>
                        <h3 class="font-semibold text-gray-800">Taking Care of Cats</h3>
                    </div>
                    <div class="p-8 rounded-2xl bg-white shadow-sm hover:shadow-xl border border-pink-100 text-center transition-all duration-300 hover:-translate-y-1 hover:bg-pink-50/40">
                        <div class="text-4xl mb-3">🐶</div>
                        <h3 class="font-semibold text-gray-800">Taking Care of Dogs</h3>
                    </div>
                </div>
            </div>
        </section>

        {{-- Goals Section --}}
        <section id="goals" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">🎯</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">My Goals</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-6 rounded-2xl bg-gradient-to-r from-pink-50 to-white border border-pink-100 hover:border-pink-200 transition-colors">
                        <span class="text-2xl">💪</span>
                        <div>
                            <h3 class="font-semibold text-gray-800">Improve My Programming Skills</h3>
                            <p class="text-gray-500 text-sm mt-1">Continuously practice and enhance my coding abilities across different languages and frameworks.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl bg-gradient-to-r from-pink-50 to-white border border-pink-100 hover:border-pink-200 transition-colors">
                        <span class="text-2xl">💡</span>
                        <div>
                            <h3 class="font-semibold text-gray-800">Create Useful Applications</h3>
                            <p class="text-gray-500 text-sm mt-1">Build practical and meaningful applications that can help people and solve real-world problems.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl bg-gradient-to-r from-pink-50 to-white border border-pink-100 hover:border-pink-200 transition-colors">
                        <span class="text-2xl">🚀</span>
                        <div>
                            <h3 class="font-semibold text-gray-800">Gain Professional Experience</h3>
                            <p class="text-gray-500 text-sm mt-1">Seek opportunities such as internships and collaborations to grow as an IT professional.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-6 rounded-2xl bg-gradient-to-r from-pink-50 to-white border border-pink-100 hover:border-pink-200 transition-colors">
                        <span class="text-2xl">🎖️</span>
                        <div>
                            <h3 class="font-semibold text-gray-800">Become a Successful IT Professional</h3>
                            <p class="text-gray-500 text-sm mt-1">Reach a point where my skills, passion, and experience allow me to make a meaningful contribution to the tech industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact Section --}}
        <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-pink-50/60 to-white">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-3xl">📬</span>
                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">Get In Touch</h2>
                    <div class="mx-auto mt-4 w-20 h-1 rounded-full bg-gradient-to-r from-pink-400 to-pink-200"></div>
                    <p class="mt-4 text-gray-500">Have a question or want to collaborate? Send me a message!</p>
                </div>

                <form class="space-y-5 bg-white p-8 rounded-3xl shadow-sm border border-pink-100">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2.5 rounded-xl border border-pink-200 bg-pink-50/30 focus:bg-white focus:border-pink-400 focus:ring-2 focus:ring-pink-200 outline-none transition-all"
                                placeholder="Your name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2.5 rounded-xl border border-pink-200 bg-pink-50/30 focus:bg-white focus:border-pink-400 focus:ring-2 focus:ring-pink-200 outline-none transition-all"
                                placeholder="you@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-2.5 rounded-xl border border-pink-200 bg-pink-50/30 focus:bg-white focus:border-pink-400 focus:ring-2 focus:ring-pink-200 outline-none transition-all resize-none"
                            placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full sm:w-auto px-8 py-3 rounded-full bg-pink-500 hover:bg-pink-600 text-white font-medium shadow-lg shadow-pink-200/60 hover:shadow-pink-300/60 transition-all duration-300 hover:-translate-y-0.5">
                        Send Message 💌
                    </button>
                </form>

                {{-- Social media --}}
                <div class="mt-10 flex justify-center gap-5">
                    <a href="#" aria-label="Facebook" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-pink-200 shadow-sm hover:bg-pink-50 hover:shadow-md transition-all text-gray-500 hover:text-pink-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-pink-200 shadow-sm hover:bg-pink-50 hover:shadow-md transition-all text-gray-500 hover:text-pink-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" aria-label="GitHub" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-pink-200 shadow-sm hover:bg-pink-50 hover:shadow-md transition-all text-gray-500 hover:text-pink-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="w-12 h-12 flex items-center justify-center rounded-full bg-white border border-pink-200 shadow-sm hover:bg-pink-50 hover:shadow-md transition-all text-gray-500 hover:text-pink-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4.98 3.5C4.98 4.881 3.87 6 2.5 6S0 4.881 0 3.5 1.12 1 2.5 1s2.48 1.119 2.48 2.5zM.24 8.25h4.52V24H.24V8.25zM8.34 8.25h4.34v2.15h.06c.604-1.146 2.081-2.355 4.284-2.355 4.583 0 5.428 3.016 5.428 6.94V24h-4.52v-7.53c0-1.795-.032-4.104-2.5-4.104-2.503 0-2.886 1.955-2.886 3.976V24H8.34V8.25z"/></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="bg-gradient-to-br from-pink-50 to-pink-100/50 py-10 px-4 border-t border-pink-100">
            <div class="max-w-6xl mx-auto text-center">
                <p class="text-gray-700">
                    Designed with <span class="text-pink-500">💗</span> by <span class="font-semibold text-pink-600">Lovely Ann S. Laro</span>
                </p>
                <p class="mt-3 text-sm text-gray-400">
                    © {{ date('Y') }} Lovely Ann S. Laro. All rights reserved.
                </p>
            </div>
        </footer>

        <script>
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            mobileMenu.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        </script>
    </body>
</html>
