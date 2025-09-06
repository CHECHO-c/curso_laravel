<div {{ $attributes->merge(['class'=> 'bg-slate overflow-hidden shadow-sm sm:rounded-lg']) }}>
    <div class="p-6 text-slate-900">
        {{ $slot }}
    </div>
</div>