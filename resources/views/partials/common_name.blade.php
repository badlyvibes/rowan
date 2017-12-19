@if (count($tree->commonNames) > 0)

    <hr style="border: 1px dotted #c7c7c7">

    <table cellpadding="0" style="width: 500px" class="small">
    @foreach($tree->commonNames as $commonName)
        <tr>
            <td title="Common Name" style="padding-right: 8px; width: 250px;">{{$commonName->name}}</td>
            <td title="Language">
                <a href="https://en.wikipedia.org/wiki/{{$commonName->language->iso_name}}_language"
                target="_blank">{{$commonName->language->iso_name}}</a>
                @if ($commonName->language->native_name != $commonName->language->iso_name)
                    : {{$commonName->language->native_name}}
                @endif
            </td>
        </tr>
    @endforeach
    </table>

@endif