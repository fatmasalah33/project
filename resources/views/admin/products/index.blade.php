<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/fontawesome.all.css')}}">
    <style>
    .bg-pink {
        background-color: #f2acbe !important;
    }

    .price {
        color: #0d0d0d;
        font-size: 14px;
        font-weight: 600;
    }

    .title {
        font-size: 16px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 7px;
    }

    .title a {
        display: block;
        /* max-height:1rem; */
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        color: #282828;
        transition: all 0.3s ease 0s;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -ms-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        font-weight: normal !important;
        font-size: 16px !important;
        cursor: pointer;

    }

    .title a:hover {
        color: black;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="m-0 text-dark"> {{$cat[0]->name}}</h1>
        <div class="row">

            <div class="bg-pink rounded-top p-3 pb-0">

                <h4>Oversize</h4>
            </div>
            @foreach($productsOversize as $product)

            <div class="col-xlg-3 col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("storage/uploads/products/$product->img")}}" style="width:280px; height:280px;"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class=" title">
                            <a> {{$product->name}} </a>
                        </h5>
                        <span class="card-text price">
                            EGP {{$product->price}}

                        </span>
                        <a href="{{url("product/delete/$product->id")}}" class="float-end">
                            <i class=' fas fa-solid fa-trash text-danger'></i>
                        </a>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            @endforeach
            <div>

            </div>
        </div>
        <!-- /.row -->

        <div class="row" class="card-block">
            <div class="bg-pink rounded-top p-3 pb-0">

                <h4>Formal</h4>
            </div>
            @foreach($productsFormal as $product)


            <div class="col-xlg-3 col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("storage/uploads/products/$product->img")}}" style="" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class=" title">
                            <a> {{$product->name}} </a>
                        </h5>
                        <span class="card-text price">
                            EGP {{$product->price}}

                        </span>
                        <a href="{{url("product/delete/$product->id")}}" class="float-end">
                            <i class=' fas fa-solid fa-trash text-danger'></i>
                        </a>

                    </div>


                </div>
            </div>
            @endforeach
            <div>

            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>