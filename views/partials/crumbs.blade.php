<nav class="breadcrumbs">
    <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        @foreach($crumbs as $crumb)
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <meta itemprop="position" content="{{$loop->iteration}}">
            @if($loop->last != 1)
                <a href="@makeUrl($crumb['id'],'','','full')" title="{{ $crumb['title'] }}" itemprop="item">
                    <span itemprop="name">{{ $crumb['title'] }}</span>
                </a>
            @else
                <span itemprop="name">{{ $crumb['title'] }}</span>
            @endif
        </li>
        @endforeach
    </ul>
</nav>