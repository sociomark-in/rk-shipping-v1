<div class="widget-scroll_to hidden" id="scrollTo" title="Scroll To Top">
	<img src="<?= base_url() ?>assets/media/images/icon/scrollto-icon.png" alt="Scroll To Top">
</div>

<div class="audio_play_pause">

</div>

<audio controls autoplay loop class="d-none" id="backgroundSound">
	<source src="<?= base_url() ?>assets/media/audio.mp3" type="audio/mp3">
	<!-- <source src="<?= base_url() ?>assets/media/audio.ogg" type="audio/ogg"> -->
	Your browser does not support the audio element.
</audio>
<button type="button" class="btn btn-primary" id="audioPlayBtn"><span></span></button>
<style>
	#audioPlayBtn{
		position: fixed;
		bottom: 5%;
		left: 5%;
		z-index: 9999;
	}
</style>
<script>
	var audio = document.getElementById("backgroundSound");
	audio.volume = 0.3;
	$('#audioPlayBtn span').html('<i class="fa-solid fa-pause"></i> Pause');

	$('#audioPlayBtn').on('click', ()=>{
		if(!audio.paused){
			$('#audioPlayBtn span').html('<i class="fa-solid fa-play"></i> Play Audio');
			audio.pause();
		} else {
			$('#audioPlayBtn span').html('<i class="fa-solid fa-pause"></i> Pause Audio');
			audio.play();
		}
	})
</script>

<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) {
				$("#scrollTo").fadeIn();
			} else {
				$("#scrollTo").fadeOut();
			}
		});
		$("#scrollTo").click(function() {
			$("html, body").animate({
					scrollTop: 0,
				},
				600
			);
			return false;
		});
	});
</script>
