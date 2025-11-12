<h1>Hello World</h1>

<a href="{{ route ('feature') }}">Click saya untuk berpindah halaman</a>

<p>Data User</p>
<ul>
    @foreach ($users as $user)
    <li>
        <a href="{{ route ('users.show',$user->id) }}">
            {{ $user->name }}
        </a>
    </li>
    @endforeach
</ul>