<div class="max-w-sm flex flex-col gap-1.5">
    <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
        Upload file
    </label>

    <label for="file-input"
           class="flex flex-col items-center justify-center gap-2 rounded-lg
                  border-2 border-dashed border-[#313244] bg-[#181825]
                  px-6 py-8 cursor-pointer
                  hover:border-[#cba6f7]/50 hover:bg-[#cba6f7]/5
                  transition-colors duration-150 group">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-8 h-8 text-[#45475a] group-hover:text-[#cba6f7]
                    transition-colors duration-150"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0
                     0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
        </svg>
        <div class="text-center">
            <p class="text-[#cdd6f4] text-sm">
                <span class="text-[#cba6f7] font-bold">Click to upload</span>
                or drag and drop
            </p>
            <p class="text-[#585b70] text-xs mt-0.5">PNG, JPG, PDF up to 10 MB</p>
        </div>
        <input id="file-input" type="file" class="sr-only" />
    </label>
</div>
