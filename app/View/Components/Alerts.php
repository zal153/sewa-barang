<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alerts extends Component
{
    public string $type;
    public string $message;
    public string $icon;

    protected array $types = [
        'primary' => 'solar:bell-bing-bold-duotone',
        'success' => 'solar:check-read-line-duotone',
        'danger'  => 'solar:danger-triangle-bold-duotone',
        'warning' => 'solar:shield-warning-line-duotone',
    ];

    public function __construct(string $type = 'Selamat datang ', string $message = 'A simple primary alert — check it out!', string $icon = 'solar:bell-bing-bold-duotone')
    {
        $this->type = $type;
        $this->message = $message;
        $this->icon = $icon ?: ($this->defaultIcons[$type] ?? 'solar:bell-bing-bold-duotone');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts');
    }
}
