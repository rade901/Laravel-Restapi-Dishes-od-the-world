<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>{{ config('app.name') }}</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>{{ config('app.name') }}</h1>
        <p>Add new Dish</p>
        <form action="dishes" method="POST">
          @csrf
          <div class="mb-5">
            <label class="form-label">Dish title</label>
            <input type="text" name="title" class="form-control" placeholder="Dish title">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>


              @foreach($category as $cat)
              <option value="{{$cat->id}}">{{$cat->title}}</option>
              @endforeach
            </select>
          

        </form>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <h2>Dish Ingredients</h2>
      <form action="dish_ingredient" method="post">
            @csrf
            <div class="mb-5">
              <label class="form-label">dish #</label>
              <input type="number" name="dish_id" class="form-control" placeholder="dish">
              <label class="form-label">Ingredient #</label>
              <input type="number" name="ingredient_id" class="form-control" placeholder="Ingredients id">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
           </form>
    </div>

    <div class="col-md-4">
      <h2>Ingredients</h2>
      <p>Add new ingredient</p>

      <form action="ingredient" method="POST">
        @csrf
        <div class="mb-5">
          <label class="form-label">Ingredient title</label>
          <input type="text" name="title" class="form-control" placeholder="Ingredient title">
          <label class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control" placeholder="slug">

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
    <div class="col-md-4">
      <h2>Categories</h2>
      <p>Add new Category</p>

      <form action="categories" method="POST">
        @csrf
        <div class="mb-5">
          <label class="form-label">Category title</label>
          <input type="text" name="title" class="form-control" placeholder="Category title">
          <label class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control" placeholder="slug">

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Category</th>
          <th scope="col">Ingredient</th>
          <th scope="col">Created</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <p>Full Dish</p>
      <tbody>
        @foreach($dish as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->title}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->category->title}}</td>
          
          <td>
           @foreach($DiIn as $dishIngredient)
           @foreach($ingredients as $ingredient)
           @if ($dishIngredient->dish_id == $item->id && $dishIngredient->ingredient_id == $ingredient->id)
           {{$ingredient->title}}<br>
            @endif
           @endforeach
            @endforeach
            <td>{{$item->created_at->diffForHumans()}}</td>
          <td>

            <form action="dishes/{{$item->id}}" method="POST">
              @csrf

              <button type="submit" class="btn btn-danger">Delete</button>

            </form>
          </td>
         
        </tr>
        @endforeach

      </tbody>
    </table>
    {{ $dish->links() }}

    <h2>Ingredients</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title of Ingredient</th>

          <th scope="col">slug</th>
        </tr>
      </thead>
      <tbody>
        @foreach($ingredients as $ing)

        <tr>
          <th scope="row">{{$ing->id}}</th>
          <td>{{$ing->title}}</td>
          <td>{{$ing->slug}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
    {{ $ingredients->links() }}
    <h2>Categories</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title of Categories</th>
          <th scope="col">slug</th>
        </tr>
      </thead>
      <tbody>
        @foreach($category as $cat)

        <tr>
          <th scope="row">{{$cat->id}}</th>
          <td>{{$cat->title}}</td>
          <td>{{$cat->slug}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
    {{ $category->links() }}

  </div>
</body>

</html>