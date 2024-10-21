<div class="bg-gray-100 p-4 rounded-md">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1">
            <li>
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="text-gray-400 hover:text-gray-600">Home</a>
                </div>
            </li>
            @foreach($breadcrumbs as $breadcrumb)
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 14.293a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L11 11.586 6.707 7.293a1 1 0 00-1.414 1.414l4 4z" clip-rule="evenodd" />
                        </svg>
                        <a href="{{ $breadcrumb['url'] }}" class="ml-1 text-gray-600 hover:text-gray-800">{{ $breadcrumb['title'] }}</a>
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>
</div>
