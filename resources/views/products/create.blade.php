<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <form action="/products/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container pt-3">
            <h1>{{ __('Create Product') }}</h1>
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">{{ __('Price') }}</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
    
            <div class="mb-3">
                <label for="formFile" class="form-label">{{ __('Product Image') }}</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
    
            <div class="mb-3">
                <label for="category_id" class="form-label">{{ __('Category_d') }}</label>
                <input type="number" class="form-control" id="category_id" name="category_id">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
      
      
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>