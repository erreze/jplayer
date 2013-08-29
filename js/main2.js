$(document).ready(function() {
  $("#jpId").jPlayer( {
    ready: function () {
      $(this).jPlayer("setMedia", {
        m4a: '/audios/man.m4a'
      })
    },
    supplied: "m4a",
  });



  $("#omg").click( function() {
	  //  console.log('xxx');
  	var offset = $('#chartContainer>svg>g.rangeContainer>g.trackers>rect').attr('x');
    var width = $('#chartContainer>svg>g.rangeContainer>g.trackers>rect').attr('width');
    width-=offset;

    var offsetrange = $('#chartContainer>svg>g.rangeContainer>g.trackers>rect').next().attr('x');
    offsetrange-=offset;
    var widthrange = $('#chartContainer>svg>g.rangeContainer>g.trackers>rect').next().attr('width');
    widthrange-=offset;
    
    // $("#jpId").jPlayer("play", 0)
    console.log(offsetrange);
    console.log(width);

    
    var playAhead=(offsetrange/width)*100;
    console.log(playAhead);
    $("#jpId").jPlayer("play", playAhead);
    console.log('x');
	});
});

