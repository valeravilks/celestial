<a href="{{ $siteUrl }}">

  @if ($textType)
      @if ($customTextName)
        {{ $customTextName  }}
      @elseif($siteName)
        {{ $siteName  }}
      @endif
  @endif

  @if ($imgType)
      <img src="{{ $logoUrl  }}" alt="{{ $siteName }}">
  @endif

</a>
