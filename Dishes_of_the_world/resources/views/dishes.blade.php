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
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
      <div class="col-md-4">
        <h1>Ingredients</h1>
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
        <h1>Categories</h1>
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
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">#category</th>
            <th scope="col">category Title</th>
          </tr>
        </thead>
        <tbody>
          @foreach($dish as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->category_id}}</td>
            @if ($item->category)
            <td>{{$item->category->title}}</td>
            @else
            <td>Dont have Category</td>
            @endif
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
          @foreach($ingredient as $ing)

          <tr>
            <th scope="row">{{$ing->id}}</th>

            <td>{{$ing->title}}</td>

            <td>{{$ing->title}}</td>
            <td>{{$ing->slug}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
      {{ $ingredient->links() }}
     

    </div>
</body>

</html>