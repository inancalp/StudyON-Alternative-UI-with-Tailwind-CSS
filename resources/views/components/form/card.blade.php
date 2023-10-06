@props(['width' => 'w-1/2'])
<div class="flex flex-col {{ $width }} items-center">
    <div  {{ $attributes->merge(['class' => 'w-full px-16 bg-gray-50 shadow-md my-20 overflow-hidden rounded-lg border border-black']) }}>
        {{ $slot }}
    </div>
</div>
