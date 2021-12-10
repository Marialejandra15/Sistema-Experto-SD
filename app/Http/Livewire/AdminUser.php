<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUser extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                    ->where('email', 'LIKE', '%' . $this->search . '%')
                    ->paginate(8);
        return view('livewire.admin-user', compact('users'));
    }

    public function limpiarPage()
    {
        $this->reset('page');
    }
}
