
<div class="rowan-tree-title">
    <div class="h5" style="float: left">
        <strong>
        <em>
            <a href="/genus/{{strtolower($tree->genus)}}">{{$tree->genus}}</a>
            <a href="/genus/{{strtolower($tree->genus)}}/species/{{$tree->species}}">{{$tree->species}}</a>
        </em>
        </strong>
    </div>
    <div style="float: right">
        @include('partials.links')
    </div>
    <div class="clearfix"></div>
</div>

<div class="rowan-common-name-form">
    @can('add', App\CommonName::class)
    {!! Form::open(['url' => 'add_common_name', 'class'=>'form-horizontal form-inline']) !!}
        {!! Form::hidden('tree_id', $tree->id) !!}
        {!! Form::hidden('user_id', 1) !!}
        {{ csrf_field() }}
        <div>
            <div style="width: 30%; float: left">
                {!! Form::select('language_id', $languages, 41, ['class' => 'form-control form-inline', 'autofocus' => 'autofocus']) !!}
            </div>
            <div style="float:right; width: 47%">
                {!! Form::text('name', null, ['class' => 'form-control form-inline', 'placeholder' => 'Common Name']) !!}
                <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
            <div class="clearfix"></div>
        </div>
    {!! Form::close() !!}
    @endcan
</div>

<div class="rowan-tree">
    @include('partials.common_name')
</div>
