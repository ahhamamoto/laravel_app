<div class="form-group row">
    <div class="col-2">
        {{ Form::label('name', 'Name', null) }}
    </div>
    <div class="col-8">
        {{ Form::input('text', 'name', null, ["class" => "form-control"]) }}
    </div>
</div>

<div class="form-group row">
    <div class="col-2">
        {{ Form::label('acquired', 'Acquired', null) }}
    </div>
    <div class="col-8">
        {{ Form::date('acquired', 'Acquired', null, ["class" => "form-control"]) }}
    </div>
</div>

{{ Form::token() }}
{{ Form::submit('Send') }}