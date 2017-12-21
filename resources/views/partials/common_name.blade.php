@if (count($tree->commonNames) > 0)

    <table cellpadding="0" style="width: 100%">
    @foreach($tree->commonNames as $commonName)
        <tr class="rowan-common-name-row">
            <td title="Common Name" class="rowan-common-name-cell-left">{{$commonName->name}}</td>
            <td title="Language" class="rowan-common-name-cell-right">
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