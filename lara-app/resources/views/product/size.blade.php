@extends('layouts.main')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">Add Color List</div>
        <div class="card-body">
          <div class="row">
          @foreach ($categories as $category)
          <div class="col-lg-6">
            <div class="card">
                <div class="card-header">{{ $category->category_name }}</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category</th>

                            <th>Action</th>
                        </tr>
                        @foreach (App\Models\Size::where('category_id',$category->id)->get() as $size)
                        <tr>
                           <td>{{  $size->size_name}}</td>
                           <td>
                            <a  href="{{ route('size.delete',$size->id) }}" class="shadow btn btn-danger btn-xs sharp del_btn"><i class="fa fa-trash"></i></a></td>
                        </tr>

                        @endforeach



                    </table>
                </div>
            </div>

        </div>

          @endforeach
          </div>
        </div>
    </div>

</div>
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            Add color varition
        </div>
        <div class="card-body">
            <form action="{{ route('size.post') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="color_nae">Size Name:</label>
                    <input type="text" name="size_name" id="r_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="color_nae">Category Id:</label>
                    <select name="category_id" id="" class="form-control">
                       @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->category_name }}</option>

                       @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
