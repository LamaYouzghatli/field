<div class="form-group {{$errors->has($name) ? 'has-error':'' }}" id="{{$name}}_wrap">
    <label for="{{$name}}">{{$label}}</label>
    <div class="">
        {!! Form::select($name.'[]',$options,$value, [
            "data-placeholder" => $placeholder,
            "class" => "form-control".$plugin,
            "multiple" => "multiple",
            "id" => $name
        ]) !!}
    </div>
    <span class="help-block"><strong>{{$errors->first($name)}}</strong></span>
</div>