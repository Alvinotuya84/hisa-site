<div>
    <div class="position-relative">
        <div class="card bg-primary rounded-5" id="tab-panel-data">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="text-white">{{$tabsData[$activeTabIndex]['label']}}</h4>
                    <img src="{{$tabsData[$activeTabIndex]['country_flag']}}" height="36" width="36">
                </div>
              </div>
            <img class="card-img rounded-0 rounded-bottom" height="250" width="200" src="{{asset($tabsData[$activeTabIndex]['gif'])}}" >

        </div>
        <div id="tabs" class="d-flex gap-3 border-bottom tabs-content">
            @foreach($tabsData as $idx => $tab)
            
                <button wire:click="setActiveTabIndex({{ $idx }})" 
                class="tab-button border-0 bg-transparent  @if($activeTabIndex ===  $idx) active border-bottom border-1 border-primary carousel @endif">
                    {{ $tab['label'] }}
                </button>
            @endforeach
        </div>
        <div
        class=" border-bottom-2 border-secondary"
    ></div>
    </div>
</div>
@push('addon-script')
<script src="{{asset('avo-assets/js/addons/etf-tabs.js')}}">

</script>
@endpush
@push('addon-style')
<link rel="stylesheet" href="{{asset('avo-assets/css/addons/etfs-tabs.css')}}">
@endpush