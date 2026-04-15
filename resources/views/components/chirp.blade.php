@props(['chirp'])

@php
    $likedByCurrentIdentity = $chirp->likes->isNotEmpty();
    $likesCount = $chirp->likes_count ?? 0;
@endphp

<div class="bg-slate-950/95 rounded-3xl shadow-2xl border border-slate-800/80 p-6 mb-3 text-slate-100">
    <div class="flex space-x-4">
        @if ($chirp->user)
            <div class="flex-shrink-0">
                <img src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                    alt="{{ $chirp->user->name }}'s avatar"
                    class="w-12 h-12 rounded-full object-cover" />
            </div>
        @else
            <div class="flex-shrink-0">
                <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                    alt="Anonymous User"
                    class="w-12 h-12 rounded-full object-cover" />
            </div>
        @endif

        <div class="flex-1 min-w-0">
            <div class="flex items-start justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold text-slate-100">{{ $chirp->user ? $chirp->user->name : 'Anonymous' }}</span>
                    <span class="text-slate-500">·</span>
                    <span class="text-sm text-slate-400">{{ $chirp->created_at->diffForHumans() }}</span>
                    @if ($chirp->updated_at->gt($chirp->created_at->addSeconds(5)))
                        <span class="text-slate-500">·</span>
                        <span class="text-sm text-slate-400 italic">editado</span>
                    @endif
                </div>

                @can('update', $chirp)
                    <div class="flex gap-1">
                        <a href="/chirps/{{ $chirp->id }}/edit" class="text-slate-400 hover:text-slate-200 p-1 rounded transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </a>
                        <form method="POST" action="/chirps/{{ $chirp->id }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Tem certeza que deseja excluir esta publicação?')"
                                class="text-red-400 hover:text-red-600 p-1 rounded transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                @endcan
            </div>

            <p class="mt-2 text-slate-100 leading-relaxed">{{ $chirp->message }}</p>

            <div class="mt-4 flex items-center justify-between">
                <form method="POST"
                    action="{{ $likedByCurrentIdentity ? route('chirps.likes.destroy', $chirp) : route('chirps.likes.store', $chirp) }}">
                    @csrf
                    @if ($likedByCurrentIdentity)
                        @method('DELETE')
                    @endif

                    <button type="submit"
                        class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium rounded-full transition-colors {{ $likedByCurrentIdentity ? 'bg-rose-500/10 text-rose-300 hover:bg-rose-500/20' : 'text-slate-300 hover:text-slate-100 hover:bg-slate-800/80' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 {{ $likedByCurrentIdentity ? 'text-red-500' : '' }}">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        <span>{{ $likedByCurrentIdentity ? 'Descurtir' : 'Curtir' }}</span>
                    </button>
                </form>

                <p class="text-sm text-slate-400">
                    {{ $likesCount }} {{ \Illuminate\Support\Str::plural('curtida', $likesCount) }}
                </p>
            </div>
        </div>
    </div>
</div>
