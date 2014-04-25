<h2 id="home-intro">What Cornell University is up to today:</h2>
@foreach($threads as $thread)
	<div class="thread-preview">
		<a href="/thread/{{ $thread->id }}">
			<h3 class="thread-title">
				<span class="thread-title-highlight">{{ substr($thread->body, 0, 100) }}...</span>
				{{ PrettyPrint::time($thread->created_at) }} by {{ $thread->user }},
				{{ number_format($thread->views) }} views
			</h3>
		</a>
	</div>
@endforeach
