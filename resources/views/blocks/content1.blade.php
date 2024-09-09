{{--<x-organisms.contents.content1/>--}}
<div>
  <x-atoms.containers.container1>
    <div class="grid grid-cols-2">
      <div>
        <img src="{{ $content['image']['url'] }}" alt=""/>
      </div>
      <div>
        <x-atoms.titles.title1>
          {{ $content['title'] }}
        </x-atoms.titles.title1>
        <div>{{ $content['content'] }}</div>
      </div>
    </div>
  </x-atoms.containers.container1>

</div>
