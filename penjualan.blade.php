@extends('layoutProject.main')
@section('content')
    <h2>Penjualan</h2>
    <button type="button" class="btn btn-success">Add</button> 
    <form action="/action_page.php">
      <label for="gsearch">Search Google:</label>
      <input type="search" id="gsearch" name="gsearch">
      <input type="submit" value="test">
    </form>
    
@endsection
