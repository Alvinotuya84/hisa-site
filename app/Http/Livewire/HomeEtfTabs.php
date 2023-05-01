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
        
        $this->tabsData = collect([
            [
                'label' => 'US Stocks',
                'content' => 'Ut irure mollit nulla eiusmod excepteur laboris elit sit anim magna tempor excepteur labore nulla.'
            ],
            [
                'label' => 'Kenyan Stocks',
                'content' => 'Kenyan dolor et quis in incididunt aute. Ullamco voluptate consectetur dolor officia sunt est dolor sint.'
            ],
            [
                'label' => 'US ETFs',
                'content' => 'US ETFs et quis in incididunt aute. Ullamco voluptate consectetur dolor officia sunt est dolor ds.'
            ],
            [
                'label' => 'Learning',
                'content' => 'Learning et quis in incididunt aute. Ullamco voluptate consectetur dolor officia sunt est dolor ds.'
            ]
        ]);
    }

    public function setActiveTabIndex($index)
    {
        $this->activeTabIndex = $index;
    }

    public function updatedActiveTabIndex()
    {
        $currentTab = $this->tabsRef[$this->activeTabIndex] ?? null;
        $this->tabUnderlineLeft = optional($currentTab)->offsetLeft ?? 0;
        $this->tabUnderlineWidth = optional($currentTab)->clientWidth ?? 0;
    }

    public function render()
    {
        return view('livewire.home-etf-tabs',[
            'tabsData' => $this->tabsData,
        ]);
    }
}
