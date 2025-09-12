<x-app-layout>
    <x-container>
        <form action="{{ route('posts.store') }}" class="px-4 mb-8" method="post">
            @csrf
            <textarea 
                name="body" 
                rows="2" 
                placeholder="Comentanos algo..."
                class="w-full mb-2 text-black bg-transparent border-0 border-b-2 border-slate-800 focus:ring-0 focus:outline-none resize-none overflow-hidden placeholder-gray-500"
            ></textarea>


            <input 
                type="submit"
                
                class="px-4 py-2 p-0 bg-yellow-400  text-gray-800 font-semibold sm:rounded-lg text-xs"
                
            >
        </form>


        @foreach ($posts as $post )
        <a href="" class="">
            {{ $post->user->name }}
        </a>
            <x-card>
                
                {{ $post->body}}
                <div class="text-sm text-slate-500">
                    {{ $post->created_at->diffForHumans() }}
                </div>
            </x-card>
        @endforeach
        
    </x-container>
    
</x-app-layout>
