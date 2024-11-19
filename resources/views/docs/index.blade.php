<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <a href="{{ route('docs.create') }}" class="underline">Add new document</a>
                
                <div class="p-6 text-gray-900">     
                    <table class="table" id="top-documents-table">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</span>
                            </th>                            
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Committee</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Last revised</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($documents as $document)
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $document->display_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                @php
                                    $msg = $document->client->company_name ?? 'Default Name';
                                @endphp

                                {{ $msg }}                                    
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $document->last_revised }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $document->last_revised }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 d-flex justify-content-end">                                    
									<a href="{{ '/storage/documents/'.$document->filepathname }}" class="underline pe-2">View</a>
                                    <a href="{{ route('docs.edit', $document->id) }}" class="underline pe-2">Edit</a>
                                    @can(\App\Enums\PermissionEnum::DELETE_DOCUMENTS->value)   
                                    <form action="{{ route('docs.destroy', $document) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure?');"
                                        class="inline-block">    
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-link text-danger p-0">Delete</button>
                                    </form>                                   
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $documents->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
        document.getElementById('top-documents-table').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
</x-app-layout>