<form id="new-thread-form" action="/thread/new" method="post">
	<h2>Create a new thread:</h2>
	<input type="text" name="title" id="new-thread-title" placeholder="Thread title (at least 15 characters)">
	<textarea name="body" id="new-thread-body" class="bbcode-textarea" placeholder="Start writing here..."></textarea>
	<div class="formatting-buttons">
		<ul>
			<li class="formatting-button bold" data-action="bold">
				<i class="fa fa-bold"></i>
			</li>
			<li class="formatting-button italic" data-action="italic">
				<i class="fa fa-italic"></i>
			</li>
			<li class="formatting-button link" data-action="link">
				<i class="fa fa-link"></i>
			</li>
			<li class="formatting-button image" data-action="image">
				<i class="fa fa-picture-o"></i>
			</li>
			<li class="formatting-button youtube" data-action="youtube">
				<i class="fa fa-youtube"></i>
			</li>
			<li class="formatting-button quote" data-action="quote">
				<i class="fa fa-quote-left"></i>
			</li>
			<li class="formatting-button strikethrough" data-action="strikethrough">
				<i class="fa fa-strikethrough"></i>
			</li>
		</ul>
	</div>
	<div id="captcha">
		{{ Form::sweetcaptcha() }}
	</div>
	<input id="submit-thread" type="submit" value="Submit">
	<div id="posting-info">
		Posting as: <b>{{ $user }}</b>
	</div>
</form>
