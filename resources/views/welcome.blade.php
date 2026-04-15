<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jota Lhub - Plataforma Moderna de Interação</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans">
    <div class="min-h-screen flex flex-col">
        <header class="bg-slate-950 text-slate-100 shadow-2xl border-b border-slate-800">
            <div class="max-w-7xl mx-auto px-6 py-6 lg:px-8">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/20">
                            <span class="text-white font-bold text-lg">J</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold">Jota Lhub</h1>
                            <p class="text-sm text-slate-300">plataforma moderna de interação</p>
                        </div>
                    </div>

                    <nav class="flex flex-wrap items-center gap-3">
                        <a href="/" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-100 hover:bg-slate-800 transition-colors">Início</a>
                        <a href="/login" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-100 hover:bg-slate-800 transition-colors">Acessar</a>
                        <a href="/register" class="rounded-2xl px-4 py-3 text-sm font-medium text-slate-100 hover:bg-slate-800 transition-colors">Cadastro</a>
                        <a href="/login" class="rounded-2xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-white hover:bg-emerald-600 transition-colors">Entrar</a>
                    </nav>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-6 py-20 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
                    <div class="space-y-10">
                        <span class="inline-flex items-center rounded-full bg-emerald-100 px-4 py-2 text-sm font-semibold text-emerald-700 tracking-[0.2em]">ESTÉTICA REFINADA</span>
                        <div>
                            <h2 class="text-5xl font-bold tracking-tight text-white sm:text-6xl">Um visual mais elegante, leve e realmente agradável.</h2>
                            <p class="mt-6 text-lg leading-8 text-slate-300 max-w-xl">A nova identidade visual usa fundos suaves e contrastes equilibrados para deixar a interface mais fresca, organizada e leve.</p>
                        </div>

                        <div class="flex flex-col gap-4 sm:flex-row">
                            <a href="/register" class="inline-flex items-center justify-center rounded-2xl bg-emerald-500 px-8 py-4 text-sm font-semibold text-white shadow-lg shadow-emerald-500/20 hover:bg-emerald-600 transition-colors">Começar agora</a>
                            <a href="/login" class="inline-flex items-center justify-center rounded-2xl bg-slate-900/90 px-8 py-4 text-sm font-semibold text-slate-100 hover:bg-slate-800 transition-colors">Já tenho conta</a>
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div class="rounded-3xl bg-slate-950/95 p-6 shadow-lg shadow-slate-900/40 border border-slate-800/80">
                                <p class="text-3xl font-bold text-white">+120</p>
                                <p class="mt-2 text-sm text-slate-400">Interações registradas</p>
                            </div>
                            <div class="rounded-3xl bg-slate-950/95 p-6 shadow-lg shadow-slate-900/40 border border-slate-800/80">
                                <p class="text-3xl font-bold text-white">24h</p>
                                <p class="mt-2 text-sm text-slate-400">Disponibilidade contínua</p>
                            </div>
                            <div class="rounded-3xl bg-slate-950/95 p-6 shadow-lg shadow-slate-900/40 border border-slate-800/80">
                                <p class="text-3xl font-bold text-white">100%</p>
                                <p class="mt-2 text-sm text-slate-400">Responsivo</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-[32px] bg-slate-950/95 p-10 shadow-2xl shadow-slate-900/40 border border-slate-800/80">
                            <h3 class="text-2xl font-semibold text-white">Painel de Destaque</h3>
                            <p class="mt-4 text-slate-300 leading-7">A nova identidade visual foi pensada para equilibrar elegância, clareza e modernidade, com layouts mais suaves e um estilo visual mais sofisticado.</p>
                            <div class="mt-8 space-y-4">
                                <div class="flex items-center gap-3 text-slate-100">
                                    <span class="inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                                    <span class="font-medium">Estilo minimalista e limpo</span>
                                </div>
                                <div class="flex items-center gap-3 text-slate-100">
                                    <span class="inline-flex h-2.5 w-2.5 rounded-full bg-sky-500"></span>
                                    <span class="font-medium">Fundos suaves e sofisticados</span>
                                </div>
                                <div class="flex items-center gap-3 text-slate-100">
                                    <span class="inline-flex h-2.5 w-2.5 rounded-full bg-violet-500"></span>
                                    <span class="font-medium">Espaçamento mais equilibrado</span>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-[32px] bg-slate-950 p-10 shadow-2xl shadow-slate-200/20 border border-slate-800">
                            <h3 class="text-2xl font-semibold text-white">Objetivo do Sistema</h3>
                            <p class="mt-4 text-slate-300 leading-7">Entregar uma experiência visual mais agradável e madura, favorecendo a leitura, a navegação e a percepção de qualidade do projeto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>