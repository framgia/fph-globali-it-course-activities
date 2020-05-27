@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3 class="mb-4">
                Dashboard
            </h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100%" alt="User Image">
                </div>
                <div class="col-md-8">
                    <h4>
                        {{ Auth::user()->name }}
                    </h4>
                    <a href="#">Learned 20 Words</a>
                    <br>

                    <a href="#">Learned 5 Lessons</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Activities</h1>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="media d-flex align-items-center mb-4">
                          <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" class="mr-3" alt="...">
                          <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="#">You</a> learned Basic 500</h5>
                            2 days ago
                          </div>
                        </li>
                        <li class="media d-flex align-items-center mb-4">
                          <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" class="mr-3" alt="...">
                          <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="#">You</a> learned Basic 500</h5>
                            2 days ago
                          </div>
                        </li>
                        <li class="media d-flex align-items-center">
                          <img src="https://t4.ftcdn.net/jpg/00/64/67/63/240_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="100" class="mr-3" alt="...">
                          <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="#">You</a> learned Basic 500</h5>
                            2 days ago
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
