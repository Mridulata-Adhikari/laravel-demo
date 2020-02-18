<h1>Posts made in the {{ $country->name }}</h1>

@foreach ($country->articles as $article)

<h2>{{$article->title}} <small>posted by {{$article->user->name}}</small> </h1>
<p> {{$article->body}}</p>
    
@endforeach