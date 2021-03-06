<div class="col-sm-12 {{ str_replace('.', '', ($options['subFormClass'] ?? '')) . ' hidden' }}">
    <div class="popover popover-static bottom">
        <div class="arrow"></div>
        @if (array_key_exists('subFormTitle', $options))
            <h3 class="popover-title">{{ $options['subFormTitle'] }}</h3>
        @endif

        <div class="popover-content">
            {!! csrf_field() !!}

            @include ($options['subFormBlade'])
            @endsubform

        </div>
    </div>
</div>
