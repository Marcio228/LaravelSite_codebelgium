<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Form components
        Form::component('textGroup', 'backend.partials.form.text_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('emailGroup', 'backend.partials.form.email_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('passwordGroup', 'backend.partials.form.password_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('numberGroup', 'backend.partials.form.number_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('selectGroup', 'backend.partials.form.select_group', [
            'name', 'text', 'icon', 'values', 'selected' => null, 'attributes' => ['required' => 'required'], 'col' => 'col-md-6',
        ]);

        Form::component('multiSelectGroup', 'backend.partials.form.multiselect_group', [
            'name', 'text', 'icon', 'values', 'selected' => null, 'attributes' => ['required' => 'required'], 'col' => 'col-md-6',
        ]);

        Form::component('selectSearchGroup', 'backend.partials.form.select_search_group', [
            'name', 'text', 'icon', 'values', 'selected' => null, 'attributes' => ['required' => 'required'], 'col' => 'col-md-6',
        ]);

        Form::component('textareaGroup', 'backend.partials.form.textarea_group', [
            'name', 'text', 'value' => null, 'attributes' => ['rows' => '3'], 'col' => 'col-md-12',
        ]);

        Form::component('dateGroup', 'backend.partials.form.date_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('dateTimeGroup', 'backend.partials.form.date_time_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('dateRangeGroup', 'backend.partials.form.date_range_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('customDateRangeGroup', 'backend.partials.form.custom_date_range_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('dateTimeRangeGroup', 'backend.partials.form.date_time_range_group', [
            'name', 'text', 'icon', 'attributes' => ['required' => 'required'], 'value' => null, 'col' => 'col-md-6',
        ]);

        Form::component('saveButtons', 'backend.partials.form.save_buttons', [
            'cancel', 'col' => 'col-md-12',
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}