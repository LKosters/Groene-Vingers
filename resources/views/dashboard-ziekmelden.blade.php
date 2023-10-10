@extends('layouts.dashboard')
@section('content')
    <div class="flex lg:flex-row flex-col justify-between items-center">
        <h1 class="text-4xl font-extrabold">Ziekmelden</h1>
        <a class="bg-color-primary mt-8 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 py-4 px-8 hover:text-black" href="{{ URL::to('dashboard-ziekmelden/create') }}">Toevoegen</a>
    </div>
    <div class="small-padding">
        <table>
            <tr>
                <th></th>
                <th></th>
                <th>Reden</th>
                <th>Datum van</th>
                <th>Datum tot</th>
            </tr>
            @foreach($ziekmelden as $key => $value)
                <tr>
                    <td style="width: 40px;"><form method='POST' action="{{ route('dashboard-ziekmelden.destroy', $value->id ) }}">@csrf @method('DELETE')<button value="submit" class="image-hover-green"><img style="height: 20px;" src="{{URL::asset('/img/close.png')}}" /></button></form></td>
                    <td style="width: 40px;"><a class="image-hover-green" href="{{ URL::to('dashboard-ziekmelden/' . $value->id . '/edit') }}"><img style="height: 20px; margin-bottom: 5px;" src="{{URL::asset('/img/edit.png')}}" /></a></td>
                    <td>{{ $value->reden }}</td>
                    <td>{{ $value->datum_van }}</td>
                    <td>{{ $value->datum_tot }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
