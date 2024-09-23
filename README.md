# ⚠️ This package has been archived in favor of FluxUI: https://fluxui.dev. Feel free to continue to use this package until you can transition, but it will no longer receive updates.

# Casts for Laravel

![Casts for Laravel masthead image.](https://repository-images.githubusercontent.com/54227416/9eab2600-f1b2-11e9-9aa3-2da687ef463c)

## Requirements
- PHP >= 7.1.3
- Laravel >= 5.5
- `jQuery` needs to be already loaded in your project
- `Bootstrap JS` (3 or 4) needs to be already loaded, if being used

## Rationale
This package is an effort to streamline and make form development more
 efficient in Laravel Blade views.

### Features
- Support for common CSS frameworks. (At this time only Bootstrap 3 and
 Bootstrap 4.beta, more coming soon.)
- Blade directives for elegant Blade view integration, providing concise
 syntax, reducing form boilerplate 10-fold.
- DateTime Picker for Bootstrap 3.

## Installation
1. Install the package:
  ```sh
  composer require genealabs/laravel-casts
  ```

3. Publish the required assets:
  ```sh
  php artisan casts:publish --assets
  ```

## Usage
The following shows all elements using Bootstrap 3:

<img width="1145" alt="screen shot 2017-03-03 at 7 53 47 am" src="https://cloud.githubusercontent.com/assets/1791050/23557961/c0860684-ffe6-11e6-8218-c54377b42804.png">

### Blade Directives
The following Blade directives developing forms a snap:
```blade
@form(['url' => ''])
    @errors("intro text", ["html" => "attributes"])
    @text('text', '', ['placeholder' => 'Placeholder Text', 'label' => 'Text Input'])
    @number('number', '', ['placeholder' => 'Placeholder Text', 'label' => 'Number Input'])
    @password('password', ['placeholder' => 'Placeholder Text', 'label' => 'Password Input'])
    @date('date', '', ['placeholder' => 'Placeholder Text', 'label' => 'Date'])
    @datetime('datetime', '', ['placeholder' => 'Placeholder Text', 'label' => 'DateTime'])
    @email('email', '', ['placeholder' => 'Placeholder Text', 'label' => 'Email Input'])
    @url('url', '', ['placeholder' => 'Placeholder Text', 'label' => 'Url Input'])
    @search ('search', 'search term', ['placeholder' => 'Placeholder Text', 'label' => 'Search Input'])
    @color ('color', '#ff0000', ['placeholder' => 'Placeholder Text', 'label' => 'Color Input'])
    @range ('range', 5, ['placeholder' => 'Placeholder Text', 'label' => 'Range Input'])
    @tel ('tel', '1234567890', ['placeholder' => 'Placeholder Text', 'label' => 'Tel Input'])
    @week ('week', 3, ['placeholder' => 'Placeholder Text', 'label' => 'Week Input'])
    @month ('month', 'January', ['placeholder' => 'Placeholder Text', 'label' => 'Month Input'])
    @file('file', ['placeholder' => 'Placeholder Text', 'label' => 'File Input'])
    @textarea('textarea', '', ['placeholder' => 'Placeholder Text', 'label' => 'Textarea', 'rows' => 7])
    @checkbox('checkbox', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Checkbox'])
    @radio('radio', 'test', true, ['placeholder' => 'Placeholder Text', 'label' => 'Radio'])
    @switch('fieldname', 'true value', $isChecked, ['label' => 'Switch', 'label' => 'Switch', 'onText' => 'Available', 'onColor' => 'success', 'offText' => 'Unavailable', 'offColor' => 'danger'])
    @select('select', [1, 2, 3, 4], null, ['placeholder' => 'Placeholder Text', 'label' => 'Select'])
    @selectMonths('select_months', null, ['placeholder' => 'Placeholder Text', 'label' => 'Select'])
    @selectWeekdays('select_weekdays', null, ['placeholder' => 'Placeholder Text', 'label' => 'Select Weekdays']) @selectRange('selectRange', 1, 21, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range'])
    @selectRangeWithInterval('selectRangeWithInterval', 1, 21, 3, null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Select Range With Interval'])
    @combobox('combobox', [1, 2, 3, 4], null, ['class' => 'form-control', 'placeholder' => 'Placeholder Text', 'label' => 'Combobox'])
    @submit('submit', ['class' => 'btn btn-success', 'label' => 'Submit Button'])
@endform
```

#### `@form` / `{!! Form::open() !!}`
```blade
@form ($model, ['class' => '', 'labelWidth' => '', 'fieldWidth' => '', 'framework' => ''])
```
- `$model`: (optional) used to pre-populate a model-based form.
- `class`: (optional)
- `offset`: (optional, default: 3)
- `labelWidth`: (optional, default: 3)
- `fieldWidth`: (optional, default: 9)
- `framework`: (optional)

#### `@errors` / `{!! Form::errors() !!}`
```blade
@errors (string $intro = "", array $options = [])
```
- `$intro`: an optional brief pre-text to the errors list.
- `$options`: (default: []) will be rendered as html tag attributes.

#### `@label` / `{!! Form::label() !!}`
```blade
@label ($name, $label = null, array $options = [], $escapeHtml = true)
```

- `$name`: used for the `for=` attribute on the label.
- `$label`: (default: null) the label text.
- `$options`: (default: []) array of options, including `class`.
- `$escapeHtml`: (default: true) set this to false if your label should render
 HTML.

**Note:** labels are rendered automatically when using frameworks.

#### Input controls
The following controls use the same syntax:
- `@text` / `{!! Form::text() !!}`
- `@date` / `{!! Form::date() !!}`
- `@datetime` / `{!! Form::datetime() !!}`
- `@email` / `{!! Form::email() !!}`
- `@url` / `{!! Form::url() !!}`
- `@textarea` / `{!! Form::textarea() !!}`

```blade
@text ($name, $value = null, $options = [])
```

- `$name`: name of the control, used to submit form values.
- `$value`: (default: null) value of the control, if you need to prepopulate it.
 It will automatically populate old form values if validation fails.
- `$options`: (default: []) array of options, including `class`.

#### `@switch` / `{!! Form::switch() !!}`
```blade
@switch ('fieldname', 'active value', $isActivated, [label' => 'Switch', 'onText' => 'Available', 'offText' => 'Unavailable', 'onColor' => 'success', 'offColor' => 'danger'])
```

#### `@select` / `{!! Form::select() !!}`
```blade
@select ($name, $list = [], $selected = null, $options = [])
```

- `$name`: name of the control, used to submit form values.
- `$list`: (default: []) array of key-value pairs used to create the select list
 options.
- `$selected`: (default: null) the value of the selected options.
- `$options`: (default: []) array of options, including `class`.

#### `@selectMonths` / `{!! Form::selectMonths() !!}`
```blade
@selectMonths ($name, $selected = null, $options = [])
```

- `$name`: name of the control, used to submit form values.
- `$selected`: (default: null) the value of the selected options.
- `$options`: (default: []) array of options, including `class`.

#### `@selectWeekdays` / `{!! Form::selectWeekdays() !!}`
```blade
@selectWeekdays ($name, $selected = null, $options = [])
```

- `$name`: name of the control, used to submit form values.
- `$selected`: (default: null) the value of the selected options.
- `$options`: (default: []) array of options, including `class`.

#### `@selectRangeWithInterval` / `{!! Form::selectRangeWithInterval() !!}`
```blade
@selectRangeWithInterval(string $name, int $start, int $end, int $interval, int $value = null, array $options = [])
```

- `$name`: name of the control, used to submit form values.
- `$start`: starting value of the list.
- `$end`: ending value of the list.
- `$interval`: interval value.
- `$value`: selected value.
- `$options`: (default: []) array of options, including `class`.

### CSS Framework Support
Taking advantage of framework support will handle all error validation
 presentation, as well as generation of labels and all the necessary form
 control boilerplate.

Additional framework support is planned, possibly including:
- Foundation
- Skeleton
- Semantic UI

If there's a framework you would like included, feel free to reach out by
 opening an issue with the pertinent details.

#### Bootstrap 3
To have a form render for Bootstrap 3, specify the framework and form
 orientation in the `@form` directive:
```blade
@form(['url' => '', 'class' => 'form-horizontal', 'framework' => 'bootstrap3'])
```

Additionally, to enable the date/time picker, add the following to your
 JavaScript file for the page rendering the date fields:
 ```js
 if (window.$) {
     $(function () {
         if ( $.isFunction($.fn.datetimepicker) ) {
             $('input[type=date]').datetimepicker({
                 format: 'LL'
             });

             $('input[type=datetime]').datetimepicker({
                 format: 'LLL',
                 sideBySide: true
             });
         }
     });
 }
 ```

You can include the library using Gulp and NPM (preferred), or use a CDN.

##### Gulp / NPM
1. `npm install save-dev bootstrap-datetimepicker-npm`
2. Then require the library in your `/resources/assets/js/app.js` file (after jQuery and Bootstrap have been required):
  ```
  require('bootstrap-datetimepicker-npm');
  ```
3. Don't forget to include the CSS as well in `/resources/assets/sass/app.sass`:
  ```
  // DateTimePicker
  @import "./node_modules/bootstrap-datetimepicker-npm/src/sass/bootstrap-datetimepicker-build";
  ```
4. Finally, edit your `/gulpfile.js` as needed, and run `gulp`.

##### CDNs
Add the following references to the page(s) or your main layout file. You will
need to have jQuery and Bootstrap libraries included as well.
```html
<html>
    <head>
        <!-- ... -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css">
        <!-- ... -->
    </head>
    <body>
        <!-- ... -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.0/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>
    </body>
</html>
```

#### Bootstrap 4 (alpha 3)
Nearly the same as above:
```blade
@form(['url' => '', 'class' => 'form-horizontal', 'framework' => 'bootstrap4'])
```

## Testing
- Add the following entry to your `phpunit.xml` config file:
  ```xml
<!--
  <testsuites>
      <testsuite name="Application Test Suite">
-->
          <directory suffix="Test.php">./vendor/genealabs/laravel-casts/tests</directory>
<!--
      </testsuite>
  </testsuites>
-->
  ```

- Run `vendor/bin/phpunit` from the base directory of your project.
