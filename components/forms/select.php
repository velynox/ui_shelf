<div class="flex flex-col gap-1.5 max-w-xs">
    <label for="timezone"
           class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
        Timezone
    </label>
    <div class="relative">
        <select
            id="timezone"
            class="w-full appearance-none rounded-md border border-[#313244]
                   bg-[#181825] px-3 py-2 pr-8 text-sm text-[#cdd6f4]
                   focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                   focus:border-transparent transition duration-150 cursor-pointer"
        >
            <option value="" disabled selected class="text-[#585b70]">Select a timezone</option>
            <option value="utc">UTC+0 — London</option>
            <option value="cet">UTC+1 — Berlin, Paris</option>
            <option value="eet">UTC+2 — Helsinki, Kyiv</option>
            <option value="est">UTC-5 — New York</option>
            <option value="pst">UTC-8 — Los Angeles</option>
        </select>
        <!-- Custom chevron -->
        <div class="pointer-events-none absolute inset-y-0 right-2.5
                    flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#585b70]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
    <p class="text-xs text-[#a6adc8]">Used for scheduling and timestamps.</p>
</div>
