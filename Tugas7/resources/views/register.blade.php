@extends('master')
@section('tittle')
Sanbercode
@endsection
@section('content')

    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>

    <form action="/welcome" method="post">
        @csrf
        <label>First name: </label><br>
        <input type="text" name="fname"><br><br>

        <label>Last name:</label><br>
        <input type="text" name="lname"><br><br>

        <label>Gender:</label><br>
        <input type="Radio" name="Gender"> Male <br>
        <input type="Radio" name="Gender"> Female <br>
        <input type="Radio" name="Gender"> Other <br><br>

        <label>Nationality:</label><br>
        <select name="Nationality" id="">
            <option value="">Indonesian</option>
            <option value="">Malaysia</option>
            <option value="">Spanyol</option>
            <option value="">Germany</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="Language_Spoken"> Bahasa Indonesia <br>
        <input type="checkbox" name="Language_Spoken"> Bahasa Inggris <br>
        <input type="checkbox" name="Language_Spoken"> Other <br><br>

        <label>Bio:</label> <br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea> <br><br>


    <button type="submit" value="welcome"> Sign Up </button>

    </form>

    @endsection
    