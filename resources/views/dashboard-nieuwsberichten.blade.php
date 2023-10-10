@extends('layouts.dashboard')
@section('content')
    <div class="flex lg:flex-row flex-col justify-between items-center">
        <h1 class="text-4xl font-extrabold">Nieuwsberichten</h1>
        <a class="bg-color-primary mt-8 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 py-4 px-8 hover:text-black" href="{{ URL::to('dashboard-nieuwsberichten/create') }}">Toevoegen</a>
    </div>
    <div class="small-padding">
        <table>
            <tr>
                <th></th>
                <th></th>
                <th>Titel</th>
                <th>Content</th>
                <th>Datum</th>
            </tr>
            @foreach($nieuwsberichten as $key => $value)
                <tr>
                    <td style="width: 40px;"><form method='POST' action="{{ route('dashboard-nieuwsberichten.destroy', $value->id ) }}">@csrf @method('DELETE')<button value="submit" class="image-hover-green"><img style="height: 20px;" src="{{URL::asset('/img/close.png')}}" /></button></form></td>
                    <td style="width: 40px;"><a class="image-hover-green" href="{{ URL::to('dashboard-nieuwsberichten/' . $value->id . '/edit') }}"><img style="height: 20px; margin-bottom: 5px;" src="{{URL::asset('/img/edit.png')}}" /></a></td>
                    <td>{{ $value->titel }}</td>
                    <td>{{ $value->content }}</td>
                    <td>{{ $value->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
