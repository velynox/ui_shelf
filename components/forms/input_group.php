<div class="flex flex-col gap-6 max-w-sm">
    <!-- Default state -->
    <div class="flex flex-col gap-1.5">
        <label for="email-default"
               class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Email address
        </label>
        <input
            id="email-default"
            type="email"
            placeholder="you@example.com"
            class="w-full rounded-md border border-[#313244] bg-[#181825]
                   px-3 py-2 text-sm text-[#cdd6f4] placeholder-[#585b70]
                   focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                   focus:border-transparent transition duration-150"
        />
        <p class="text-xs text-[#a6adc8]">We will never share your email.</p>
    </div>

    <!-- Error state -->
    <div class="flex flex-col gap-1.5">
        <label for="email-error"
               class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Email address
        </label>
        <input
            id="email-error"
            type="email"
            value="not-an-email"
            aria-describedby="email-error-msg"
            class="w-full rounded-md border border-[#f38ba8] bg-[#181825]
                   px-3 py-2 text-sm text-[#cdd6f4] placeholder-[#585b70]
                   focus:outline-none focus:ring-2 focus:ring-[#f38ba8]
                   focus:border-transparent transition duration-150"
        />
        <p id="email-error-msg" class="text-xs text-[#f38ba8]">
            Please enter a valid email address.
        </p>
    </div>
</div>
