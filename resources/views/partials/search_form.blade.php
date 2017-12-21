{!! Form::open(['url' => 'search/']) !!}
    <div class="form-group has-feedback" style="float:right;">
        {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) !!}
    </div>
{!! Form::close() !!}