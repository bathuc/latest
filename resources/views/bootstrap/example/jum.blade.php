@extends('layouts.index')

@section('body')
    <div class="container-fluid bg-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="text-white">Project Name</span>
            <div class="login-bar">
                <form id="frmForm" method="post">
                    @csrf
                    <div class="form-group row my-2">
                        <input id="email" name="email" type="text" class="form-control col-4 mr-2" placeholder="Email">
                        <input id="password" name="password" type="password" class="form-control col-4 mr-2" placeholder="Password">
                        <button type="submit" class="btn btn-success col-2" >Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #eee">
        <div class="container">
            <h1 class="pt-5" style="font-size: 63px">Hello, world!</h1>
            <p class="h5 pb-3" style="line-height: 30px">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <button type="button" class="btn btn-primary btn-lg">Learn More <i class="fa fa-angle-double-right"></i></button>
            <div class="pb-5"></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mt-4">
                    <h3>Heading</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <button type="button" class="btn btn-outline-dark">View detail <i class="fa fa-angle-double-right"></i></button>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <h3>Heading</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <button type="button" class="btn btn-outline-dark">View detail <i class="fa fa-angle-double-right"></i></button>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <h3>Heading</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    <button type="button" class="btn btn-outline-dark">View detail <i class="fa fa-angle-double-right"></i></button>
                </div>
            </div>
            <div class="pt-4 border-bottom"></div>
            <div class="py-4">© 2016 Company, Inc.</div>
        </div>
    </div>
@endsection