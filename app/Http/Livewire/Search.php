<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class Search extends Component
{
    public $search_input = "";
    public $searchResults = [];

    public function search()
    {
        $this->searchResults = Http::withToken(config('services.d2api.token'))->get("https://api.pandascore.co/dota2/teams?search[slug]=$this->search_input")
        ->json();

        /* dd($searchResults); */
    }

    public function render() {
        return view('livewire.search');
    }
}
