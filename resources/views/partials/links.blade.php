<a href="https://www.google.com/search?q={{$tree->name}}"
target="_blank"
><img style="width: 16px" src="{{ asset('images/google_logo.svg') }}" alt="Google: {{$tree->name}}"></a>

<a href="https://www.google.com/search?q={{$tree->name}}&source=lnms&tbm=isch&dcr=0"
target="_blank"
><img style="width: 16px" src="{{ asset('images/camera.svg') }}" alt="Google Images: {{$tree->name}}"></a>

<a href="https://www.wikipedia.org/w/index.php?search={{$tree->genus}}+{{$tree->species}}&fulltext=Search&profile=advanced"
target="_blank"
><img style="width: 20px" src="{{ asset('images/wikipedia_logo.svg') }}" alt="Wikipedia Search: {{$tree->name}}"></a>

<a href="https://www.wikidata.org/w/index.php?search=&search={{$tree->genus}}+{{$tree->species}}"
target="_blank"
><img style="width: 26px" src="{{ asset('images/wikidata_logo.svg') }}" alt="Wikidata Search: {{$tree->name}}"></a>
