{!! Form::open(['url' => 'search/tree/']) !!}
    {{ csrf_field() }}
    <div class="form-group has-feedback" style="float:right;">
        {!! Form::text('tree_search', null, ['class' => 'form-control', 'placeholder' => 'Tree Search']) !!}
    </div>
{!! Form::close() !!}
{!! Form::open(['url' => 'search/common_name/']) !!}
    {{ csrf_field() }}
    <div class="form-group has-feedback" style="float:right;">
        {!! Form::text('common_name_search', null, ['class' => 'form-control', 'placeholder' => 'Common Name Search']) !!}
    </div>
{!! Form::close() !!}