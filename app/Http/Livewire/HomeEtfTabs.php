<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeEtfTabs extends Component
{


        public $tabsData;

    public $activeTabIndex = 0;

    public $tabUnderlineWidth = 0;

    public $tabUnderlineLeft = 0;

    public $tabsRef = [];

    public function mount()
    {
        $this->setTabPosition();

        $this->tabsData = collect([
            [
                'label' => 'US Stocks',
                'gif' => 'assets/img/kenyan_stocks.gif',
                'country_flag'=>'assets/img/Flag_of_United_States.png'
            ],
            [
                'label' => 'Kenyan Stocks',
                'gif' => 'assets/img/ke-stocks.gif',
                'country_flag'=>'assets/img/Flag_of_Kenya.png'
            ],
            [
                'label' => 'US ETFs',
                'gif' => 'assets/img/us_etfs.gif',
                'country_flag'=>'assets/img/Flag_of_United_States.png'
            ],
            [
                'label' => 'Learning',
                'gif' => 'assets/img/learning.gif',
                'country_flag'=>'assets/img/Flag_of_Kenya.png'
            ]
        ]);
    }

    public function setActiveTabIndex($index)
    {
        $this->activeTabIndex = $index;
    }
    public function setTabPosition()
    {
        $currentTab = $this->tabsRef[$this->activeTabIndex] ?? null;
        $this->tabUnderlineLeft = optional($currentTab)->offsetLeft ?? 0;
        $this->tabUnderlineWidth = optional($currentTab)->clientWidth ?? 0;
    }
    public function updatedActiveTabIndex()
    {
        $this->setTabPosition();
    }


    public function render()
    {
        return view('livewire.home-etf-tabs',[
            'tabsData' => $this->tabsData,
        ]);
    }
}
