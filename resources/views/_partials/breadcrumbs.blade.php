@if ($breadcrumbs)
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($loop->first)
                <li><a href="{{ $breadcrumb->url }}"> <i class="fa fa-dashboard"></i>
                        @if($breadcrumb->title == 'Admin')
                             Adiministração
                         @else

                        {{ $breadcrumb->title }}
                        @endif
                    </a></li>
            @elseif (!$loop->last)
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>   </li>
            @else
                <li class="active">
                    @if($breadcrumb->title == 'Users')
                        Usuários
                    @else
                        {{ $breadcrumb->title }}
                    @endif
                    </li>
            @endif
        @endforeach
    </ol>
@endif
