@if($isHorizontal)
    <div class="col-sm-{{ $fieldWidth }}">
@endif

{!! $controlHtml !!}

@if(! $errors->isEmpty() && ! $errors->has($name))
    <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
    <span id="inputSuccess2Status" class="sr-only">(success)</span>
@endif

@if(! $errors->isEmpty() && $errors->has($name))
    <span class="fa fa-times form-control-feedback" aria-hidden="true"></span>
    <span id="inputError2Status" class="sr-only">(error)</span>
    <span class="help-block">{{ implode(' ', $errors->get($name)) }}</span>
@endif

@if($isHorizontal)
    </div>
@endif
