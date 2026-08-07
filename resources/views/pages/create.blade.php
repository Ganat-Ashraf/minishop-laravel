@extends('layout.master')

@section('content')
    <form action="/admin/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="اسم المنتج" required>
    <input type="number" name="price" placeholder="السعر" required>
    <input type="text" name="image" placeholder="اسم الصورة مثل choose-1.jpg" required>
    <button type="submit">إضافة المنتج</button>
</form>

@endsection