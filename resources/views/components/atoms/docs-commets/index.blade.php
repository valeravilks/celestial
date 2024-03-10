<div>
  <x-atoms.title.h1>
    {{ $classDocs }}
  </x-atoms.title.h1>

  @foreach($variablesDocs as $doc)
    <p>{{ $doc }}</p>
  @endforeach
</div>
