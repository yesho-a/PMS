<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link href="./css/style.css" rel="stylesheet">

    <title>Admin Dashboard</title>
  </head>
  <body>
    <div class="container-full">
      <div class="row">
        <div class="col-md bg-dark" style="height: 100vh" id="aside">
          <!-- sidebar -->
          <aside class="aside d-flex flex-column flex-shrink-0 p-2 text-white">
            <div>
              <div class="float-start p-1">
                <img
                  src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250"
                  alt="User Image"
                  height="60"
                  width="60"
                  class="rounded-circle"
                />
              </div>
              <div class="float-start" id="name">
                <span class="name text-sm"
                  ><strong>Yesho Simon</strong>
                  <br />

                  <i class="fa fa-circle text-success text-sm"> </i
                  ><span class="m-2 text-sm"><b>Online</b></span>
                </span>
              </div>
            </div>
            <hr />
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link text-white pb-1">
                  <i
                    class="fas fa-tachometer-alt text-white"
                    aria-hidden="true"
                  ></i>
                  <span class="side-icon">Dashboard</span>
                </a>
              </li>

              <li>
                <a href="#" class="nav-link text-white"
                  ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="side-icon"> Orders</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white"
                  ><i class="fa fa-shopping-basket" aria-hidden="true"></i>
                  <span class="side-icon" id="pro"> Products</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  <span class="side-icon"> Customers</span>
                </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- sidebar -->
        <div class="col-md-10" id="bod">
          <div class="row">
            <div class="col-md-12 px-0">
              <!-- navbar -->
              <nav
                class="navbar navbar-expand-md navbar-dark bg-dark"
                style="padding-right: 1rem"
                id="nav"
              >
                <span class="p-0" id="tog">
                  <i
                    class="fas fa-bars m-2 p-0"
                    style="color: rgb(255, 255, 255); font-size: 40px"
                  ></i>
                </span>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Link1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link2</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- navbar -->
          <div class="row m-3 bg-dark text-white">
            <div class="col-md-12">
              <p>
                Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Vestibulum tortor quam,
                feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                libero sit amet quam egestas semper. Aenean ultricies mi vitae
                est. Mauris placerat eleifend leo. Quisque sit amet est et
                sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum,
                elit eget tincidunt condimentum, eros ipsum rutrum orci,
                sagittis tempus lacus enim ac dui. Donec non enim in turpis
                pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus
                faucibus, tortor neque egestas augue, eu vulputate magna eros eu
                erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis,
                accumsan porttitor, facilisis luctus, metus
              </p>
            </div>
            <!-- content -->
          </div>

          <!-- content -->
        </div>
      </div>
    </div>
    <footer class="main-footer text-center bg-dark text-light p-2" id="footer">
      <strong
        >Copyright &copy; 2020-2021
        <a href="http://tiliatek.com">TiliaTek Digital Studios</a>.</strong
      >
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
 
    <script src="{{ asset('js/index.js') }}" ></script>
  </body>
</html>
