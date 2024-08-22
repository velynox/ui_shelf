<?php

/**
 * Central component registry.
 *
 * Each entry describes one UI component. The 'file' key is relative to the
 * project root. The 'slug' is used in query strings and must be unique.
 *
 * @return array<int, array{slug: string, name: string, category: string, description: string, file: string}>
 */
function get_components(): array
{
    return [
        // ── Buttons ──────────────────────────────────────────────────────────
        [
            'slug'        => 'button-primary',
            'name'        => 'Primary Button',
            'category'    => 'Buttons',
            'description' => 'Solid accent-colored button with hover and focus states.',
            'file'        => 'components/buttons/primary.php',
        ],
        [
            'slug'        => 'button-ghost',
            'name'        => 'Ghost Button',
            'category'    => 'Buttons',
            'description' => 'Transparent button with a border, ideal for secondary actions.',
            'file'        => 'components/buttons/ghost.php',
        ],

        // ── Badges ───────────────────────────────────────────────────────────
        [
            'slug'        => 'badge-status',
            'name'        => 'Status Badge',
            'category'    => 'Badges',
            'description' => 'Small inline badge for online / offline / pending states.',
            'file'        => 'components/badges/status.php',
        ],

        // ── Cards ────────────────────────────────────────────────────────────
        [
            'slug'        => 'card-info',
            'name'        => 'Info Card',
            'category'    => 'Cards',
            'description' => 'Surface card with a title, body text, and an action link.',
            'file'        => 'components/cards/info.php',
        ],

        // ── Alerts ───────────────────────────────────────────────────────────
        [
            'slug'        => 'alert-warning',
            'name'        => 'Warning Alert',
            'category'    => 'Alerts',
            'description' => 'Dismissible inline alert for warning messages.',
            'file'        => 'components/alerts/warning.php',
        ],

        // ── Forms ────────────────────────────────────────────────────────────
        [
            'slug'        => 'form-input-group',
            'name'        => 'Input Group',
            'category'    => 'Forms',
            'description' => 'Label + text input + helper text, with error state variant.',
            'file'        => 'components/forms/input_group.php',
        ],
        [
            'slug'        => 'form-textarea',
            'name'        => 'Textarea',
            'category'    => 'Forms',
            'description' => 'Resizable textarea with character counter and helper text.',
            'file'        => 'components/forms/textarea.php',
        ],
        [
            'slug'        => 'form-toggle',
            'name'        => 'Toggle Switch',
            'category'    => 'Forms',
            'description' => 'On/off toggle with label, description, and disabled state.',
            'file'        => 'components/forms/toggle.php',
        ],
        [
            'slug'        => 'form-select',
            'name'        => 'Select',
            'category'    => 'Forms',
            'description' => 'Styled native select with a custom SVG chevron.',
            'file'        => 'components/forms/select.php',
        ],

        // ── Buttons (extended) ───────────────────────────────────────────────
        [
            'slug'        => 'button-icon',
            'name'        => 'Icon Button',
            'category'    => 'Buttons',
            'description' => 'Square and round icon-only buttons with SVG icons.',
            'file'        => 'components/buttons/icon_button.php',
        ],
        [
            'slug'        => 'button-loading',
            'name'        => 'Loading Button',
            'category'    => 'Buttons',
            'description' => 'Button with an animated spinner for async actions.',
            'file'        => 'components/buttons/loading.php',
        ],

        // ── Cards (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'card-profile',
            'name'        => 'Profile Card',
            'category'    => 'Cards',
            'description' => 'User profile card with avatar, bio, and stats row.',
            'file'        => 'components/cards/profile.php',
        ],
        [
            'slug'        => 'card-stat',
            'name'        => 'Stat Card',
            'category'    => 'Cards',
            'description' => '2×2 grid of metric cards with SVG icons and values.',
            'file'        => 'components/cards/stat.php',
        ],

        // ── Media ────────────────────────────────────────────────────────────
        [
            'slug'        => 'media-avatar',
            'name'        => 'Avatar',
            'category'    => 'Media',
            'description' => 'Avatar in five sizes — icon, initials, and online indicator variants.',
            'file'        => 'components/media/avatar.php',
        ],
        [
            'slug'        => 'media-image-figure',
            'name'        => 'Image Figure',
            'category'    => 'Media',
            'description' => 'Figure + figcaption with a hover overlay caption variant.',
            'file'        => 'components/media/image_figure.php',
        ],

        // ── Navigation ───────────────────────────────────────────────────────
        [
            'slug'        => 'nav-breadcrumb',
            'name'        => 'Breadcrumb',
            'category'    => 'Navigation',
            'description' => 'Accessible breadcrumb trail with SVG chevron separators.',
            'file'        => 'components/navigation/breadcrumb.php',
        ],
        [
            'slug'        => 'nav-tabs',
            'name'        => 'Tabs',
            'category'    => 'Navigation',
            'description' => 'Horizontal tab bar with active underline indicator.',
            'file'        => 'components/navigation/tabs.php',
        ],

        // ── Data ─────────────────────────────────────────────────────────────
        [
            'slug'        => 'data-kbd',
            'name'        => 'Keyboard Shortcut',
            'category'    => 'Data',
            'description' => 'Styled <kbd> elements for single keys and combo shortcuts.',
            'file'        => 'components/data/kbd.php',
        ],
        [
            'slug'        => 'data-sparkline',
            'name'        => 'Sparkline',
            'category'    => 'Data',
            'description' => 'Inline SVG sparkline with gradient fill, rendered server-side in PHP.',
            'file'        => 'components/data/sparkline.php',
        ],
        [
            'slug'        => 'data-progress',
            'name'        => 'Progress Bar',
            'category'    => 'Data',
            'description' => 'Labeled skill/progress bars with per-bar accent colors.',
            'file'        => 'components/data/progress.php',
        ],
        [
            'slug'        => 'data-timeline',
            'name'        => 'Timeline',
            'category'    => 'Data',
            'description' => 'Vertical timeline with done/pending states and colored spine dots.',
            'file'        => 'components/data/timeline.php',
        ],
        [
            'slug'        => 'data-code-block',
            'name'        => 'Code Block',
            'category'    => 'Data',
            'description' => 'Styled code block with filename header bar.',
            'file'        => 'components/data/code_block.php',
        ],
        [
            'slug'        => 'data-table',
            'name'        => 'Table',
            'category'    => 'Data',
            'description' => 'Striped data table with status badge cells and hover rows.',
            'file'        => 'components/data/table.php',
        ],
        [
            'slug'        => 'data-tooltip',
            'name'        => 'Tooltip',
            'category'    => 'Data',
            'description' => 'Pure-CSS tooltips — top and right placement variants.',
            'file'        => 'components/data/tooltip.php',
        ],
        [
            'slug'        => 'data-divider',
            'name'        => 'Divider',
            'category'    => 'Data',
            'description' => 'Plain, labeled, icon, and vertical divider variants.',
            'file'        => 'components/data/divider.php',
        ],

        // ── Profile ──────────────────────────────────────────────────────────
        [
            'slug'        => 'profile-avatar-card',
            'name'        => 'Avatar Card',
            'category'    => 'Profile',
            'description' => 'Framed avatar with glow ring, CRT scanline overlay, and live indicator.',
            'file'        => 'components/profile/avatar_card.php',
        ],
        [
            'slug'        => 'profile-tech-stack',
            'name'        => 'Tech Stack',
            'category'    => 'Profile',
            'description' => 'Expert / proficient / familiar skill grid with color-coded cards.',
            'file'        => 'components/profile/tech_stack.php',
        ],

        // ── Cards (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'card-repo',
            'name'        => 'Repo Card',
            'category'    => 'Cards',
            'description' => 'GitHub-style repository card with language dot, stars, and forks.',
            'file'        => 'components/cards/repo.php',
        ],
        [
            'slug'        => 'card-terminal',
            'name'        => 'Terminal Card',
            'category'    => 'Cards',
            'description' => 'Fake terminal window with traffic-light buttons and blinking cursor.',
            'file'        => 'components/cards/terminal.php',
        ],
        [
            'slug'        => 'card-pricing',
            'name'        => 'Pricing Card',
            'category'    => 'Cards',
            'description' => 'Free and Pro pricing tiers with feature lists and a "Popular" badge.',
            'file'        => 'components/cards/pricing.php',
        ],
        [
            'slug'        => 'card-horizontal',
            'name'        => 'Horizontal Card',
            'category'    => 'Cards',
            'description' => 'Compact horizontal list card with icon, title, subtitle, and meta.',
            'file'        => 'components/cards/horizontal.php',
        ],

        // ── Badges (extended) ────────────────────────────────────────────────
        [
            'slug'        => 'badge-tag',
            'name'        => 'Tag Pill',
            'category'    => 'Badges',
            'description' => 'Colorful tag pills with a Lucide tag SVG icon.',
            'file'        => 'components/badges/tag.php',
        ],
        [
            'slug'        => 'badge-version',
            'name'        => 'Version Badge',
            'category'    => 'Badges',
            'description' => 'Stable, beta, and deprecated version badges.',
            'file'        => 'components/badges/version.php',
        ],

        // ── Alerts (extended) ────────────────────────────────────────────────
        [
            'slug'        => 'alert-variants',
            'name'        => 'Alert Variants',
            'category'    => 'Alerts',
            'description' => 'Success, info, and error alert variants in one component.',
            'file'        => 'components/alerts/success.php',
        ],

        // ── Forms (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'form-checkbox',
            'name'        => 'Checkbox Group',
            'category'    => 'Forms',
            'description' => 'Styled checkbox group with label and description per option.',
            'file'        => 'components/forms/checkbox.php',
        ],
        [
            'slug'        => 'form-radio',
            'name'        => 'Radio Group',
            'category'    => 'Forms',
            'description' => 'Radio button group with label and sub-text per option.',
            'file'        => 'components/forms/radio.php',
        ],
        [
            'slug'        => 'form-search',
            'name'        => 'Search Input',
            'category'    => 'Forms',
            'description' => 'Search field with leading icon and ⌘K shortcut hint variant.',
            'file'        => 'components/forms/search.php',
        ],
        [
            'slug'        => 'form-file-upload',
            'name'        => 'File Upload',
            'category'    => 'Forms',
            'description' => 'Drag-and-drop file upload zone with SVG upload icon.',
            'file'        => 'components/forms/file_upload.php',
        ],

        // ── Navigation (extended) ────────────────────────────────────────────
        [
            'slug'        => 'nav-sidebar',
            'name'        => 'Sidebar Nav',
            'category'    => 'Navigation',
            'description' => 'Vertical sidebar with active state, SVG icons, and a sign-out row.',
            'file'        => 'components/navigation/sidebar.php',
        ],
        [
            'slug'        => 'nav-pagination',
            'name'        => 'Pagination',
            'category'    => 'Navigation',
            'description' => 'PHP-rendered pagination with ellipsis and active page highlight.',
            'file'        => 'components/navigation/pagination.php',
        ],
        [
            'slug'        => 'nav-command-row',
            'name'        => 'Command Row',
            'category'    => 'Navigation',
            'description' => 'Command palette rows — active and inactive states with SVG icons.',
            'file'        => 'components/navigation/command_row.php',
        ],
    ];
}

/**
 * Find a single component by its slug. Returns null if not found.
 *
 * @param string $slug
 * @return array|null
 */
function find_component(string $slug): ?array
{
    foreach (get_components() as $component) {
        if ($component['slug'] === $slug) {
            return $component;
        }
    }
    return null;
}

/**
 * Group components by category.
 *
 * @return array<string, array>
 */
function components_by_category(): array
{
    $grouped = [];
    foreach (get_components() as $component) {
        $grouped[$component['category']][] = $component;
    }
    return $grouped;
}
