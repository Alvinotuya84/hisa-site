<div>
    <div class="position-relative">
        <div class="card bg-primary rounded-5" id="tab-panel-data">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="text-white">{{$tabsData[$activeTabIndex]['label']}}</h4>
                    <img src="{{$tabsData[$activeTabIndex]['country_flag']}}" height="36" width="36">
                </div>
              </div>
            <img class="card-img rounded-0 rounded-bottom" src="{{asset($tabsData[$activeTabIndex]['gif'])}}" >

        </div>
        <div id="tabs" class="d-flex gap-3 border-bottom tabs-content">
            @foreach($tabsData as $idx => $tab)
            <button wire:click="setActiveTabIndex({{ $idx }})" 
            class="pt-2 pb-3 tab-button border-0 bg-transparent @if($activeTabIndex ===  $idx) active @endif">
                {{ $tab['label'] }}
            </button>
            @endforeach
        </div>
        <span
        class="absolute bottom-0 block h-1 bg-teal-500 transition-all duration-300"
        style="left: {{ $tabUnderlineLeft }}px; width: {{ $tabUnderlineWidth }}px"
    ></span>
    </div>
</div>
@push('addon-script')
<script src="{{asset('avo-assets/js/addons/etf-tabs.js')}}">

</script>
@endpush
@push('addon-style')
<link rel="stylesheet" href="{{asset('avo-assets/css/addons/etfs-tabs.css')}}">
@endpush