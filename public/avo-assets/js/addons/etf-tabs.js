$(function(){
    var currTab = 0;
  
  var totalTabs = $("#tabs > button").length;
  
  function cycle() {
      $("#tab-panel-data").fadeOut("slow");
      $("#tabs > button").eq(currTab).click();
      $('.tab-button').click(function(){
        
        setTimeout(() => {
          $("#tab-panel-data").fadeIn(3000);
        }, 5000);
      })
      currTab++;
  
      if (currTab == totalTabs) {
          currTab = 0;
      }
  }
  
  var i = setInterval(cycle, 5000);
  })