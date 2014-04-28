@foreach($threads as $thread)
	<div class="thread-preview">
		<a href="/thread/{{ $thread->id }}/{{ $thread->slug }}">
			<h3 class="thread-title">
				<span class="thread-title-highlight">{{ $thread->title }}</span>
				by <span class="thread-user">{{{ $thread->user }}}</span> from {{{ ($thread->location != '' ? $thread->location : 'The Moon') }}}, {{{ PrettyPrint::time($thread->created_at) }}} -
				{{{ number_format($thread->views) }}} views, {{{ $thread->replies->count() }}} repl{{{ ($thread->replies->count() > 1 || $thread->replies->count() == 0 ? 'ies' : 'y') }}}
			</h3>
		</a>
	</div>
@endforeach
