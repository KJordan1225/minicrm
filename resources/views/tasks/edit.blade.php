<x-app-layout>

    <style>
        /* Centering the login form */
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 8%;
            padding: 2rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            background-color: #ffffff;
        }

        .required:after {
            content: "*";
            color: red;
        }
    </style> 

	<div class="container">
    <div class="login-container bg-white"
            style="margin-top: 3%; max-width: 500px;
                    ">



    <div class="d-flex items-center justify-content-center mb-3">
        <h2>Edit Task</h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200" id="top-task-edit">

                    <form method="POST" action="{{ route('tasks.update', $task) }}">
                        @csrf
                        @method('PUT')

                        <!-- Title Input -->
						<div class="mb-3">
							<label for="title" class="form-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}"/>
							<x-input-error :messages="$errors->get('title')" class="mt-2" />
						</div>                        
						
						<!-- Description -->
						<div class="mb-3">
							<label for="description" class="form-label">Description</label>
							<textarea class="form-control" id="description" name="description">{{ old('description', $task->description) }}</textarea>
							<x-input-error :messages="$errors->get('description')" class="mt-2" />
						</div>                        
						
						<!-- Deadline At -->
						<div class="mt-4">
							<label for="deadline_at" class="form-label">Deadline</label>
							<input type="date" class="form-control" id="deadline_at" name="deadline_at" min="{{ today()->format('Y-m-d') }}" value="{{ old('deadline_at', $task->deadline_at) }}">
							<x-input-error :messages="$errors->get('deadline_at')" class="mt-2" />
						</div>

                        <!-- Assigned User -->
                        <div class="mt-4">
							<label for="user_id" class="form-label">Assigned user</label>
                            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" name="user_id" id="user_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                        @selected(old('user_id', $task->user_id) == $user->id)>{{ $user->first_name . ' ' . $user->last_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>

                        <!-- Assigned Committee -->
                        <div class="mt-4">
							<label for="client_id" class="form-label">Assigned committee</label>
                            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" name="client_id" id="client_id">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}"
                                        @selected(old('client_id', $task->client_id) == $client->id)>{{ $client->company_name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        </div>

                        <!-- Assigned Project -->
                        <div class="mt-4">
							<label for="project_id" class="form-label">Assigned project</label>
                            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" name="project_id" id="project_id">
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}"
                                        @selected(old('project_id', $task->project_id) == $project->id)>{{ $project->title }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
							<label for="status" class="form-label">Status</label>
                            <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" name="status" id="status">
                                @foreach(\App\Enums\TaskStatus::cases() as $status)
                                    <option value="{{ $status->value }}"
												@selected(old('status', $task->status->value) == $status->value)>{{ $status->value }}</option>
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


    </div>
    </div>

    <script>
        window.onload = function() {
        document.getElementById('top-task-edit').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
</x-app-layout>