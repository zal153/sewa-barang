<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Notification extends Component
{
    public string $title;
    public string $message;
    public string $time;
    public string $image;

    public function __construct(string $title = 'Admin', string $message = 'This is a toast message.', string $time = 'Baru Saja', string $image = 'assets/images/logo-sm.png')
    {
        $this->title = $title;
        $this->message = $message;
        $this->time = $time;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notification');
    }
}
