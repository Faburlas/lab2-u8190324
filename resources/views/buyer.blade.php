<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>buyer {{$buyer->id}}</title>
</head>
<body>
<h1>User info:</h1>
<table>
    <tr>
        <td>
            Id
        </td>
        <td>
            Name
        </td>
        <td>
            Phone
        </td>
        <td>
            E-mail
        </td>
        <td>
            Is blocked?
        </td>
    </tr>
    <tr>
        <td>{{$buyer->id}}</td>
        <td>
            {{$buyer->name." ".$buyer->surname}}
        </td>
        <td>{{$buyer->phone_number}}</td>
        <td>{{$buyer->email}}</td>
        <td>
            @if ($buyer->blocked)
                blocked
            @else
                not blocked
            @endif
        </td>
    </tr>
</table>
@if($buyer->addresses != null)
    <h2>Addresses:</h2>
    <ol>
        @foreach($buyer->addresses as $address)
            <li>
                <div>
                    Address: {{$address->address}}
                </div>
                <div>
                    City: {{$address->city}}
                </div>
                <div>
                    Street: {{$address->street}}
                </div>
                <div>
                    House: {{$address->house}}
                </div>
                <div>
                    Floor: {{$address->floor}}
                </div>
                <div>
                    Flat: {{$address->flat}}
                </div>
                <div>
                    Code: {{$address->code}}
                </div>
            </li>
        @endforeach
    </ol>
@endif
</body>
</html>
