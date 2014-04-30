<div id="op-post">
	<h2 class="thread-title">{{{ $thread->title }}}</h2>
	<h3 class="thread-subtitle">
		{{{ PrettyPrint::time($thread->created_at) }}}
		by <span class="thread-user">{{{ $thread->user }}}</span>
		from {{{ ($thread->location != '' ? $thread->location : 'The Moon') }}},
		{{{ number_format($thread->views) }}} views, {{{ $thread->replies->count() }}} repl{{{ ($thread->replies->count() > 1 || $thread->replies->count() == 0 ? 'ies' : 'y') }}}
	</h3>
	<div class="reply-body">
		<p>{{ $thread->body }}</p>
	</div>
</div>
@if (count($thread->replies) != 0)
	<div id="replies">
		<h4 id="replies-header">Replies:</h4>
		@foreach($thread->replies as $reply)
			<div class="reply">
				<h5 class="reply-header">
					<span class="thread-user">{{{ $reply->user }}}</span>
					<span class="rest-of-reply-header">
						from {{{ ($reply->location != '' ? $reply->location : 'The Moon') }}}
						{{{ PrettyPrint::time($thread->created_at) }}}
					</span>
				</h5>
				<div class="reply-body">
					<p>{{ $reply->body }}</p>
				</div>
			</div>
		@endforeach
	</div>
@endif
<div id="reply-form">
	<form id="new-reply-form" action="/thread/{{{ $thread->id }}}/reply" method="post">
	<h4 id="reply-to-thread">Reply to this thread:</h4>
	{{ Form::textarea('body', Input::old('body'), array('id' =>'new-reply-body', 'class' => 'bbcode-textarea', 'placeholder' => 'Start writing here...')) }}
	@if (isset($errors) && count($errors) > 0)
		<p class="errors">
			<i class="fa fa-exclamation-triangle"></i>
			@foreach ($errors->all() as $error)
				{{{ $error }}}
			@endforeach
		</p>
	@endif
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
	<input id="submit-thread" type="submit" value="Reply">
	<div id="nope-button">
		<i class="fa fa-eye-slash"></i>
		<input type="hidden" name="nope" id="nope" value="" />
	</div>
	<div id="posting-info">
		Replying as: <b>{{{ $user }}}</b>
	</div>
</form>
</div>

