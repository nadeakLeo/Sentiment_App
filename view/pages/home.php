<style type="text/css">
	#input-sentences {
		width: 250px;
	}
	#comment-box {
		border: solid 3px #cc3a26;
	}
	#submit-comment {
		background-color:  #cc3a26;
		border: solid 2px #cc3a26;
	}
</style>

<center>
<form action="?controller=pages&action=show" method="POST" id="input-sentences">
	<div class = "form-group">
		<label for= "comment"><i>Input yur sentences :</i></label>
		<input type="text" name="comment" class="form-control" id="comment-box">
	</div>
	<input type="submit" value="Analyze" class="btn btn-primary" id="submit-comment">
</form>
</center>