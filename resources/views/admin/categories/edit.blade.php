@extends('layouts.admin')
@section('content')
   <div class="py-3">
    <form action="{{url('categories/updateC/'.$category->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>

        <div class="mb-3">
            <input type="submit" value="حفظ" class="btn btn-info">
        </div>
    </form>
   </div>
@endsection
