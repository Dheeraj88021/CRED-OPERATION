@extends('welcome')
@section('content')

<!-- Button trigger modal -->
 <style>

  /* little bit of styling and also mobile responsive */

  .ceck{
    position:absolute;
    top:160%;
    
    background-image: linear-gradient(
          45deg,
          #800080 20%,
          #e95557 46%,
          #ff8c00 100%
        );
    color:lightblue;
    padding:10px 20px;
    left:32%;
  }
  @media screen and (max-width:480px) {
    .ceck{
      padding:10px;
      left:6%;
    }
    .cecks{
      padding:10px;
      margin-left:-30px;
     
    }
  }
  .cecks{
    position:absolute;
    top:168%;
    left:7%;
  }
  </style>

/* this code is Add the product details */

<center>
<button type="button"  class="ceck btn btn-outline-danger fw-bold fs-5 rounded-pill " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  CRED OPERATIONS &nbsp; &nbsp; &nbsp; &nbsp; Please Add Record
</button>

<!-- Modal -->
<div class="mt-5 modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel">CRUD - OPERATIONS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="insertData" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" placeholder="Enter the Product Name" class="form-control" name="pname" id="">
                </div>            

                <div class="mb-3">
                    <input type="text" placeholder="Enter the Product Price" class="form-control" name="pprice" id="">
                </div>            

                <div class="mb-3">
                    <input type="file" class="form-control" name="image" id="">
                </div>            
                    <button type="submit" class="btn btn-outline-danger mt-3  fw-bold fs-5 rounded-pill">Add Record</button>
            </form>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="cecks container" >
<table class="table mt-5">
    <thead class="bg-danger text-white fw-bold">
        <th>Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th> 
            <th>Update's</th> 
            <th>Delete</th> 



    </thead>
    <tbody class="text-danger bg-light fs-4">
        @foreach($data as $item)
        <tr>
            <form action="updateDelete" method="get">
            <td class="pt-4"><input type="hidden" required name="id" value="{{$item['Id']}}">{{$item['Id']}}
            </td>
            <td class="pt-4"><input type="hidden" required name="name" value="{{$item['PName']}}">
                {{$item['PName']}}
            </td>
            <td class="pt-4"><input type="hidden" required name="price" value="{{$item['PPrice']}}">
                {{$item['PPrice']}}
            </td>
            <td >
                <img src="images/{{$item['PImage']}}" width="100px" height="100px"  alt="">
            </td>
            <td class="pt-4">
                <input type="submit" name="update" value="Update" class="btn btn-outline-danger rounded-pill">
            </td>
            <td class="pt-4">
                <input type="submit" value="Delete" class="btn btn-outline-danger rounded-pill">
            </td>
</form>

        </tr>
    @endforeach
    </tbody>
</table>
<div>
@endsection
