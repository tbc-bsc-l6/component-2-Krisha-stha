<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
        @include('admin.sidebar')

        <!-- <div class="container-fluid page-body-wrapper" style="margin-top: -400px; margin-left: -400px; padding: 0 15px; width: 300%;"> -->
        <div style="width:700%; padding-bottom:30px;">
          @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:100px; height:10%; width:50%;">
          <!-- <div class="alert alert-success alert-dismissible fade show p-2 m-1" role="alert" style="display: inline-block; min-width: 0; max-width: fit-content; word-wrap: break-word;"> -->
              {{ session()->get('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            
          </div>
          @endif

            <table style="margin-left: 250px;">
                <tr style = "background-color: grey;">
                    <td style="padding-left:50px;">Title</td>
                    <td style="padding-left:50px;">Description</td>
                    <td style="padding-left:50px;">Quantity</td>
                    <td style="padding-left:50px;">Price</td>
                    <td style="padding-left:50px;">Image</td>
                    <td style="padding-left:50px;">Update</td>
                    <td style="padding-left:50px;">Delete</td>

                </tr>

                @foreach($data as $product)

                <div style="margin-top: 100px;">
                <tr style="color: white; text-align: center; height: 40px;">
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td><image height="100" width="100" src="/productimage/{{$product->image}}"></td>

                    <td><a class = "btn btn-primary" href="{{url('updateview',$product->id)}}">Update</td>
                    <td><a class = "btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{url('deleteproduct',$product->id)}}">Delete</td>

                </tr>
                </div>
                @endforeach
            </table>

        </div>

        @include('admin.navbar')

        @include('admin.script')
  </body>
</html>