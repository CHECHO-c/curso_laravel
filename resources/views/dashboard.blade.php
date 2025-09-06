<x-app-layout>
    <x-container>
        @foreach ($posts as $post )
        <a href="" class="">
            {{ $post->user->name }}
        </a>
            <x-card>
                <h1>Id: {{ $post->id }}</h1>
                {{ $post->body}}
                <div class="text-sm text-slate-500">
                    {{ $post->created_at->diffForHumans() }}
                </div>
            </x-card>
        @endforeach
        
    </x-container>
    
</x-app-layout>
