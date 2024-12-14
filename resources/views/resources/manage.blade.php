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

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Manage Committees</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Manage Documents</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Manage Projects</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Manage Tasks</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Manage Users</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>



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