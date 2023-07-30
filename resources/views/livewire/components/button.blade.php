<div class="w-fit">
    <button class="flex flex-row{{ $direction }} justify-center items-center w-full gap-2 p-4 text-xl font-extrabold rounded-2xl border-2 shadow-button_shadow text-black border-black bg-white hover:bg-black hover:text-white">
        @if ($icon !== "")
            <i class="icon_bold bi bi-{{ $icon }}"></i>
        @endif
        <span>{{ $text }}</span>
    </button>
</div>
