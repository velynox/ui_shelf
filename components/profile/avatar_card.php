<!-- Avatar card — adapted from velynox.de -->
<div class="shrink-0 flex justify-center relative group w-fit">
    <!-- Glow ring -->
    <div class="absolute -inset-1 bg-gradient-to-r from-[#cba6f7] to-[#89b4fa]
                rounded-2xl blur opacity-20 group-hover:opacity-45
                transition duration-700 group-hover:duration-200"></div>

    <div class="relative">
        <!-- Avatar frame -->
        <div class="relative w-36 h-36 rounded-2xl overflow-hidden
                    border-2 border-[#45475a] bg-[#11111b]
                    transition-all duration-300
                    group-hover:border-[#cba6f7] group-hover:rotate-2">
            <!-- GitHub avatar -->
            <img
                src="https://github.com/velynox.png"
                alt="Velynox"
                class="w-full h-full object-cover grayscale-[30%]
                       group-hover:grayscale-0 transition-all duration-300"
                loading="lazy"
            />
            <!-- CRT scanline overlay -->
            <div class="absolute inset-0 pointer-events-none
                        bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.08)_50%),
                           linear-gradient(90deg,rgba(255,0,0,0.02),rgba(0,255,0,0.01),rgba(0,0,0,0.02))]
                        bg-[length:100%_2px,3px_100%]"></div>
        </div>

        <!-- Online badge -->
        <div class="absolute -bottom-2 -right-2 bg-[#1e1e2e] border-2
                    border-[#313244] rounded-full px-2.5 py-1
                    flex items-center gap-1.5 shadow-lg">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full
                             rounded-full bg-[#a6e3a1] opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2
                             bg-[#a6e3a1]"></span>
            </span>
            <span class="text-[10px] font-bold uppercase tracking-tighter
                         text-[#a6adc8]">Active</span>
        </div>
    </div>
</div>
