<div class="flex flex-col gap-6 max-w-sm">
    <!-- Basic figure with caption -->
    <figure class="rounded-lg overflow-hidden border border-[#313244]">
        <!-- Placeholder image rendered as an SVG block -->
        <div class="w-full h-40 bg-[#181825] flex items-center justify-center
                    border-b border-[#313244]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#45475a]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159
                         5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909
                         2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0
                         00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0
                         001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375
                         .375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        </div>
        <figcaption class="px-4 py-3 bg-[#181825]">
            <p class="text-[#cdd6f4] text-sm font-bold">Arch Linux desktop setup</p>
            <p class="text-[#585b70] text-xs mt-0.5">
                Shot on a 1440p monitor. Catppuccin Mocha, Hyprland.
            </p>
        </figcaption>
    </figure>

    <!-- Inline image with aspect ratio + overlay caption -->
    <figure class="relative rounded-lg overflow-hidden border border-[#313244] group">
        <div class="w-full h-40 bg-gradient-to-br from-[#cba6f7]/10 to-[#89b4fa]/10
                    flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-[#45475a]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159
                         5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909
                         2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0
                         00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0
                         001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375
                         .375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        </div>
        <!-- Overlay caption on hover -->
        <figcaption class="absolute inset-x-0 bottom-0 bg-[#11111b]/80 px-4 py-3
                           translate-y-full group-hover:translate-y-0
                           transition-transform duration-200">
            <p class="text-[#cdd6f4] text-xs font-bold">Hover caption overlay</p>
        </figcaption>
    </figure>
</div>
