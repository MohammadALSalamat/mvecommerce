<nav class="breadcrumb-nav">
    <div class="container">
        <ul class="breadcrumb bb-no">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <?php $link = "" ?>
            @for($i = 1; $i <= count(Request::segments()); $i++)
                @if($i < count(Request::segments()) & $i > 0)
                    <?php $link .= "" . Request::segment($i); ?>
                    @if ($i == 1)
                    <li> <a href="<?= $link ?>" class="inactive"> {{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>
                    @else
                    <li>  <a href="<?= $link ?>" class="inactive">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>
                    @endif
                @else
                   <li> <a class="active"> {{ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>
                @endif
            @endfor
        </ul>
    </div>
</nav>