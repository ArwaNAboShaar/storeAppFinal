
@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="container mt-5">
            <div class="btn-group mr-2 ">
                <a href="{{ url('products/create') }}" class="btn btn-success  px-3 mb-3">إضافة منتج جديد</a>
            </div>

            <form action="{{url('products')}}" method="GETT" class="d-flex">
                @csrf
                <label for="categoryFormControlTextarea1" class="ml-3">اختر الصنف</label>

                <select class="form-control ml-3" name="category_id" id="category_id">
                    <option value="">كل</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{request('category_id')== $category->id?'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
                <input type="submit" value="فلترة" class="btn btn-outline-transparent" style="color: #28a745;">
            </form> </div>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <h1 class="h2">المنتجات</h1>

        </div>

        <div class="btn-toolbar mb-2 mb-md-0">

            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">السعر</th>
                        <th scope="col">الكمية</th>
                        <th scope="col">الاحداث</th>
                    </tr>
                    @foreach ($products as $product)

                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category->name }}</td>
                            {{-- <td>{{  DB::table('categories')->where(column: 'id', operator: $product->category_id)->first()->name}}</td> --}}
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{url('products/edit/' . $product->id) }}" class="btn btn-info">تعديل</a>
                                <a href="{{url('products/delete/' . $product->id) }}" class="btn btn-danger">حذف</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->appends(['category_id'=>request()->category_id])->links()}}
        </div>
    </main>
@endsection
