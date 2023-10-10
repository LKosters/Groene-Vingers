@extends('layouts.dashboard')
@section('content')
    <form method="POST" action="{{ route('dashboard-nieuwsberichten.update', $nieuwsberichten->id ) }}">
        @method('PUT')
        @csrf
        <div class="flex lg:flex-row flex-col justify-between items-center">
            <h1 class="text-4xl font-extrabold">Nieuwsberichten aanpassen</h1>
            <button class="bg-color-primary mt-8 lg:mt-0 text-lg text-center text-white rounded-2xl ease-in duration-200 py-4 px-8 hover:text-black" value="submit">Update</button>
        </div>
        <div class="small-padding">
                <table>
                    <tr>
                        <th>id</th>
                        <th>Titel</th>
                        <th>Content</th>
                        <th>Datum</th>
                    </tr>
                        <tr>
                            <td style="width: 40px;">{{ $nieuwsberichten->id }}</td>
                            <td><input value="{{ $nieuwsberichten->titel }}" name="titel" type="text" /></td>
                            <td><textarea name="content" >{{ $nieuwsberichten->content }}</textarea></td>
                            <td><input type="date" name="created_at" /></td>
                        </tr>
                </table>
        </div>
    </form>
@endsection
