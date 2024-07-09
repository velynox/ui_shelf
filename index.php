<?php
/**
 * index.php — ui_shelf
 *
 * Entry point. Renders the sidebar navigation and the component viewer.
 * Component selection is driven by the `?c=slug` query parameter.
 */

declare(strict_types=1);

require_once __DIR__ . '/config/components.php';

// Resolve the active component slug from the query string.
$active_slug = isset($_GET['c']) ? trim(strip_tags($_GET['c'])) : null;
$active      = $active_slug ? find_component($active_slug) : null;

// Fall back to the first component if the slug is invalid or absent.
if ($active === null) {
    $all    = get_components();
    $active = $all[0] ?? null;
    if ($active) {
        $active_slug = $active['slug'];
    }
}

$grouped = components_by_category();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ui_shelf — Component Browser</title>

    <!-- JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap"
          rel="stylesheet" />

    <!-- Tailwind Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                },
            },
        };
    </script>

    <style>
        /* ── Catppuccin Mocha custom properties ─────────────────────────── */
        :root {
            --ctp-base:     #1e1e2e;
            --ctp-mantle:   #181825;
            --ctp-crust:    #11111b;
            --ctp-surface0: #313244;
            --ctp-surface1: #45475a;
            --ctp-overlay0: #6c7086;
            --ctp-text:     #cdd6f4;
            --ctp-subtext0: #a6adc8;
            --ctp-mauve:    #cba6f7;
            --ctp-blue:     #89b4fa;
            --ctp-green:    #a6e3a1;
            --ctp-red:      #f38ba8;
            --ctp-yellow:   #f9e2af;
        }

        * { font-family: "JetBrains Mono", monospace; }

        body {
            background-color: var(--ctp-base);
            color: var(--ctp-text);
        }

        /* Scrollbar */
        ::-webkit-scrollbar       { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: var(--ctp-mantle); }
        ::-webkit-scrollbar-thumb { background: var(--ctp-surface0); border-radius: 3px; }

        /* Tab states */
        .tab-active {
            color: var(--ctp-mauve);
            border-bottom: 2px solid var(--ctp-mauve);
        }
        .tab-inactive {
            color: var(--ctp-subtext0);
            border-bottom: 2px solid transparent;
        }
        .tab-inactive:hover { color: var(--ctp-text); }

        /* Sidebar active link */
        .nav-active {
            background-color: var(--ctp-surface0);
            color: var(--ctp-mauve);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- ── Top bar ──────────────────────────────────────────────────────── -->
    <header class="border-b border-[#313244] bg-[#181825] px-6 py-3
                   flex items-center justify-between shrink-0">
        <div class="flex items-center gap-2">
            <!-- Grid icon (Lucide) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#cba6f7]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25
                         2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25
                         2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0
                         01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0
                         012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118
                         10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0
                         012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118
                         20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
            <span class="text-[#cdd6f4] font-bold text-sm tracking-wide">ui_shelf</span>
        </div>
        <span class="text-[#585b70] text-xs tracking-widest uppercase">
            <?= count(get_components()) ?> components
        </span>
    </header>

    <!-- ── Main layout ──────────────────────────────────────────────────── -->
    <div class="flex flex-1 overflow-hidden">

        <!-- Sidebar -->
        <nav class="w-56 shrink-0 border-r border-[#313244] bg-[#181825]
                    overflow-y-auto py-4 px-3 flex flex-col gap-5">
            <?php foreach ($grouped as $category => $items): ?>
                <div>
                    <p class="text-[#585b70] text-xs font-bold tracking-widest
                               uppercase px-2 mb-1.5">
                        <?= htmlspecialchars($category) ?>
                    </p>
                    <ul class="flex flex-col gap-0.5">
                        <?php foreach ($items as $item): ?>
                            <li>
                                <a href="?c=<?= urlencode($item['slug']) ?>"
                                   class="block px-2 py-1.5 rounded text-sm
                                          transition-colors duration-100
                                          <?= $item['slug'] === $active_slug
                                              ? 'nav-active'
                                              : 'text-[#a6adc8] hover:text-[#cdd6f4] hover:bg-[#313244]/50' ?>">
                                    <?= htmlspecialchars($item['name']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </nav>

        <!-- Component viewer -->
        <main class="flex-1 overflow-y-auto p-6 flex flex-col gap-4">
            <?php if ($active): ?>
                <?php require __DIR__ . '/component.php'; ?>
            <?php else: ?>
                <p class="text-[#585b70] text-sm">No component selected.</p>
            <?php endif; ?>
        </main>

    </div>

    <script src="public/app.js"></script>
</body>
</html>
