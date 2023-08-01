


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('home/aseets/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('home/aseets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('home/aseets/css/style.css')}}">
</head>
<body>

@php

$themes = App\Models\theme::find(1);
$social = json_decode($themes -> social, false);
@endphp


    <div class="container">
        <div class="row">
            <div class="col-md-4 left-part">
                <div class="top-pp text-center">
                         @if ($themes ->photo === 'photo.JPG')
								<img style="width:180px; height:190px;" src="{{ url('home/aseets/img/photo.JPG') }}" alt="">
						@else
								<img style="width:180px; height:190px;" src="{{ url('home/aseets/img/' . $themes -> photo) }}" alt="">
						@endif
                </div>
                <div class="contact">
                    <h3>contact</h3>
                    <div class=" social_link">
                        <div class="social_button text-left">					
                            <ul>
                                <li><a href="{{ $social -> fb }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $social -> din }}"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ $social -> git }}"><i class="fab fa-github"></i></a></li>
                                <li><a href="{{ $social -> mail }}"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i> {{ $themes -> address}}</p>
                        <p><i class="fas fa-envelope"></i> {{ $themes -> email}}</p>
                        <p><i class="fas fa-mobile"></i> 0{{ $themes -> cell}}</p>
                    </div>
                </div>
                <div class="contact skill">
                    <h3>Skills summary</h3>
                    <div>
                        <ul>
                            <li><a href=""></a>gg</li>
                            <li><a href=""></a>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem quaerat, voluptatibus mollitia fugit, consequuntur qui sed ab tempore quam ad numquam. Temporibus aliquam iste atque quis soluta! Laboriosam, modi alias?</li>
                            <li><a href=""></a>gg</li>
                            <li><a href=""></a>gg</li>
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <h3>hobee</h3>
                    <div class="skill">
                        <ul>
                            <li><a href=""></a>gg</li>
                            <li><a href=""></a>ll</li>
                            <li><a href=""></a>gg</li>
                            <li><a href=""></a>gg</li>
                        </ul>
                    </div>
                </div>
              
            </div>
            <div class="col-md-8 right-part">
                <div class="personal">
                    <h1>md nayan islam</h1>
                    <h3>Laravel developer</h3>
                    <h2>personal profile</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, quaerat! Quibusdam necessitatibus quaerat sequi voluptates quidem facilis exercitationem, blanditiis sed, minima possimus vero dolore excepturi suscipit placeat optio saepe, repudiandae error nobis. Natus, non maxime. Voluptate nihil laboriosam eum provident officiis veniam nisi, cum voluptatem vel. Qui voluptatum accusantium debitis.</p>
              
              </div>      
              <div class="edu">
                    <h2>education</h2>
                    @foreach ($edus as $edu )
                        <div>
                            <h3>{{ $edu -> ins}}</h3>
                            <h4>{{ $edu -> dept}} | {{ $edu -> date}}</h4>
                            <h6>{{ $edu -> cgpa}}</h6>
                        </div>
                    @endforeach
                 
                </div>
               <div class="cource">
                    <h2>certification</h2>
                    
                 
                    <div>
                        @foreach ($skill as $skills)
                        <h3>{{ $skills -> name}}</h3>
                            <h5>{{ $skills -> title}}| {{ $skills -> date}} - {{ $skills -> dates}}</h5>

                                 @forelse (json_decode($skills -> skills) as $kaj) 
                                    <p style="display:inline-block;">{{ $kaj }},</p>
                                @empty
                             
                                @endforelse
            
                        @endforeach
                
                    </div>
               </div>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>