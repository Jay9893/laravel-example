<div>
<form method="POST" action="{{route('data')}}">
    @csrf
    <input type="text" name="title" placeholder="enter message">
    <button type="submit" value="submit">submit</button>
</form>
</div>