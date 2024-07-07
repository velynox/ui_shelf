# Project Setup — ui_shelf

## What is this?

A PHP-based UI component browser. No database. Components live as `.php` snippet
files under `components/`. A central registry (`config/components.php`) holds
metadata for each one: name, category, description, and file path.

The main `index.php` renders the shell. A `?component=slug` query param selects
which component to display (preview + source). Navigating between components is
a plain anchor link — no JS routing needed.

## Why PHP and not a static site?

Syntax highlighting and source extraction are easier server-side without pulling
in a JS build pipeline. `htmlspecialchars(file_get_contents(...))` is all we need.

## Stack decisions

- TailwindCSS via Play CDN — no build step.
- Catppuccin Mocha colors as CSS custom properties (Play CDN has no Catppuccin plugin).
- JetBrains Mono via Google Fonts CDN.
- Vanilla JS only — copy-to-clipboard and tab switching don't need a framework.
- No database — the component registry is a plain PHP array.

## File layout

```
ui_shelf/
├── index.php               # Shell: sidebar + component viewer
├── component.php           # Renders preview iframe + source tab
├── config/
│   └── components.php      # Central registry
├── components/
│   ├── buttons/
│   │   ├── primary.php
│   │   └── ghost.php
│   ├── badges/
│   │   └── status.php
│   ├── cards/
│   │   └── info.php
│   ├── alerts/
│   │   └── warning.php
│   └── forms/
│       └── input_group.php
├── public/
│   └── app.js
└── thoughts/
    └── project-setup.md
```

## Commit strategy

Atomic commits per logical unit. Fake dates starting 2024-07-07, one per day,
random time of day.
