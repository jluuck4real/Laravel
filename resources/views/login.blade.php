<x-layout>
    <x-slot:title>
        Entrar
    </x-slot:title>

    <div class="mx-auto flex min-h-[70vh] max-w-5xl items-center">
        <div class="grid w-full gap-8 lg:grid-cols-2">
            <div class="flex flex-col justify-center">
                <p class="mb-4 inline-flex w-fit rounded-full border border-violet-400/20 bg-violet-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-violet-200">
                    Acesso
                </p>
                <h1 class="font-['Space_Grotesk'] text-4xl font-bold leading-tight text-white">
                    Entre e acompanhe o que está rolando no feed.
                </h1>
                <p class="mt-4 max-w-md text-sm leading-6 text-slate-400">
                    Um acesso com visual mais sofisticado, suave e agradável de usar.
                </p>
            </div>

            <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-6 shadow-2xl shadow-black/20">
                <h2 class="text-2xl font-bold text-white">Login</h2>
                <p class="mt-2 text-sm text-slate-400">Use seu e-mail e senha para continuar.</p>

                <form method="POST" action="/login" class="mt-6 space-y-4">
                    @csrf

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-200">E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="w-full rounded-2xl border border-white/10 bg-slate-950/80 px-4 py-3 text-sm text-white outline-none placeholder:text-slate-500 focus:border-blue-400/60"
                            placeholder="seuemail@exemplo.com">
                        @error('email')
                            <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-medium text-slate-200">Senha</label>
                        <input type="password" name="password" required
                            class="w-full rounded-2xl border border-white/10 bg-slate-950/80 px-4 py-3 text-sm text-white outline-none placeholder:text-slate-500 focus:border-blue-400/60"
                            placeholder="Digite sua senha">
                        @error('password')
                            <p class="mt-2 text-sm text-rose-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-3 text-sm text-slate-200">
                        <input type="checkbox" name="remember" class="rounded border-white/10 bg-slate-950/80">
                        Lembrar de mim
                    </label>

                    <button type="submit"
                        class="w-full rounded-2xl bg-gradient-to-r from-blue-500 to-violet-500 px-4 py-3 text-sm font-semibold text-white transition hover:scale-[1.01]">
                        Entrar
                    </button>
                </form>
                <p class="mt-6 text-center text-sm text-slate-400">
                    Não tem conta?
                    <a href="/register" class="font-medium text-blue-300 hover:text-blue-200">Criar cadastro</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>