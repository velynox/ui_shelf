<!-- Tech stack section — adapted from velynox.de -->
<section class="max-w-lg flex flex-col gap-8">
    <h2 class="text-xs uppercase tracking-widest text-[#a6adc8]">Tech Stack</h2>

    <!-- Expert -->
    <div class="flex flex-col gap-3">
        <p class="text-[#6c7086] text-xs">// expert</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#cba6f7] transition-colors group">
                <div class="text-[#cba6f7] text-xs font-bold
                            group-hover:text-[#b4befe] transition-colors">PHP</div>
                <div class="text-[#6c7086] text-xs mt-1">Laravel · Symfony</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#89b4fa] transition-colors group">
                <div class="text-[#89b4fa] text-xs font-bold">SQL</div>
                <div class="text-[#6c7086] text-xs mt-1">MySQL · PostgreSQL</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#89dceb] transition-colors group">
                <div class="text-[#89dceb] text-xs font-bold">TailwindCSS</div>
                <div class="text-[#6c7086] text-xs mt-1">utility-first</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#fab387] transition-colors group">
                <div class="text-[#fab387] text-xs font-bold">HTML / CSS</div>
                <div class="text-[#6c7086] text-xs mt-1">rock solid</div>
            </div>
        </div>
    </div>

    <!-- Proficient -->
    <div class="flex flex-col gap-3">
        <p class="text-[#6c7086] text-xs">// proficient</p>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#f9e2af] transition-colors group">
                <div class="text-[#cdd6f4] text-xs font-bold">TypeScript</div>
                <div class="text-[#6c7086] text-xs mt-1">when needed</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#a6e3a1] transition-colors group">
                <div class="text-[#a6e3a1] text-xs font-bold">Alpine.js</div>
                <div class="text-[#6c7086] text-xs mt-1">Blade · Twig</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#fab387] transition-colors group">
                <div class="text-[#fab387] text-xs font-bold">Vite</div>
                <div class="text-[#6c7086] text-xs mt-1">build tool</div>
            </div>
            <div class="bg-[#181825] border border-[#313244] rounded-lg p-4
                        hover:border-[#94e2d5] transition-colors group">
                <div class="text-[#94e2d5] text-xs font-bold">Bash</div>
                <div class="text-[#6c7086] text-xs mt-1">automation</div>
            </div>
        </div>
    </div>

    <!-- Familiar -->
    <div class="flex flex-col gap-3">
        <p class="text-[#6c7086] text-xs">// familiar</p>
        <div class="flex flex-wrap gap-2">
            <?php foreach (['Docker', 'Git', 'Linux (Debian/Ubuntu)', 'Redis', 'REST APIs', 'Python'] as $tag): ?>
                <span class="px-3 py-1 bg-[#313244] text-[#a6adc8] text-xs rounded-full">
                    <?= htmlspecialchars($tag) ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</section>
