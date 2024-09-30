<div class="form-group row">
    @php
        if(isset($sublabel)){
            $sublabel = '<span>'.$sublabel.'</span>';
        } else {
            $sublabel = '';
        }
    @endphp
    @isset($required)
        {!! Form::label($name, '<div class="text-right">'.$label.' <span class="text-danger d-inline">*</span>'.$sublabel.'</div>', ['class' => 'col-3 col-form-label control-label required'], false) !!}
    @else
        {!! Form::label($name, '<div class="text-right">'.$label.''.$sublabel.'</div>', ['class' => 'col-3 col-form-label control-label required'], false) !!}
    @endisset
    <div class="@isset($class) {{ $class }} @else {{ 'col-4' }} @endisset">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="las la-calendar"></i></span>
        @isset($value)
            {!! Form::text($name, old($name, $value), ['class' => 'form-control datepicker']) !!}
        @else
            {!! Form::text($name, null, ['class' => 'form-control datepicker']) !!}
        @endisset
        @if($errors->first($name))<div class="invalid-feedback d-block">{{ $errors->first($name) }}</div>@endif
        </div>
    </div>
</div>
