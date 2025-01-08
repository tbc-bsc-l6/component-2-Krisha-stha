<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
      .title{
        color:white;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 25px;
      }

      .raged{
        color:white;
        margin-left: -175px;
      }
    </style>
  </head>
  <body>
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper"  style="margin-top: 100px; margin-left: 0; padding: 0 15px; width: 300%;">
          <h1 class="title">Add Product</h1>
       
          <div style="padding: 100px;" class="raged">
            <label>Product title</label>
            <input type="text" name="title" placeholder="Give a product title" >
          </div>

          <div style="padding: 100px;" class="raged">
            <label>Price</label>
            <input type="number" name="price" placeholder="Give price">
          </div>

          <div style="padding: 100px; " class="raged">
            <label>Description</label>
            <input type="text" name="des" placeholder="Give a description">
          </div>

          <div style="padding: 100px; " class="raged">
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Quantity">
          </div>

          <div style="padding: 120px; " class="raged">
            <input type="file" name="file">
          </div>

          
        <div style="padding: 20px; margin-top:10%; margin: left -500px;;" class="raged">
            <input type="submit">
          </div>

        </div>
        @include('admin.script')
  </body>
</html>
