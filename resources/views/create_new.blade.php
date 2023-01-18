@extends('template')

@section('title', 'Create New')

@section('content')

    <style>
        .field-input {
            background: #252A37;
            border: none;
            border-radius: 4px;
            caret-color: white;
            color: rgb(254, 254, 255);
            padding: 5px;
            width: 100%;
            padding-bottom: 10px;
        }

        .field-input:focus {
            outline: 2px solid #E93B30;

        }

        .create {
            background: #E93B30;
            border: none;
            padding: 5px 15px;
            border-radius: 4px;
            width: 100%;
        }

        .create:hover {
            background: #b93127;
        }

        .element-space {
            margin: 0px 10px;
        }
    </style>


    <section
        style="width: 50%; display: flex; flex-direction: column; margin: auto; justify-content: center; align-items: center;">
        <span style="font-size: 5vw;">Create New Link<span style="color: #E93B30"></span></span>
        <form action="{{ route('shortLink.store') }}" method="POST">
            @csrf
            <div style="display: flex; flex-direction: row; align-items: center;">
                <div class=" element-space" style="padding-top: 20px; display: flex; flex-direction: column;">
                    <label for="name">Domain</label><span class="text-danger"></span>
                    <input type="text" id="Domain" name="Domain" placeholder="127.0.0.1:8000\"
                        class="field-input" readonly>
                </div>
                <div class="element-space" style="padding-top: 20px; display: flex; flex-direction: column;">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" placeholder="Enter your url name"
                        class="field-input">
                </div>
            </div>
            <br>
            <div class="element-space">
                <label for="url">Long Url</label><span class="text-danger">*</span>
                <input type="text" id="url" name="url" placeholder="Enter your long url" class="field-input">
            </div>
            <br>
            <div class="element-space">
                <label for="description">Description </label><label class="text-muted"> (Optional)</label>
                <input type="text" id="description" name="description" placeholder="Enter your desctiption"
                    class="field-input">

            </div>
            <br>
            <button type="submit" class="create">Create New</button>

            <div>
            </div>
        </form>

    </section>

@endsection
