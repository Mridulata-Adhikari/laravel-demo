<h1>{{$user->name}}'s Profile</h1>

<p> 
<strong>Country: </strong>   {{$user->country->name}} 
</p>

<p>
    <strong>Roles: </strong>

    <ul>
        @foreach ($user->roles as $role)
            <li>{{$role->name}}</li>
        @endforeach
    </ul>
</p>

{{-- @foreach ($user->articles as $article)
 
<h3>{{$article->title}}</h3>

<p> {{$article->body}} </p>
@endforeach --}}

@foreach ($user->comments as $comment)
    <p>{{$comment->body}}</p>
@endforeach