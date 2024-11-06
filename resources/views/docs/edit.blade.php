<x-app-layout>
    <div class="py-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Document') }}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('docs.update', $document) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

						<!-- Title Input -->
						<div class="mb-3">
							<label for="title" class="form-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $document->title) }}">
							<x-input-error :messages="$errors->get('title')" class="mt-2" />
						</div>

						<!-- Description -->
						<div class="mb-3">
							<label for="description" class="form-label">Description</label>
							<textarea class="form-control" id="description" name="description">{{ old('description', $document->description) }}</textarea>
							<x-input-error :messages="$errors->get('description')" class="mt-2" />
						</div>

						<!-- last revised -->
						<div class="mt-4">
							<label for="last_revised" class="form-label">Last Revised</label>
							<input type="date" class="form-control" id="last_revised" name="last_revised" min="{{ today()->format('Y-m-d') }}" value="{{ old('last_revised', $document->last_revised) }}">
							<x-input-error :messages="$errors->get('last_revised')" class="mt-2" />
						</div>

						<!-- Assigned User -->
                        <div class="mt-4">
							<label for="user_id" class="form-label">Assigned user</label>
                            <select class="form-select" name="user_id" id="user_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                        @selected(old('user_id', $document->user_id) == $user->id)>{{ $user->first_name . ' ' . $user->last_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>

						<!-- Assigned Committee -->
                        <div class="mt-4">
							<label for="client_id" class="form-label">Assigned committee</label>
                            <select class="form-select" name="client_id" id="client_id">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}"
                                        @selected(old('client_id', $document->client_id) == $client->id)>{{ $client->company_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        </div>

						<!-- Assigned Project -->
                        <div class="mt-4">
							<label for="project_id" class="form-label">Assigned project</label>
                            <select class="form-select" name="project_id" id="project_id">
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}"
                                        @selected(old('project_id', $document->project_id) == $project->id)>{{ $project->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div>
			
						<!-- filepathname -->
						<div class="mb-3">
							<label for="filepathname" class="form-label">Upload File</label>
							<input type="file" class="form-control" id="filepathname" name="filepathname" value="{{ old('filepathname', $document->filepathname) }}">
							<x-input-error :messages="$errors->get('filepathname')" class="mt-2" />
						</div>
						
						<!-- display name -->
						<div class="mb-3">
							<label for="display_name" class="form-label">Display Name</label>
							<input type="text" class="form-control" id="display_name" name="display_name" value="{{ old('display_name', $document->display_name) }}">
							<x-input-error :messages="$errors->get('display_name')" class="mt-2" />
						</div>

						<!-- Status -->
                        <div class="mt-4">
							<label for="status" class="form-label">Status</label>
                            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" name="status" id="status">
                                @foreach(\App\Enums\DocumentStatus::cases() as $status)
                                    <option value="{{ $status->value }}"
										@selected(old('status', $document->status->value) == $status->value)>{{ $status->value }}</option>
								@endforeach
							</select>
							<x-input-error :messages="$errors->get('status')" class="mt-2" />
						</div>

                        <!-- Submit Button -->
						<div class="d-flex justify-content-center mt-4">
							<button type="submit" class="btn btn-primary w-50 mt-3" style="background-color: #6D2077; color: #B7A57A;">Save</button>
						</div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>