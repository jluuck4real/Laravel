<x-layout>
    <x-slot:title>
        Feed
    </x-slot:title>

    <div class="container">
        <div class="bg-slate-950/95 text-slate-100 rounded-3xl shadow-2xl border border-slate-800/80 p-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="mb-3 inline-flex rounded-full border border-emerald-300/30 bg-emerald-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-emerald-300">
                        Jota Lhub Feed
                    </p>
                    <h1 class="text-3xl font-bold tracking-tight text-slate-50">
                        Compartilhe ideias de uma maneira mais leve, elegante e agradável de ler.
                    </h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-400">
                        Um mural moderno com aparência mais refinada, leitura confortável
                        e uma composição visual muito mais elegante.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm">
                    <div class="rounded-2xl border border-slate-800 bg-slate-900/80 px-4 py-3">
                        <p class="text-slate-400">Posts</p>
                        <p class="mt-1 text-2xl font-bold text-slate-50">{{ $chirps->count() }}</p>
                    </div>
                    <div class="rounded-2xl border border-slate-800 bg-emerald-500/10 px-4 py-3">
                        <p class="text-emerald-200">Status</p>
                        <p class="mt-1 text-2xl font-bold text-emerald-400">Online</p>
                    </div>
                </div>
            </div>
        </div>

        @auth
            <div class="bg-slate-950/95 rounded-3xl shadow-2xl border border-slate-800/80 p-8 text-slate-100">
                <div class="mb-4 flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-purple-600 font-bold text-white">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-slate-50">Criar publicação</h2>
                        <p class="text-sm text-slate-400">Escreva algo direto, leve e interessante.</p>
                    </div>
                </div>

                <form method="POST" action="/chirps" class="space-y-4">
                    @csrf

                    <div>
                        <textarea name="message" rows="4" maxlength="255" placeholder="No que você está pensando?"
                            class="w-full rounded-2xl border border-slate-700 bg-slate-900/90 px-4 py-3 text-sm text-slate-100 outline-none transition placeholder:text-slate-500 focus:border-emerald-500"></textarea>

                        @error('message')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <p class="text-xs text-slate-400">Máximo de 255 caracteres</p>
                        <button type="submit"
                            class="rounded-2xl bg-gradient-to-r from-blue-500 to-purple-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:scale-[1.02]">
                            Publicar
                        </button>
                    </div>
                </form>
            </div>
        @else
            <div class="bg-slate-950/95 rounded-2xl shadow-2xl border border-slate-800/80 p-8 text-slate-100">
                <h2 class="text-xl font-semibold text-slate-50">Entre para publicar</h2>
                <p class="mt-2 text-sm leading-6 text-slate-400">
                    Visitantes podem navegar. Para publicar e editar mensagens, entre na sua conta.
                </p>
                <div class="mt-4 flex gap-3">
                    <a href="/login"
                        class="rounded-2xl border border-slate-700 bg-slate-900/90 px-4 py-2 text-sm font-medium text-slate-100 hover:bg-slate-800 transition-colors">
                        Entrar
                    </a>
                    <a href="/register"
                        class="rounded-2xl bg-gradient-to-r from-blue-500 to-purple-600 px-4 py-2 text-sm font-semibold text-white">
                        Criar conta
                    </a>
                </div>
            </div>
        @endauth

        <div>
            @forelse ($chirps as $chirp)
                <x-chirp :chirp="$chirp" />
            @empty
                <div class="bg-slate-950/95 rounded-3xl shadow-2xl border border-slate-800/80 px-6 py-12 text-center text-slate-100">
                    <p class="text-lg font-semibold text-slate-50">Nenhuma publicação ainda</p>
                    <p class="mt-2 text-sm text-slate-400">Quando alguém postar, o feed aparece aqui.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>