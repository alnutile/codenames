@extends('layouts.app')

@section('title', 'Welcome')


@section('content')
<livewire:show-codename :random="$random" />

<div class="codename-card-wide mdl-card mdl-shadow--2dp" style="margin-top: 10px;">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">API INFO HERE (COMING SOON)</h2>
    </div>
    <div class="mdl-card__supporting-text">
        <p>All you need to do is make a GET request <b>https://codenames.alfrednutile.info/api/codenames</b></p>
        <p>Return JSON will be:</p>
        <pre>
            <code class="json">
                {
                  "codename": "foo-bar"
                }
            </code>
        </pre>
    </div>
</div>
@endsection