<div class="flex flex-col gap-4 max-w-xs">
    <!-- Single date -->
    <div class="flex flex-col gap-1.5">
        <label for="date-single"
               class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Date
        </label>
        <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-3 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#585b70]"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25
                             2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0
                             0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121
                             11.25v7.5"/>
                </svg>
            </div>
            <input type="date" id="date-single" value="2024-07-07"
                   class="w-full rounded-md border border-[#313244] bg-[#181825]
                          pl-9 pr-3 py-2 text-sm text-[#cdd6f4]
                          focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                          focus:border-transparent transition duration-150
                          [color-scheme:dark]" />
        </div>
    </div>

    <!-- Date + time -->
    <div class="flex flex-col gap-1.5">
        <label for="date-time"
               class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Scheduled at
        </label>
        <input type="datetime-local" id="date-time" value="2024-07-07T14:23"
               class="w-full rounded-md border border-[#313244] bg-[#181825]
                      px-3 py-2 text-sm text-[#cdd6f4]
                      focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                      focus:border-transparent transition duration-150
                      [color-scheme:dark]" />
    </div>
</div>
