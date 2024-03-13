<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        $Brands=Brand::orderBy('Id','DESC')->paginate(5);
        return view('livewire.admin.brand.index',['Brands'=>$Brands]);
    }
}
