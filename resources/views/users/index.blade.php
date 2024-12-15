<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('users.create') }}" class="underline">Add new user</a>

                    <table class="table" id="top-users-index">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">First Name</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Last Name</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                                <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Image</span>
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left">
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                        @foreach($users as $user)
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $user->first_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $user->last_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                    <!-- {{ $user->email }} -->
                                    @php 
                                        $image = $user->image_path ?? null;
                                        if (empty($image)) {
                                            $image = 'hTrO1jlV6YJ5ZyNxdajGFBSjxTJJhQn9b8VwcpIu.jpg';
                                        } else {
                                            $image = $user->image_path;
                                        }
                                        $image_url = asset('storage/images/'.$image)
                                    @endphp
                                    <img src="{{ $image_url }}" alt="test image" width="50" height="50" />
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900 d-flex justify-content-end">
                                    <a href="{{ route('users.edit', $user) }}" class="underline pe-2">Edit</a>
                                    |
                                    <a href="{{ route('userProfileEdit', $user) }}" class="underline pe-2">Edit Profile</a>
                                    |
                                    <form method="POST"
                                          class="inline-block"
                                          action="{{ route('users.destroy', $user) }}"
                                          onsubmit="return confirm('Are you sure?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-link text-danger p-0">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
        document.getElementById('top-users-index').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
</x-app-layout>