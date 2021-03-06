@extends('genealabs-laravel-casts::examples.layout')

@section('css')
    <link href="/css/bootstrap4.css" rel="stylesheet" type="text/css" media="all">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">Horizontal Form</h1>

                @form(['url' => 'genealabs/laravel-casts/examples/bootstrap4', 'class' => 'form-horizontal', 'framework' => 'bootstrap4'])
                    @combobox ('subform1', [1, 2, 3, 4], null, ['placeholder' => 'Placeholder Text', 'subFormAction' => 'testurl', 'subFormBlade' => 'genealabs-laravel-casts::examples.subform', 'subFormFieldName' => 'name', 'subFormTitle' => 'Add New Address'])
                    @text('text1', '', ['placeholder' => 'Placeholder Text', 'label' => 'Text Input'])
                    @password('password1', ['placeholder' => 'Placeholder Text', 'label' => 'Password Input'])
                    @email('email1', '', ['placeholder' => 'Placeholder Text', 'label' => 'Email Input'])
                    @url('url1', '', ['placeholder' => 'Placeholder Text', 'label' => 'Url Input'])
                    @file('file1', ['placeholder' => 'Placeholder Text', 'label' => 'File Input'])
                    @search ('search1', 'search term', ['placeholder' => 'Placeholder Text', 'label' => 'Search Input'])
                    @number ('number1', 5, ['placeholder' => 'Placeholder Text', 'label' => 'Number Input'])
                    @range ('range1', 5, ['placeholder' => 'Placeholder Text', 'label' => 'Range Input'])
                    @color ('color1', '#ff0000', ['placeholder' => 'Placeholder Text', 'label' => 'Color Input'])
                    @tel ('tel1', '1234567890', ['placeholder' => 'Placeholder Text', 'label' => 'Tel Input'])
                    @week ('week1', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Week Input'])
                    @month ('month1', 'January', ['placeholder' => 'Placeholder Text', 'label' => 'Month Input'])
                    @textarea('textarea1', '', ['placeholder' => 'Placeholder Text', 'label' => 'Textarea', 'rows' => 7])
                    @checkbox('checkbox1', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Checkbox'])
                    @radio('radio1', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Radio'])
                    @switch('switch1', 'test', true, ['label' => 'Switch'])
                    @date('date1')
                    @datetime('datetime1')
                    @combobox ('combobox1', [1, 2, 3, 4], [1, 2], ['placeholder' => 'Placeholder Text', 'multiple' => 'multiple'])
                    @select ('select1', [1, 2, 3, 4], null, ['placeholder' => 'Placeholder Text', 'label' => 'Select'])
                    @selectMonths ('selectMonths1', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Select Months', 'optionsFormat' => 'names'])
                    @selectWeekdays ('selectWeekdays1', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Select Weekdays'])
                    @selectRange ('select_range1', 1, 21, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range'])
                    @selectRangeWithInterval ('select_range_with_interval1', 1, 21, 3, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range With Interval'])
                    @signature ('signature1')
                    @button ('button1', ['class' => 'btn-primary'])
                    @buttonGroup (['label' => 'test label'])
                        @button ('button2', ['class' => 'btn-primary'])
                        @button ('button3', ['class' => 'btn-primary'])
                        @button ('button4', ['class' => 'btn-primary'])
                    @endButtonGroup
                    @staticText ('Show me the text!', ['label' => 'What?'])
                    @submit ('submit', ['class' => 'btn btn-success', 'label' => 'Submit Button'], '/bs3')
                @endform

            </div>
            <div class="col-sm-6">
                <h1 class="page-title">Normal Form</h1>

                @form(['url' => 'genealabs/laravel-casts/examples/bootstrap4'])
                    @text('text2', '', ['placeholder' => 'Placeholder Text', 'label' => 'Text Input'])
                    @password('password2', ['placeholder' => 'Placeholder Text', 'label' => 'Password Input'])
                    @email('email2', '', ['placeholder' => 'Placeholder Text', 'label' => 'Email Input'])
                    @url('url2', '', ['placeholder' => 'Placeholder Text', 'label' => 'Url Input'])
                    @file('file2', ['placeholder' => 'Placeholder Text', 'label' => 'File Input'])
                    @search ('search2', 'search term', ['placeholder' => 'Placeholder Text', 'label' => 'Search Input'])
                    @number ('number2', 5, ['placeholder' => 'Placeholder Text', 'label' => 'Number Input'])
                    @range ('range2', 5, ['placeholder' => 'Placeholder Text', 'label' => 'Range Input'])
                    @color ('color2', '#ff0000', ['placeholder' => 'Placeholder Text', 'label' => 'Color Input'])
                    @tel ('tel2', '1234567890', ['placeholder' => 'Placeholder Text', 'label' => 'Tel Input'])
                    @week ('week2', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Week Input'])
                    @month ('month2', 'January', ['placeholder' => 'Placeholder Text', 'label' => 'Month Input'])
                    @textarea('textarea2', '', ['placeholder' => 'Placeholder Text', 'label' => 'Textarea', 'rows' => 7])
                    @checkbox('checkbox2', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Checkbox'])
                    @radio('radio2', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Radio'])
                    @switch('switch2', 'test', true, ['label' => 'Switch', 'onText' => 'Available', 'offText' => 'Unavailable', 'onColor' => 'success', 'offColor' => 'danger'])
                    @date('date2')
                    @datetime('datetime2')
                    @combobox('combobox2', [1, 2, 3, 4], [], ['placeholder' => 'Placeholder Text'])
                    @select('select2', [1, 2, 3, 4], null, ['placeholder' => 'Placeholder Text', 'label' => 'Select'])
                    @selectMonths('selectMonths2', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Select Months'])
                    @selectWeekdays('selectWeekdays2', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Select Weekdays'])
                    @selectRange('selectRange2', 1, 21, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range'])
                    @selectRangeWithInterval('selectRangeWithInterval2', 1, 21, 3, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range With Interval'])
                    @signature('signature2')
                    @button('button5', ['class' => 'btn-primary'])
                    @buttonGroup(['label' => 'test label'])
                        @button('button6', ['class' => 'btn-primary'])
                        @button('button7', ['class' => 'btn-primary'])
                        @button('button8', ['class' => 'btn-primary'])
                    @endButtonGroup
                    @staticText('Show me the text!', ['label' => 'What?'])
                    @submit('submit2', ['class' => 'btn btn-success', 'label' => 'Submit Button'], '/bs3')
                @endform
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{!! asset('genealabs-laravel-casts/tether.js') !!}"></script>
    <script src="{!! asset('genealabs-laravel-casts/bootstrap4.js') !!}"></script>

    @yield ('js')
@endsection
