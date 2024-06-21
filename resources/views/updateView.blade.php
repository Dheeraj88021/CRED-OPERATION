@extends('welcome')
@section('content')
<style>

    /* little bit style to te update product details */

    .c{
        position: absolute;
        top:160%;
        left:32%;
        border-radius:20px;
        color:lightblue;
        background-image: linear-gradient(
          45deg,
          #800080 20%,
          #e95557 46%,
          #ff8c00 100%
        );
 
        font-size:20px;
    }
    .cb{
        margin-left:155px; 
    }
    @media screen and (max-width:480px) {
        .c{
            left:21%;


        }
        .cb{
            margin-left:28%;
        }
    }
    </style>


    /* this code is update the product details */

    <div class="c col-md-4 m-auto border mt-11 p-2 border-info">
    <h2 class="text-center text-warning fs-4 mt-3">Update Product Details</h2>
    <form action="updatedata" method="get">
        <div class="mb-4">
            <label for="">Product Name</label>
            <input type="text" name="name" required value="{{$pname}}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" name="price" required value="{{$pprice}}" class="form-control">
        </div>
        <br>
        <input type="hidden" name="id" value="{{$pid}}">

        <button type="submit" class="cb btn btn-outline-warning rounded-pill">Update's</button>


    </form>
</div>
@endsection
