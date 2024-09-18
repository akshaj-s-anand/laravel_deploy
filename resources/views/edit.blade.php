<!-- edit.blade.php -->
<form action="{{ route('table_name.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $item->name }}" placeholder="Name">
    <textarea name="description" placeholder="Description">{{ $item->description }}</textarea>
    <button type="submit">Update</button>
</form>
