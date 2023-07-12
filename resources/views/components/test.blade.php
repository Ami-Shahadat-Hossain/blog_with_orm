<h1>{{ $blog->title }}</h1>
<p>{{ $blog->content }}</p>

<h2>Comments</h2>
@foreach ($comments as $comment)
    <div>
        <p>Name: {{ $comment->name }}</p>
        <p>Email: {{ $comment->email }}</p>
        <p>Comment: {{ $comment->comment }}</p>
    </div>
@endforeach
