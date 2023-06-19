<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryForm extends Component
{
    public $category;
    protected $rules = [
        'category.name' => 'required',
        'category.description' => 'required',
    ];

    public function mount($category)
    {
        $this->category = $category;
    }

    public function submit()
    {
        $this->validate();

        $this->category->save();

        return redirect()->route('admin.category.index');
    }

    public function render()
    {
        return view('livewire.category-form');
    }
}