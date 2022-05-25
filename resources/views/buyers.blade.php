<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
<body>
<h1>Filters:</h1>
<form method="get">
    <div>
        <label>
            Name and surname:
            <input type="text" name="name" placeholder="First name and last name"/>
        </label>
    </div>
    <div>
        <label>
            Phone:
            <input type="tel" name="phone_number" placeholder="8-999-731-88-38"/>
        </label>
    </div>
    <div>
        <label>
            E-mail:
            <input type="email" name="email" placeholder="sergey.com"/>
        </label>
    </div>
    <div>
        <label>
            Is blocked?
            <select name="is_blocked">
                <option value="null">No selection</option>
                <option value="true">Is blocked</option>
                <option value="false">Is not blocked</option>
            </select>
        </label>
    </div>
    <div>
        <input type="submit" value="Filter"/>
    </div>
</form>
<h1>Users info:</h1>
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
    @foreach($buyers as $buyer)
        <tr>
            <td>
                <a href="{{route('buyerInfo', ['id' => $buyer->id])}}">
                    {{$buyer->id}}
                </a>
            </td>
            <td>
                {{$buyer->name." ".$buyer->surname}}
            </td>
            <td>{{$buyer->phone_number}}</td>
            <td>{{$buyer->email}}</td>
            <td>
                @if ($buyer->is_blocked)
                    blocked
                @else
                    not blocked
                @endif
            </td>
        </tr>
    @endforeach
</table>
{{$buyers->links('pagination::bootstrap-4')}}
</body>
</html>
