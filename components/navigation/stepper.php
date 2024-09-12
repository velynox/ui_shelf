<?php
$steps = [
    ['label' => 'Account',  'sub' => 'Email & password', 'state' => 'done'],
    ['label' => 'Profile',  'sub' => 'Name & avatar',    'state' => 'done'],
    ['label' => 'Settings', 'sub' => 'Preferences',      'state' => 'active'],
    ['label' => 'Review',   'sub' => 'Confirm details',  'state' => 'pending'],
];
?>

<div class="flex items-start gap-0 max-w-lg">
    <?php foreach ($steps as $i => $step):
        $last = $i === count($steps) - 1;
    ?>
    <div class="flex flex-col items-center <?= !$last ? 'flex-1' : '' ?>">
        <!-- Step indicator + connector -->
        <div class="flex items-center w-full">
            <!-- Circle -->
            <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0
                        border-2 transition-colors duration-150
                        <?php if ($step['state'] === 'done'):   ?>border-[#a6e3a1] bg-[#a6e3a1]/15
                        <?php elseif ($step['state'] === 'active'): ?>border-[#cba6f7] bg-[#cba6f7]/15
                        <?php else: ?>border-[#313244] bg-transparent<?php endif; ?>">
                <?php if ($step['state'] === 'done'): ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#a6e3a1]"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                <?php elseif ($step['state'] === 'active'): ?>
                    <span class="w-2.5 h-2.5 rounded-full bg-[#cba6f7]"></span>
                <?php else: ?>
                    <span class="text-[#45475a] text-xs font-bold"><?= $i + 1 ?></span>
                <?php endif; ?>
            </div>
            <!-- Connector line -->
            <?php if (!$last): ?>
            <div class="flex-1 h-px mx-1
                        <?= $step['state'] === 'done' ? 'bg-[#a6e3a1]/40' : 'bg-[#313244]' ?>">
            </div>
            <?php endif; ?>
        </div>

        <!-- Label -->
        <div class="mt-2 text-center <?= !$last ? 'pr-2' : '' ?>">
            <p class="text-xs font-bold
                      <?php if ($step['state'] === 'done'):   ?>text-[#a6e3a1]
                      <?php elseif ($step['state'] === 'active'): ?>text-[#cba6f7]
                      <?php else: ?>text-[#585b70]<?php endif; ?>">
                <?= htmlspecialchars($step['label']) ?>
            </p>
            <p class="text-[10px] text-[#45475a] mt-0.5 hidden sm:block">
                <?= htmlspecialchars($step['sub']) ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
