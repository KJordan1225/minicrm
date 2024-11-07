<!DOCTYPE html>
<html>
<head>
    <title>Gamma Alpha Chapter Directory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <style>
        .row {
            display: flex;
            justify-content: space-around;
        }

        tr.spaceUnder>td {
            padding-bottom: 2em;
        }
    </style>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>

    <table class="table table-bordered">	
        @foreach($users as $user)
        @php 
            $image = public_path('storage/images/'.$user->image_path)
        @endphp
        <tr style="margin-bottom: 50px;" class="spaceUnder">
            <td>
                <div style="margin-right: 25px;">
                    <img src="{{ $image }}" alt="test image" width="100" height="100" />
                </div>                
            </td>
            <td>
                {{$user->last_name}}, {{$user->first_name}}
                </br>{{$user->address1}}
                </br>{{$user->city}}, {{$user->state}} {{$user->zip_code}}
                </br>{{$user->phone_number}} - {{$user->phone_type}}
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
