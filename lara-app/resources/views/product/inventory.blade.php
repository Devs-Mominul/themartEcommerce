@extends('layouts.main')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">Inventory</div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Action</th>

                </tr>
                @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->rel_to_color->color_name }}</td>
                    <td>{{ $inventory->rel_to_size->size_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>
                        <div class="d-flex">
                            <a  href="" class="shadow btn btn-danger btn-xs sharp del_btn"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </div>
                    </td>
                </tr>

                @endforeach


            </table>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            Add Inventory
        </div>
        <div class="card-body">
            <form action="{{ route('inventory.store',$product->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name:</label>
                    <input type="text" disabled  value="{{ $product->product_name }}" name="product_name" id="product_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <select name="color_id" id="color" class="form-control">
                        <option value="">Select Color</option>
                        @foreach ($color as $color)
                        <option value="{{ $color->id }}">{{ $color->color_name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Size</label>
                    <select name="size_id" id="col" class="form-control">
                        <option value="">select size</option>
                        @foreach (App\Models\Size::where('category_id',$product->category_id)->get() as $size)
                        <option value="{{ $size->id }}">{{ $size->size_name }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity_name" class="form-label">Quantity Name:</label>
                    <input type="text"   name="quantity" id="product_n" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
