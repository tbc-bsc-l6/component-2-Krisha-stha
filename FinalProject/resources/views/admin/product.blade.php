
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
      .title {
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 25px;
      }

      .raged {
        color: white;
        margin-left: -175px;
      }

      label {
        display: inline-block;
        width: 200px;
      }
    </style>
  </head>
  <body>
    @include('admin.sidebar')

    <div style="padding-top:2%; padding-bottom:2%; margin-top:2%; margin-bottom:2%;">
        @if(session()->has('message'))
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert" style="height:10%; width:50%;"> -->
        <div class="alert alert-success alert-dismissible fade show p-2 m-1" role="alert" style="display: inline-block; min-width: 0; max-width: fit-content; word-wrap: break-word;">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            
        </div>
        @endif
      </div>
    <div class="container-fluid page-body-wrapper" >
    
      <h1 class="title" style="margin-left:400px; padding-top:100px;">Add Product</h1>
      
      <!-- Form Block -->
      <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="padding-top: 100px;">
        <div style="padding-top:60px">
          <div style="padding: 10px;" class="raged">
            <label>Product title</label>
            <input type="text" style="color: black;" name="title" placeholder="Give a product title">
          </div>

          <div style="padding: 10px;" class="raged">
            <label>Price</label>
            <input type="number" style="color: black;" name="price" placeholder="Give price">
          </div>

          <div style="padding: 10px;" class="raged">
            <label>Description</label>
            <input type="text" style="color: black;" name="des" placeholder="Give a description">
          </div>

          <div style="padding: 10px;" class="raged">
            <label>Quantity</label>
            <input type="text" style="color: black;" name="quantity" placeholder="Quantity">
          </div>

          <div style="padding: 12px;" class="raged">
            <input type="file" name="file">
          </div>

          <div style="padding: 20px; margin-top:10%; margin-left: -200px;" class="raged">
            <input class="btn btn-success" type="submit">
          </div>
        </div>
        </div>
      </form>
    </div>

    @include('admin.navbar')

    @include('admin.script')
  </body>
</html>
