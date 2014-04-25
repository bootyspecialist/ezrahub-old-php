@foreach($threads as $thread)
	<div class="thread-preview">
		<a href="/thread/{{ $thread->slug }}">
			<h3 class="thread-title">
				<span class="thread-title-highlight">{{ $thread->title }}</span>
				{{ PrettyPrint::time($thread->created_at) }} by {{ $thread->user }},
				{{ number_format($thread->views) }} views
			</h3>
		</a>
	</div>
@endforeach
