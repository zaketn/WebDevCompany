<?php

namespace App\View\Components\Modals;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class LeadPersonal extends Component
{
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = Auth::user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.lead-personal');
    }
}
