<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Jota Lhub' : 'Jota Lhub' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'/%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-3gk8m0qj6m0eYq3K1sV8z5Y6VJ1yQf3rD1u4h9T2KZp5v8w9Y6a1b2c3d4e5f6g7" crossorigin="anonymous">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-slate-100 font-sans">
    <div class="flex min-h-screen">
        <aside class="w-72 bg-slate-950 text-slate-100 shadow-2xl border-r border-slate-200/20">
            <div class="p-8">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/20">
                        <span class="text-white font-bold text-lg">J</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold">Jota Lhub</h1>
                        <p class="text-sm text-slate-300">Plataforma moderna</p>
                    </div>
                </div>
            </div>

            <nav class="px-6 space-y-2">
                <a href="/" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-slate-200 hover:bg-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Início</span>
                </a>
                @auth
                    <a href="/profile" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-slate-200 hover:bg-slate-800 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Perfil</span>
                    </a>
                @endauth

                <div class="pt-4 border-t border-slate-200/10">
                    <p class="px-4 text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">Estatísticas</p>
                    <div class="mt-3 space-y-3">
                        <div class="rounded-2xl bg-slate-900/90 px-4 py-3">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Posts</p>
                            <p class="mt-1 text-2xl font-semibold text-white">{{ isset($chirps) ? $chirps->count() : 0 }}</p>
                        </div>
                        <div class="rounded-2xl bg-emerald-500/10 px-4 py-3">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-500">Status</p>
                            <p class="mt-1 text-2xl font-semibold text-emerald-600">Online</p>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-slate-200/10 bg-slate-950">
                @auth
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center text-white font-semibold shadow-md shadow-emerald-500/30">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <span class="text-sm font-medium text-slate-100">{{ auth()->user()->name }}</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full rounded-2xl bg-slate-800 px-4 py-3 text-sm font-semibold text-slate-100 hover:bg-slate-700 transition-colors">
                            Sair
                        </button>
                    </form>
                @else
                    <div class="space-y-3">
                        <a href="/login" class="block w-full rounded-2xl bg-slate-800 px-4 py-3 text-sm font-medium text-slate-100 text-center hover:bg-slate-700 transition-colors">
                            Entrar
                        </a>
                        <a href="/register" class="block w-full rounded-2xl bg-emerald-500 px-4 py-3 text-sm font-semibold text-white text-center hover:bg-emerald-600 transition-colors">
                            Criar conta
                        </a>
                    </div>
                @endauth
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden bg-slate-950">
            <header class="bg-slate-900/95 border-b border-slate-800 px-8 py-6 shadow-sm">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-white tracking-tight">{{ $title ?? 'Dashboard' }}</h2>
                        <p class="text-sm text-slate-400 mt-1">Bem-vindo ao painel do Jota Lhub.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="rounded-2xl bg-slate-100 p-3 text-slate-600 hover:bg-slate-200 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.868 12.683A17.925 17.925 0 0112 21c7.962 0 12-1.21 12-2.683m-12 2.683a17.925 17.925 0 01-7.132-8.317M12 21c4.411 0 8-4.03 8-9s-3.589-9-8-9-8 4.03-8 9a9.06 9.06 0 001.832 5.683L4 21l4.868-8.317z"></path>
                            </svg>
                        </button>
                        <button class="rounded-2xl bg-slate-100 p-3 text-slate-600 hover:bg-slate-200 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            @if (session('success'))
                <div class="fixed top-6 right-6 z-50">
                    <div class="alert alert-success shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            <main class="flex-1 overflow-y-auto">
                <div class="container py-4">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>
</html>