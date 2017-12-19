<h6>
    <strong>
    <em>
        <a href="/genus/{{strtolower($tree->genus)}}">{{$tree->genus}}</a>
        <a href="/genus/{{strtolower($tree->genus)}}/species/{{$tree->species}}">{{$tree->species}}</a>
    </em>
    </strong>
</h6>

@include('partials.links')

<div style="float: right; text-align: right" class="small">ID <a href="/tree/{{$tree->id}}">{{$tree->id}}</a></div>

@include('partials.common_name')

<hr style="border: 1px dotted #a9a9a9">