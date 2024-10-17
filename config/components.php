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
        [
            'slug'        => 'nav-stepper',
            'name'        => 'Stepper',
            'category'    => 'Navigation',
            'description' => 'Multi-step progress indicator with done, active, and pending states.',
            'file'        => 'components/navigation/stepper.php',
        ],
        [
            'slug'        => 'nav-dropdown',
            'name'        => 'Dropdown Menu',
            'category'    => 'Navigation',
            'description' => 'Context menu with icons, dividers, and a destructive action.',
            'file'        => 'components/navigation/dropdown.php',
        ],
        [
            'slug'        => 'nav-notif-bell',
            'name'        => 'Notification Bell',
            'category'    => 'Navigation',
            'description' => 'Bell icon with count badge, no-badge, and pulsing dot variants.',
            'file'        => 'components/navigation/notif_bell.php',
        ],
        [
            'slug'        => 'nav-back-button',
            'name'        => 'Back Button',
            'category'    => 'Navigation',
            'description' => 'Text link, button, and breadcrumb-style back navigation variants.',
            'file'        => 'components/navigation/back_button.php',
        ],

        // ── Layout ───────────────────────────────────────────────────────────
        [
            'slug'        => 'layout-hero',
            'name'        => 'Hero Section',
            'category'    => 'Layout',
            'description' => 'Page hero with eyebrow, heading, sub-text, CTA buttons, and meta row.',
            'file'        => 'components/layout/hero.php',
        ],
        [
            'slug'        => 'layout-empty-state',
            'name'        => 'Empty State',
            'category'    => 'Layout',
            'description' => 'Centered empty state with SVG illustration and action button.',
            'file'        => 'components/layout/empty_state.php',
        ],
        [
            'slug'        => 'layout-split-panel',
            'name'        => 'Split Panel',
            'category'    => 'Layout',
            'description' => 'Two-column split layout — input on the left, preview on the right.',
            'file'        => 'components/layout/split_panel.php',
        ],
        [
            'slug'        => 'layout-sticky-header',
            'name'        => 'Sticky Header',
            'category'    => 'Layout',
            'description' => 'Frosted-glass sticky header with logo, nav links, and CTA.',
            'file'        => 'components/layout/sticky_header.php',
        ],
        [
            'slug'        => 'layout-footer',
            'name'        => 'Footer',
            'category'    => 'Layout',
            'description' => 'Site footer with brand, link columns, and copyright row.',
            'file'        => 'components/layout/footer.php',
        ],

        // ── Cards (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'card-notification',
            'name'        => 'Notification Card',
            'category'    => 'Cards',
            'description' => 'Notification list with unread state, type icons, and timestamps.',
            'file'        => 'components/cards/notification.php',
        ],
        [
            'slug'        => 'card-activity-feed',
            'name'        => 'Activity Feed',
            'category'    => 'Cards',
            'description' => 'Vertical activity timeline with actor, action, target, and time.',
            'file'        => 'components/cards/activity_feed.php',
        ],
        [
            'slug'        => 'card-feature',
            'name'        => 'Feature Card',
            'category'    => 'Cards',
            'description' => '2x2 grid of feature cards with SVG icon, title, and description.',
            'file'        => 'components/cards/feature.php',
        ],
        [
            'slug'        => 'card-quote',
            'name'        => 'Quote Card',
            'category'    => 'Cards',
            'description' => 'Blockquote card with SVG quote mark and author attribution.',
            'file'        => 'components/cards/quote.php',
        ],
        [
            'slug'        => 'card-user-row',
            'name'        => 'User Row',
            'category'    => 'Cards',
            'description' => 'User list rows with initials avatar, online indicator, and role.',
            'file'        => 'components/cards/user_row.php',
        ],

        // ── Data (extended) ──────────────────────────────────────────────────
        [
            'slug'        => 'data-donut',
            'name'        => 'Donut Chart',
            'category'    => 'Data',
            'description' => 'Server-side SVG donut chart with legend and center label.',
            'file'        => 'components/data/donut.php',
        ],
        [
            'slug'        => 'data-bar-chart',
            'name'        => 'Bar Chart',
            'category'    => 'Data',
            'description' => 'Server-side SVG bar chart with highlighted active bar.',
            'file'        => 'components/data/bar_chart.php',
        ],
        [
            'slug'        => 'data-stat-diff',
            'name'        => 'Stat Diff',
            'category'    => 'Data',
            'description' => 'Metric cards with up/down trend arrows and percentage diff.',
            'file'        => 'components/data/stat_diff.php',
        ],
        [
            'slug'        => 'data-log-line',
            'name'        => 'Log Lines',
            'category'    => 'Data',
            'description' => 'Monospace log viewer with INFO, WARN, and ERROR level coloring.',
            'file'        => 'components/data/log_line.php',
        ],
        [
            'slug'        => 'data-copy-field',
            'name'        => 'Copy Field',
            'category'    => 'Data',
            'description' => 'Read-only input with copy-to-clipboard button and check feedback.',
            'file'        => 'components/data/copy_field.php',
        ],
        [
            'slug'        => 'data-accordion',
            'name'        => 'Accordion',
            'category'    => 'Data',
            'description' => 'Native <details>/<summary> accordion with rotating chevron.',
            'file'        => 'components/data/accordion.php',
        ],

        // ── Forms (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'form-pin-input',
            'name'        => 'PIN Input',
            'category'    => 'Forms',
            'description' => '6-digit PIN input with auto-advance and backspace navigation.',
            'file'        => 'components/forms/pin_input.php',
        ],
        [
            'slug'        => 'form-range-slider',
            'name'        => 'Range Slider',
            'category'    => 'Forms',
            'description' => 'Range slider with live value display and step variant.',
            'file'        => 'components/forms/range_slider.php',
        ],
        [
            'slug'        => 'form-color-swatch',
            'name'        => 'Color Swatch',
            'category'    => 'Forms',
            'description' => 'Catppuccin palette color picker using radio inputs.',
            'file'        => 'components/forms/color_swatch.php',
        ],
        [
            'slug'        => 'form-date-field',
            'name'        => 'Date Field',
            'category'    => 'Forms',
            'description' => 'Date and datetime-local inputs styled for dark mode.',
            'file'        => 'components/forms/date_field.php',
        ],

        // ── Feedback ─────────────────────────────────────────────────────────
        [
            'slug'        => 'feedback-skeleton',
            'name'        => 'Skeleton Loader',
            'category'    => 'Feedback',
            'description' => 'Animated skeleton placeholders for card and list layouts.',
            'file'        => 'components/feedback/skeleton.php',
        ],
        [
            'slug'        => 'feedback-spinner',
            'name'        => 'Spinner',
            'category'    => 'Feedback',
            'description' => 'Loading spinner in xs, sm, md, and overlay variants.',
            'file'        => 'components/feedback/spinner.php',
        ],
        [
            'slug'        => 'feedback-toast',
            'name'        => 'Toast',
            'category'    => 'Feedback',
            'description' => 'Stacked toast notifications — success, error, and info.',
            'file'        => 'components/feedback/toast.php',
        ],
        [
            'slug'        => 'feedback-modal',
            'name'        => 'Modal Dialog',
            'category'    => 'Feedback',
            'description' => 'Modal with header, form body, and footer action buttons.',
            'file'        => 'components/feedback/modal.php',
        ],
        [
            'slug'        => 'feedback-confirm',
            'name'        => 'Confirm Dialog',
            'category'    => 'Feedback',
            'description' => 'Destructive confirmation dialog with icon and cancel/delete actions.',
            'file'        => 'components/feedback/confirm.php',
        ],

        // ── Media (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'media-video-placeholder',
            'name'        => 'Video Placeholder',
            'category'    => 'Media',
            'description' => '16:9 video thumbnail with play button, duration badge, and caption.',
            'file'        => 'components/media/video_placeholder.php',
        ],
        [
            'slug'        => 'media-icon-showcase',
            'name'        => 'Icon Showcase',
            'category'    => 'Media',
            'description' => 'Grid of Heroicons rendered as inline SVGs with hover accent.',
            'file'        => 'components/media/icon_showcase.php',
        ],

        // ── Cards (batch 3) ──────────────────────────────────────────────────
        [
            'slug'        => 'card-changelog',
            'name'        => 'Changelog Entry',
            'category'    => 'Cards',
            'description' => 'Versioned changelog with spine timeline and feat/fix/chore labels.',
            'file'        => 'components/cards/changelog.php',
        ],
        [
            'slug'        => 'card-os-window',
            'name'        => 'OS Window',
            'category'    => 'Cards',
            'description' => 'macOS-style editor window with traffic lights, tabs, and status bar.',
            'file'        => 'components/cards/os_window.php',
        ],
        [
            'slug'        => 'card-spotlight',
            'name'        => 'Spotlight Card',
            'category'    => 'Cards',
            'description' => 'Gradient spotlight glow on hover with top accent line.',
            'file'        => 'components/cards/spotlight.php',
        ],
        [
            'slug'        => 'card-link-preview',
            'name'        => 'Link Preview',
            'category'    => 'Cards',
            'description' => 'OG-style link preview card and compact inline link variant.',
            'file'        => 'components/cards/link_preview.php',
        ],

        // ── Data (batch 3) ───────────────────────────────────────────────────
        [
            'slug'        => 'data-heatmap',
            'name'        => 'Heatmap Calendar',
            'category'    => 'Data',
            'description' => 'SVG contribution heatmap — 26 weeks × 7 days with month labels.',
            'file'        => 'components/data/heatmap.php',
        ],
        [
            'slug'        => 'data-gauge',
            'name'        => 'Gauge Meter',
            'category'    => 'Data',
            'description' => 'Server-side SVG semicircle gauge with needle and center label.',
            'file'        => 'components/data/gauge.php',
        ],
        [
            'slug'        => 'data-diff-viewer',
            'name'        => 'Diff Viewer',
            'category'    => 'Data',
            'description' => 'Git-style unified diff with line numbers, +/- prefixes, and colors.',
            'file'        => 'components/data/diff_viewer.php',
        ],
        [
            'slug'        => 'data-tree-view',
            'name'        => 'Tree View',
            'category'    => 'Data',
            'description' => 'Recursive PHP file tree with folder/file SVG icons and indentation.',
            'file'        => 'components/data/tree_view.php',
        ],
        [
            'slug'        => 'data-tag-cloud',
            'name'        => 'Tag Cloud',
            'category'    => 'Data',
            'description' => 'Weighted tag cloud with per-tag Catppuccin accent colors.',
            'file'        => 'components/data/tag_cloud.php',
        ],

        // ── Forms (batch 3) ──────────────────────────────────────────────────
        [
            'slug'        => 'form-multi-select',
            'name'        => 'Multi-Select Tags',
            'category'    => 'Forms',
            'description' => 'Tag input with pre-selected chips, remove buttons, and suggestions.',
            'file'        => 'components/forms/multi_select.php',
        ],
        [
            'slug'        => 'form-segmented',
            'name'        => 'Segmented Control',
            'category'    => 'Forms',
            'description' => 'Text and icon segmented controls for mutually exclusive options.',
            'file'        => 'components/forms/segmented.php',
        ],
        [
            'slug'        => 'form-star-rating',
            'name'        => 'Star Rating',
            'category'    => 'Forms',
            'description' => 'Interactive star rating input and read-only display variant.',
            'file'        => 'components/forms/star_rating.php',
        ],

        // ── Feedback (batch 3) ───────────────────────────────────────────────
        [
            'slug'        => 'feedback-inline-edit',
            'name'        => 'Inline Edit',
            'category'    => 'Feedback',
            'description' => 'Click-to-edit pattern with view state, edit state, save, and cancel.',
            'file'        => 'components/feedback/inline_edit.php',
        ],
        [
            'slug'        => 'feedback-banner',
            'name'        => 'Banner',
            'category'    => 'Feedback',
            'description' => 'Dismissible info and maintenance announcement banners.',
            'file'        => 'components/feedback/banner.php',
        ],
        [
            'slug'        => 'feedback-progress-banner',
            'name'        => 'Progress Banner',
            'category'    => 'Feedback',
            'description' => 'Deploy progress card with step list, spinner, and progress bar.',
            'file'        => 'components/feedback/progress_banner.php',
        ],

        // ── Layout (batch 3) ─────────────────────────────────────────────────
        [
            'slug'        => 'layout-bento',
            'name'        => 'Bento Grid',
            'category'    => 'Layout',
            'description' => 'CSS grid bento layout with large, small, and wide cells.',
            'file'        => 'components/layout/bento.php',
        ],
        [
            'slug'        => 'layout-section-header',
            'name'        => 'Section Header',
            'category'    => 'Layout',
            'description' => 'Simple and eyebrow+badge section header variants.',
            'file'        => 'components/layout/section_header.php',
        ],
        [
            'slug'        => 'layout-command-palette',
            'name'        => 'Command Palette',
            'category'    => 'Layout',
            'description' => 'Full command palette modal with search, results, and keyboard hints.',
            'file'        => 'components/layout/command_palette.php',
        ],
        [
            'slug'        => 'layout-scroll-area',
            'name'        => 'Scroll Area',
            'category'    => 'Layout',
            'description' => 'Vertical and horizontal constrained scroll containers.',
            'file'        => 'components/layout/scroll_area.php',
        ],

        // ── Profile (batch 2) ────────────────────────────────────────────────
        [
            'slug'        => 'profile-social-links',
            'name'        => 'Social Links',
            'category'    => 'Profile',
            'description' => 'Icon row and text row social link variants with SVG icons.',
            'file'        => 'components/profile/social_links.php',
        ],
        [
            'slug'        => 'profile-contribution-graph',
            'name'        => 'Contribution Graph',
            'category'    => 'Profile',
            'description' => 'Compact 12-week SVG contribution heatmap widget.',
            'file'        => 'components/profile/contribution_graph.php',
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
