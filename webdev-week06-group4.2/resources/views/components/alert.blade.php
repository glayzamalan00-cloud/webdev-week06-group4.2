@props(['type' => 'info'])

@php
    $colors = [
        'success' => ['bg' => '#ece8fa', 'border' => '#c945c9'],
        'info'    => ['bg' => '#ece8fa', 'border' => '#b96baf'],
    ];
    $c = $colors[$type] ?? $colors['info'];
@endphp

<div style="background: {{ $c['bg'] }}; border-left: 5px solid {{ $c['border'] }}; padding: 15px 20px; border-radius: 6px; margin: 20px 0;">
    {{ $slot }}
</div>