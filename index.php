<?php

declare(strict_types=1);

return new class extends Prose_Plugin
{
    public string $name = 'Operator Palette';
    public string $description = 'A control-panel-oriented backend palette for editorial and compatibility operations.';
    public string $version = '0.1.0';
    public string $author = 'Prose Team';

    public function palettes(): array
    {
        return [
            'operator' => [
                'label' => 'Operator Palette',
                'description' => 'A more control-panel-oriented palette for busy editorial and compatibility operations.',
                'inherits' => ['default'],
                'template_set' => 'operator',
            ],
        ];
    }

    public function templateSets(): array
    {
        return [
            'operator' => [
                'path' => dirname(dirname($this->templatePath('templates/layouts/site.twig'))),
                'extends' => ['default'],
            ],
        ];
    }

    public function paletteUi(): array
    {
        return [
            'operator' => [
                'admin' => [
                    'page' => 'min-h-[calc(100vh-3rem)] lg:grid lg:grid-cols-[320px_1fr]',
                    'aside' => 'border-r border-matrix/15 bg-panel',
                    'aside_inner' => 'flex h-full flex-col px-6 py-6',
                    'brand_card' => 'rounded-[1.5rem] border border-matrix/15 bg-black/20 p-5 shadow-terminal',
                    'brand_caption' => 'text-xs uppercase tracking-[0.24em] text-matrix/55',
                    'brand_title' => 'mt-3 text-2xl font-bold text-matrix',
                    'brand_copy' => 'mt-3 text-sm leading-6 text-signal/70',
                    'template_badge' => 'mt-auto rounded-[1.5rem] border border-matrix/15 bg-black/25 p-5 text-sm shadow-terminal',
                    'template_badge_label' => 'font-semibold text-matrix',
                    'template_badge_value' => 'mt-2 text-signal/70',
                    'nav' => 'mt-8 space-y-2 text-sm',
                    'nav_item' => 'block rounded-xl border border-transparent px-4 py-3 text-matrix/75 transition hover:border-matrix/20 hover:bg-black/20 hover:text-matrix',
                    'nav_item_active' => 'block rounded-xl border border-matrix/20 bg-black/30 px-4 py-3 text-matrix shadow-terminal',
                    'main' => 'px-4 py-4 sm:px-6 lg:px-8 lg:py-6',
                    'main_inner' => 'mx-auto max-w-7xl',
                    'content' => 'rounded-[2rem] border border-matrix/15 bg-panel p-8 shadow-terminal',
                ],
                'admin_bar' => [
                    'outer' => 'sticky top-0 z-[80] border-b border-matrix/15 bg-black/80 text-matrix backdrop-blur',
                    'inner' => 'mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-3 px-4 py-2 text-sm sm:px-6 lg:px-8',
                    'site_link' => 'rounded-lg px-2.5 py-1.5 font-semibold text-matrix hover:bg-black/30',
                    'core_item' => 'rounded-lg px-2.5 py-1.5 text-matrix/75 hover:bg-black/30 hover:text-matrix',
                    'plugin_item' => 'rounded-full border border-matrix/15 bg-black/25 px-3 py-1 text-xs font-medium uppercase tracking-[0.16em] text-signal/70',
                    'user_item' => 'rounded-lg px-2.5 py-1.5 text-matrix/75 hover:bg-black/30 hover:text-matrix',
                ],
            ],
        ];
    }

    public function adminBarSkins(): array
    {
        return [
            'operator' => [
                'name' => 'operator',
                'vars' => prose_admin_bar_css_vars([
                    'background' => 'rgba(0, 0, 0, 0.82)',
                    'border' => 'rgba(120, 255, 174, 0.18)',
                    'text' => '#8bffb3',
                    'muted' => 'rgba(139, 255, 179, 0.72)',
                    'item-bg' => 'rgba(0, 0, 0, 0.24)',
                    'item-border' => 'rgba(120, 255, 174, 0.18)',
                    'item-hover' => 'rgba(0, 0, 0, 0.38)',
                    'badge-bg' => 'rgba(0, 0, 0, 0.32)',
                    'badge-text' => '#d5ffe2',
                    'shadow' => '0 12px 28px rgba(0, 0, 0, 0.28)',
                ]),
            ],
        ];
    }

    public function adminNoticeSkins(): array
    {
        return [
            'operator' => [
                'name' => 'operator',
                'vars' => prose_admin_notice_css_vars([
                    'text' => '#8bffb3',
                    'pill-bg' => 'rgba(0, 0, 0, 0.26)',
                    'pill-border' => 'rgba(120, 255, 174, 0.18)',
                    'pill-text' => '#d5ffe2',
                    'shadow' => '0 10px 24px rgba(0, 0, 0, 0.24)',
                ]),
            ],
        ];
    }
};
