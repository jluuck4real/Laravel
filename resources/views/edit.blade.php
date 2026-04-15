<x-layout>
    <x-slot:title>
        Editar publicação
    </x-slot:title>

    <div class="mx-auto max-w-3xl">
        <div class="mb-6">
            <p class="text-sm uppercase tracking-[0.2em] text-[#9b9185]">Edição</p>
            <h1 class="mt-2 text-4xl font-bold text-[#241f1a]">Atualizar publicação</h1>
            <p class="mt-3 text-sm text-[#6f665b]">Faça ajustes no conteúdo antes de salvar.</p>
        </div>

        <div class="rounded-[28px] border border-stone-200 bg-[#fffaf4]/92 p-6 shadow-[0_18px_50px_rgba(69,55,37,0.10)]">
            <form method="POST" action="/chirps/{{ $chirp->id }}" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="mb-2 block text-sm font-medium text-[#2f2a24]">Mensagem</label>
                    <textarea name="message" rows="6" maxlength="255" required
                        class="w-full rounded-2xl border border-stone-200 bg-[#fcf8f2] px-4 py-3 text-sm text-[#2f2a24] outline-none placeholder:text-[#a59a8d] focus:border-[#6f8f72]">{{ old('message', $chirp->message) }}</textarea>

                    @error('message')
                        <p class="mt-2 text-sm text-[#b86b6b]">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a href="/"
                        class="rounded-2xl border border-stone-200 bg-[#f8f2e8] px-4 py-2 text-sm font-medium text-[#2f2a24] hover:bg-[#f1e7d7]">
                        Cancelar
                    </a>

                    <button type="submit"
                        class="rounded-2xl bg-gradient-to-r from-[#6f8f72] to-[#567159] px-5 py-2.5 text-sm font-semibold text-white transition hover:scale-[1.02]">
                        Salvar alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>