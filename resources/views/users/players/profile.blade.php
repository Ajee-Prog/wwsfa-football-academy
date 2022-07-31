@extends('layouts.app')

@section('content')
<div class="container  bg-warning">
    <a href="{{url('/homee')}}">back to home</a>
    <div class="row bg-primary justify-content-center mt-5 mb-5">

            <h1 class="py-2 px-auto text-warning "> Player-Name Profile</h1>

    </div>

        <div class="row">
            <div class="col-4">
                <div class="card">

                </div>
            </div>
            <div class="col">
                <div class="card">

                </div>
            </div>
        </div>

        <div class="card mb-3" >
            <div class="row g-0">
              <div class="col-md-4">
                <img src="/images/Yusuf-passport-280.jpg" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yusuf title</h5>
    <p class="card-text">
        <div class="row bordered-1 justify-content-center px-2">
            <div class="mx-4 p-1 rounded-circle bg-primary"><a href="#" class="text-light"><i class="bi bi-facebook"></i></a></div>
            <div class="bg-primar"><a href="#" class="text-primary"><i class="bi bi-twitter"></i></a></div>
            <div class="mx-4 p-1 rounded-circle"><a href="#" class="text-secondary"> <i class="bi bi-instagram"></i> </a></div>
            <div class=""><a href="#" class="text-danger"> <i class="bi bi-youtube"></i> </a></div>



        </div>
    </p>
                </div>
              </div>
              <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Player title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold fs-1"><b>Nationality: </b></li>
                        <li class="list-group-item"><b>Position:</b></li>
                        <li class="list-group-item"><b>Height:</b></li>
                        <li class="list-group-item"><b>Weight:</b></li>
                        <li class="list-group-item"><b>Current Team:</b></li>
                        <li class="list-group-item"><b>Birthday:</b></li>
                        <li class="list-group-item"><b>Age:</b></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
              </div>
              <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Session</th>
                        <th scope="col">Team</th>
                        <th scope="col">Goals</th>
                        <th scope="col">Assist</th>
                        <th scope="col">Yellow Card</th>
                        <th scope="col">Red Card</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2012</th>
                        <td>WWSFA</td>
                        <td>50</td>
                        <td>15</td>
                      </tr>
                      <tr>
                        <th scope="row">2013</th>
                        <td>Ajiran Tournament</td>
                        <td>20</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <th scope="row">2014</th>
                        <td colspan="2">Nigeria league</td>
                        <td>10</td>
                      </tr>
                </tbody>
              </table>
            </div>
          </div>

</div>
@endsection

