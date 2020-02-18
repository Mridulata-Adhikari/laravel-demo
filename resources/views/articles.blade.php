@foreach ($articles as $article)

<h1>{{$article->title}} <small>posted by {{$article->user->name}}</small> </h1>
<p> {{$article->body}}</p>
    {{-- <ul>

        @foreach ($article->tags as $tag)
            <li> {{ $tag->name }} </li>
        @endforeach

    </ul> --}}
@endforeach

@foreach ($article->comments as $comment)
    <p>{{$comment->body}}</p>
@endforeach