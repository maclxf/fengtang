$(document).ready(function(){
     $("#timings-demo-btn").toggle(
        function(){
          $(this).next("div#timings-demo").addClass("timings-demo-hover");
        },function(){
          $(this).next("div#timings-demo").removeClass("timings-demo-hover");
     });
  });