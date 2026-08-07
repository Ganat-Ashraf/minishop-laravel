@extends('layout.master')

@section('content')
    <form action="/admin/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="product name" required>
    <input type="number" step="0.01" name="price" placeholder="السعر" required>
    <input type="text" name="category" placeholder="التصنيف مثل LIFESTYLE" required>
    <input type="text" name="description" placeholder="الوصف" required>
    <input type="text" name="image" placeholder="اسم الصورة مثل product-1.png" required>
    
    <button type="submit">إضافة المنتج</button>
</form>

@endsection