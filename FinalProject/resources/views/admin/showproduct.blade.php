<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper" style="margin-top: -400px; margin-left: -400px; padding: 0 15px; width: 300%;">
            <table>
                <tr>
                    <td style="padding-left:80px;">Title</td>
                    <td style="padding-left:80px;">Description</td>
                    <td style="padding-left:80px;">Quantity</td>
                    <td style="padding-left:80px;">Price</td>
                    <td style="padding-left:80px;">Image</td>
                </tr>

                <tr style="background-color: black; color: white; text-align: center; height: 40px; position: relative; top: 0;">
                    <td>Title</td>
                    <td>Description</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Image</td>
                </tr>

            </table>

        </div>
        @include('admin.script')
  </body>
</html>