@extends('template')

@section('title', 'Index')

@section('content')

<body>
    @foreach ($users as $user)
    <form action="{{route('user.edit', $user->id)}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$user->name}}">
        <select name="role" value="{{$user->role}}" {{$user->id == Auth::user()->id ? 'disabled': ''}}>
            <option value="member" {{$user->role == "member" ? 'selected': ''}}>Member</option>
            <option value="admin" {{$user->role == "admin" ? 'selected': ''}}>Admin</option>
        </select>
        <input type="submit" value="Edit">
        @if ($user->id != Auth::user()->id && $user->trashed() == false)
        <a href="{{route('user.delete', $user->id)}}"><button>Delete</button></a>
        @elseif ($user->trashed())
        <a href="{{route('user.restore', $user->id)}}"><button>Restore</button></a>
        @endif
    </form>
    @endforeach
</body>

@endsection
