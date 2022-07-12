<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <title>Create Players </title>
</head>
<body>
    <h1 class="text-center mt-5"> Create Player (Admin)</h1>
    <hr>
    <div class="container justify-content-center">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group m-3 p-2">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control" name="player_image" >
            </div>
            <div class="form-group m-3 p-2">
                <label for="player_title">Player Title</label>
                <input type="text" class="form-control" name="playerTitle" placeholder="Player Title">
            </div>
            <div class="form-group m-3 p-2">
                <label for="player_title">Player Position</label>
                <input type="text" class="form-control" name="playerTitle" placeholder="Player Position">
            </div>
            <div class="form-group m-3 p-2">
                <label for="player_title">Role</label>
                <input type="text" class="form-control" name="playerTitle" placeholder="Role">
            </div>
            <div class="form-group m-3 p-2">
                <label for="player_title">Player Number</label>
                <input type="text" class="form-control" name="playerTitle" placeholder="Player Number">
            </div>
            <button class="btn btn-success" type="submit" value="submit">Add Player</button>
        </form>
    </div>

</body>
</html>
