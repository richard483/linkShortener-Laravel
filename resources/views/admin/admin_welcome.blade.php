@extends('template')

@section('title', 'Index')

@section('content')

<style>
    .field-input {
        background: #252A37;
        border: none;
        border-radius: 4px;
        caret-color: white;
        color: white;
        padding: 5px;
    }

    .field-input:focus {
        outline: 2px solid #E93B30;
    }

    .field-input:disabled {
        color: rgb(112, 112, 112);
        background: #252A37;
    }

    .edit {
        background: #e99c30;
        border: none;
        padding: 5px 15px;
        border-radius: 4px;
        color: white;
    }

    .edit:hover {
        background: #c88629;
    }

    .delete {
        background: #E93B30;
        border: none;
        padding: 0.5rem;
        border-radius: 4px;
        color: white;
        text-decoration: none;
    }

    .delete:hover {
        background: #b93127;
        color: white;
        text-decoration: none;
    }

    .restore:hover {
        background: #2766b9;
        color: white;
        text-decoration: none;
    }

    .restore {
        background: #4681ce;
        border: none;
        padding: 0.5rem;
        border-radius: 4px;
        color: white;
        text-decoration: none;
    }

    table,
    td,
    th {
        border: 1px solid white;
    }

    th {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
</style>

<body>
    <table>
        <tr style="background-color: #171923;">
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>


        @foreach ($users as $user)
        <tr>
            <form action="{{route('user.edit', $user->id)}}" method="post" style="margin: 5px;">
                @csrf
                <td>
                    <input type="text" name="name" value="{{$user->name}}" class="field-input" style="width: 100%;">
                </td>
                <td>
                    <select name="role" value="{{$user->role}}" {{$user->id == Auth::user()->id ? 'disabled': ''}}
                        class="field-input" style="width: 100%;">
                        <option value="member" {{$user->role == "member" ? 'selected': ''}}>Member</option>
                        <option value="admin" {{$user->role == "admin" ? 'selected': ''}}>Admin</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="Edit" class="edit">
                    @if ($user->id != Auth::user()->id && $user->trashed() == false)
                    <a href="{{route('user.delete', $user->id)}}" class="delete">Delete</a>
                    @elseif ($user->trashed())
                    <a href="{{route('user.restore', $user->id)}}" class="restore">Restore</a>
                    @endif
                </td>
            </form>
        </tr>
        @endforeach
    </table>
</body>

@endsection
