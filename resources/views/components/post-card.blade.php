@props(['post'])

<article>
    <div class="mx-2 my-2">
        <div>
            <img src="/images/wall-street.jpg" alt="Wall Street">
        </div>
        <div>
            <a href="/posts/{{ $post->slug }}">
            <h2 class="text-3xl font-bold hover:text-gray-500">
                {{ $post->title }}
            </h2>
</a>

<h3 class="font-bold hover:text-green-500">
By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            </h3>
            <span class="text-gray-400 text-sm">
                Published <time>{{ $post->created_at->diffForHumans() }}</time> 
            </span>

        </div>
    </div>
</article>