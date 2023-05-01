<div>
    <div class="position-relative">
        <div class="card bg-primary rounded-5">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="text-white">{{$tabsData[$activeTabIndex]['label']}}</h4>
                    <img src="{{$tabsData[$activeTabIndex]['country_flag']}}" height="36" width="36">
                </div>
              </div>
            <img class="card-img rounded-0 rounded-bottom" src="{{asset($tabsData[$activeTabIndex]['gif'])}}" >

        </div>
        <div class="d-flex gap-3 border-bottom">
            @foreach($tabsData as $idx => $tab)
            <button wire:click="setActiveTabIndex({{ $idx }})" class="pt-2 pb-3 tab-button border-0 bg-transparent">
                {{ $tab['label'] }}
            </button>
            @endforeach
        </div>
        <span class="position-absolute  bottom-0 d-block w-25 bg-primary transition-all duration-300" style="left: {{ $tabUnderlineLeft }}px; width: {{ $tabUnderlineWidth }}px; height: 1px;"></span>
    </div>
</div>
@push('addon-script')
<script>
// $(document).ready(function(){
//    setInterval(function(){
//       $('.tab-button').each(function(){
//           $(this).click();
//          console.log("sdfa")
//       });
//    }, 3000); 
// });
</script>
@endpush