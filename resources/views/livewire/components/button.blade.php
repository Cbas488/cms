<button class="flex flex-row{{ $direction }} justify-center items-center w-full gap-2 p-3 text-lg font-extrabold rounded-2xl border-2 text-white border-black bg-black hover:bg-white hover:text-black hover:shadow-button_shadow_down">
    @if ($icon !== "")
        <i class="icon_bold bi bi-{{ $icon }}"></i>
    @endif
    <span>{{ $text }}</span>
</button>
