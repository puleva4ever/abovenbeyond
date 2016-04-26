<?php require('tpl/head.html'); ?>

<script>

	$(document).ready(function(){
		$("#videos").click(function(){
			$(".multi").removeClass("multi-toggle");
			$("#videos_title").addClass("multi-toggle");
			$("#musica_content").slideUp(300);
			$("#videos_content").slideDown(1000);
	  	});
		
		$("#musica").click(function(){
			$(".multi").removeClass("multi-toggle");
			$("#musica_title").addClass("multi-toggle");
			$("#videos_content").slideUp(300);
			$("#musica_content").slideDown(1000);
	  	});	  
	});
	
</script>

<div class="content">

<br />

<table>

	<tr>
    	<td class="multi" id="videos_title"><img src="images/videos.jpg" height="320" width="320" id="videos" /> <br /><br /> VÍDEOS</td>
    	<td class="multi" id="musica_title"><img src="images/musica.jpg" height="320" width="320" id="musica" /> <br /><br /> MÚSICA</td>
    </tr>
    
</table>

<div id="musica_content">
    
    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/157942461&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

    <iframe width="100%" height="150" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/234337581&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

    <iframe width="100%" height="150" scrolling="no" frameborder="no" 
    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/172672865&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

</div>


<div id="videos_content">

<iframe width="49%" height="500px" src="https://www.youtube.com/embed/CNUTlKqSO-I" frameborder="0" allowfullscreen></iframe>

<iframe width="49%" height="500px" src="https://www.youtube.com/embed/10utJGbQQLs" frameborder="0" allowfullscreen></iframe>

</div>

</div>

<?php require('tpl/footer.html'); ?>