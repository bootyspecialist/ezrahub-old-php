<div id="op-post">
	<h2 class="thread-title">{{{ $thread->title }}}</h2>
	<h3 class="thread-subtitle">
		{{{ PrettyPrint::time($thread->created_at) }}}
		by <span class="thread-user">{{{ $thread->user }}}</span>
		from {{{ ($thread->location != '' ? $thread->location : 'The Moon') }}} -
		{{{ number_format($thread->views) }}} views
	</h3>
	<div class="reply-body">
		{{ $thread->body }}
	</div>
</div>
@if (count($thread->replies) != 0)
	<div id="replies">
		<h4 id="replies-header">Replies ({{{ $thread->replies->count() }}}):</h4>
		@foreach($thread->replies as $reply)
			<div class="reply">
				<div class="reply-body">
					{{ $reply->body }}
				</div>
				<h5 class="reply-header">
					<span class="thread-user">{{{ $thread->user }}}</span>
					<span class="rest-of-reply-header">
						from {{{ ($reply->location != '' ? $reply->location : 'The Moon') }}}
						{{{ PrettyPrint::time($thread->created_at) }}}
					</span>
				</h5>
			</div>
		@endforeach
	</div>
@endif
<div id="reply-form">
	<form id="new-reply-form" action="/thread/{{{ $thread->id }}}/reply" method="post">
	<h4 id="reply-to-thread">Reply to this thread:</h4>
	<textarea name="body" id="new-reply-body" class="bbcode-textarea" placeholder="Start writing here..."></textarea>
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
	<input id="submit-thread" type="submit" value="Reply">
	<div id="nope">
		<i class="fa fa-eye-slash"></i>
	</div>
	<div id="posting-info">
		Replying as: <b>{{{ $user }}}</b>
	</div>
</form>
</div>

