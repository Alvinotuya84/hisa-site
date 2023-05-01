<button 
    wire:click="$emit('click')" 
    {{ $attributes->merge(['class' => $class]) }} 
    x-on:buttonMounted.window="
        $wire.set('offsetLeft', $el.offsetLeft);
        $wire.set('clientWidth', $el.clientWidth);
    "
    x-on:resize.window="
        $wire.set('offsetLeft', $el.offsetLeft);
        $wire.set('clientWidth', $el.clientWidth);
    "
>
    {{ $slot }}
</button>