<!-- Inline edit — click to edit pattern -->
<div class="flex flex-col gap-5 max-w-sm">
    <!-- Viewing state -->
    <div class="flex flex-col gap-1">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">Project name</p>
        <div class="flex items-center gap-2 group">
            <span class="text-[#cdd6f4] text-sm font-bold">ui_shelf</span>
            <button type="button"
                    aria-label="Edit project name"
                    class="opacity-0 group-hover:opacity-100 transition-opacity duration-150
                           text-[#585b70] hover:text-[#cba6f7]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582
                             16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0
                             011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25
                             2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25
                             2.25 0 015.25 6H10"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Editing state -->
    <div class="flex flex-col gap-1">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">Description</p>
        <div class="flex items-center gap-2">
            <input type="text" value="PHP component browser"
                   class="flex-1 rounded-md border border-[#cba6f7] bg-[#181825]
                          px-2.5 py-1.5 text-sm text-[#cdd6f4]
                          focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                          focus:border-transparent transition duration-150" />
            <!-- Confirm -->
            <button type="button" aria-label="Save"
                    class="w-7 h-7 rounded-md bg-[#a6e3a1]/15 border border-[#a6e3a1]/30
                           flex items-center justify-center text-[#a6e3a1]
                           hover:bg-[#a6e3a1]/25 transition-colors duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </button>
            <!-- Cancel -->
            <button type="button" aria-label="Cancel"
                    class="w-7 h-7 rounded-md bg-[#f38ba8]/10 border border-[#f38ba8]/30
                           flex items-center justify-center text-[#f38ba8]
                           hover:bg-[#f38ba8]/20 transition-colors duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
