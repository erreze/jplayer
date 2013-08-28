
$(document).ready(function() {
  $("#jpId").jPlayer( {
    ready: function () {

      $(this).jPlayer("setMedia", {
        mp3: "audios/man.m4a"
      })
      
      console.log('x');
    }
  });

  $("#omg").click( function() {
	   console.log('xxx');
  	$("#jpId").jPlayer("play", 42); // Begins playing 42 seconds into the media.
	});
});