<x-app-layout>
    <style>
        /* Centering the login form */
        .login-container {
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 8%;
            padding: 2rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            background-color: #ffffff;
        }
		
		/* Row Style */
		.row {
			display: flex;
			align-items: center;
			margin-bottom: 15px;
			border: 1px solid #ddd;
			padding: 10px;
			border-radius: 5px;
			background-color: #f9f9f9;
		}

		/* Image Container */
		.image-container img {
			width: 100px;
			height: 100px;
			border-radius: 5px;
			margin-right: 15px;
		}

        .image-container {
			width: 120px;
		}

		/* Info Container */
		.info-container p {
			margin: 5px 0;
		}

        .info-container {
            width: 200px;
        }
    </style> 

	
	<div class="container">
	<div class="login-container bg-white"
        style="margin-top: 3%; max-width: 800px; margin-bottom: 5%">
		
		@foreach($users as $user)
			<!-- Row -->
			<div class="row">
				<div class="image-container">
                @php 
                    $image = $user->image_path ?? null;
                    if (empty($image)) {
                        $image = 'hTrO1jlV6YJ5ZyNxdajGFBSjxTJJhQn9b8VwcpIu.jpg';
                    } else {
                        $image = $user->image_path;
                    }
                    $image_url = asset('storage/images/'.$image)
                @endphp
					<img src="{{ $image_url }}" alt="Placeholder Image">
				</div>
				<div class="info-container">
					<p>{{ $user->first_name }} {{ $user->last_name }}</p>
					<p>{{ $user->address1 }}</p>
					@php 
						$addr2 = $user->address2 ?? null;
					@endphp
					@if(!empty($addr2))						
						<p>{{ $addr2 }}
					@endif
					<p>{{$user->city}},{{$user->state}} {{$user->zip_code}}</p>
					<p>{{$user->email}}</p>
					<p>{{$user->phone_number}} - {{$user->phone_type}}</p>
				</div>
			</div>
		@endforeach

        {{ $users->links() }}
		
	</div>
	</div>

    
</x-app-layout>