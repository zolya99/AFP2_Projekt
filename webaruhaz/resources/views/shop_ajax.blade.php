<header class="border-bottom mb-4 pb-3">
    <div class="row form-inline">
        <span class="mr-md-auto mr-xs-auto"> {{ $current_page + 1 }} / {{ $page_count }} pages </span>
        <span>&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; </span>
        <nav class="float-right" aria-label="...">
            <ul class="pagination">
                <li class="page-item {{ $current_page == 0 ? "disabled" : "" }}">
                    <a class="page-link" href="#" onclick="ajax_refresh({{ $current_page - 1}})" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">{{ $current_page + 1 }} <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item {{ $current_page >= $page_count - 1 ? "disabled" : "" }}">
                    <a class="page-link" href="#" onclick="ajax_refresh({{ $current_page + 1}})">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
