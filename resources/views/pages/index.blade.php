


@foreach ($responseBody as $res )

<ol>

    <li> <a href="#"> {{$res->title}}</a> </li>
    <span>
        <ul>Comment</ul>
    </span>
</ol>

@endforeach
