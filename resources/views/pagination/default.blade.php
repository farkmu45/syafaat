{{-- @if ($paginator->lastPage() > 1)
<ul class="pagination">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}">Next</a>
        </li>
</ul>
@endif --}}



@if ($paginator->lastPage() > 1)
<div class="pageination">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="Previous">
                    <i class="ti-angle-double-left"></i>
                </a>
            </li>

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a class="page-link"
                        href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endfor


                <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link " href="{{ $paginator->url($paginator->currentPage()+1) }}" aria-label="Next">
                        <i class="ti-angle-double-right"></i>
                    </a>
                </li>
        </ul>
    </nav>
</div>
@endif