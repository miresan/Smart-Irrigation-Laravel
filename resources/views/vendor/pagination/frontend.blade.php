@if ($paginator->hasPages())
    <ul class="pagination pagination-seperated pagination-seperated-rounded">
       
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><span>← Previous</span></li> --}}
            <li class="page-item disabled">
                <p class="page-link">
                  <span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span> Prev
                  <span class="sr-only">Previous</span>
                </p>
            </li>
        @else
            {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li> --}}
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                  <span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span> Prev
                  <span class="sr-only">Previous</span>
                </a>
            </li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>
                </li>

            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- <li class="active my-active"><span>{{ $page }}</span></li> --}}
                        <li class="page-item active">
                            <p class="page-link">{{ $page }}</p>
                          </li>
                    @else
                        {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                  Next
                  <span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
        @else
            {{-- <li class="disabled"><span>Next →</span></li> --}}
            <li class="page-item disabled">
                <p class="page-link" aria-label="Next">
                  Next
                  <span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
                  <span class="sr-only">Next</span>
                </p>
            </li>
        @endif



    </ul>
@endif 