<?php
namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    
    public function render()
    {
        
        return view('livewire.home-component')->layout('layouts.base');
    }
}
