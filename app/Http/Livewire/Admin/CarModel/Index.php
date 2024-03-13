<?php

namespace App\Http\Livewire\Admin\CarModel;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Carmodels;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $CarModels=Carmodels::orderby('id','DESC')->paginate(10);
        return view('livewire.admin.car-model.index',['CarModels'=>$CarModels]);
    }
}
