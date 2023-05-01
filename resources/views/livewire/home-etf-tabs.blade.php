<div>
    <div class="position-relative">
        <div class="card bg-primary rounded-5">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="text-white">{{$tabsData[$activeTabIndex]['label']}}</h4>
                    <i class="fas fa-flag-usa"></i>
                </div>
              </div>
            <img class="card-img rounded-0 rounded-bottom" src="{{asset('assets/img/gif.webp')}}" alt="Card image cap">

        </div>
        <div class="d-flex gap-3 border-bottom">
            @foreach($tabsData as $idx => $tab)
            <button wire:click="$set('activeTabIndex', {{ $idx }})" class="pt-2 pb-3 border-0 bg-transparent">
                {{ $tab['label'] }}
            </button>
            @endforeach
        </div>
        <span class="position-absolute  bottom-0 d-block w-25 bg-primary transition-all duration-300" style="left: {{ $tabUnderlineLeft }}px; width: {{ $tabUnderlineWidth }}px; height: 1px;"></span>
    </div>
    @dump($tabUnderlineWidth)
</div>
@push('addon-scripts')
<script>
  document.addEventListener('livewire:load', function () {
    Livewire.hook('afterDomUpdate', function () {
      const tabsRef = @this.refs;
      const activeTab = tabsRef[`tab{{ $activeTabIndex }}`];
      const underline = tabsRef.underline;
      if (activeTab && underline) {
        underline.style.left = activeTab.offsetLeft + 'px';
        underline.style.width = activeTab.clientWidth + 'px';
      }
    });
  });
</script>
@endpush