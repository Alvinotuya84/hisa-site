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

// $(document).ready(function() {
//   var tabCount = $('.tab-button').length;
//   var currentIndex = 0;
//   var intervalId;

//   function switchTab() {
//     $('.tab-button').eq((currentIndex + 1) % tabCount).click();
//   }

//   intervalId = setInterval(switchTab, 3000);

//   $('.tab-button').on('click', function() {
//     clearInterval(intervalId);

//     $('.tab-button').removeClass('active');
//     $(this).addClass('active');

//     var target = $(this).data('target');
//     $('.tab-panel').removeClass('active');
//     $('#' + target).addClass('active');

//     setTimeout(function() {
//       intervalId = setInterval(switchTab, 3000);
//     }, 3000);

//     currentIndex = $(this).index();
//   });

//   $(document).on('click', '.tab-button:last-child', function() {
//     $('.tab-button:first-child').click();
//   });
// });

$(function(){
  var currTab = 0;

var totalTabs = $("#tabs > button").length;

function cycle() {

    $("#tabs > button").eq(currTab).click();
    $('.tab-button').click(function(){
      $("#tab-panel-data").fadeOut(1000);
      setTimeout(() => {
        $("#tab-panel-data").fadeIn(1000);
      }, 4000);
    })
    currTab++;

    if (currTab == totalTabs) {
        currTab = 0;
    }
}

var i = setInterval(cycle, 4000);
})
</script>
@endpush