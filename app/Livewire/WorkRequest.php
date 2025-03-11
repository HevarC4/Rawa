<?php

namespace App\Livewire;

use App\Models\WorkRequest as ModelsWorkRequest;
use Livewire\Component;

class WorkRequest extends Component
{
    public $name,$email,$message,$status = 'pending';
    public function save()
    {
        $make = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'status' => 'required|in:pending,reviewed,approved,rejected',
        ]);

        ModelsWorkRequest::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'status' => $this->status,
        ]);
        $this->reset(['name', 'email', 'message']);
        session()->flash('message', 'Thank you! Your message has been sent.');
    }
    public function render()
    {
        return view('livewire.work-request');
    }
}
