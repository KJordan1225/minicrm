<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <style>
                .accordion-body{
                    background-color: #7851A9;
                    color: #cfb53b;
                }
                .accordion-button.collapsed {
                    background-color: #cfb53b;
                    color: #7851A9;
                }

                .accordion-button:not(.collapsed) {
                    background-color: #cfb53b;
                    color: #7851A9;
                }
            </style>           
            <div>
            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100"
                    style="text-align: center;">
                    {{ __('Manage Site Resources') }}
                </h2>
            </header>
            @can(\App\Enums\PermissionEnum::MANAGE_USERS->value)
            <div id="top_manage_pgs">
                <a href="{{ route('users.index') }}">
                    Manage Users
                </a>
            </div>
            @endcan
            <div>
                <a href="{{ route('clients.index') }}">
                    Manage Committees
                </a>
            </div>
            <div>                
                <a href="{{ route('projects.index') }}">
                Manage Projects
                </a>
            </div>
            <div>
                <a href="{{ route('tasks.index') }}">
                    Manage Tasks
                </a>
            </div>
            <div>
                <a href="{{ route('docs.index') }}">
                    Manage Documents
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
      document.getElementById('top_manage_pgs').scrollIntoView({ behavior: 'smooth' });
    };
</script>
</x-app-layout>