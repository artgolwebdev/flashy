
@extends('layout')

@section('content')

    <div class="header">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-image-wrapper" style="background-image:url('{{$profile_data['profile']}}')">    
                </div>
                
                <div class="d-flex align-items-start justify-content-start profile-data-holder mb-3">
                    <img class="img img-logo" src="{{asset('img/logo.png')}}">
                    <div class="d-flex flex-column mt-0">
                        <p class="my-0"><span class="text-capitalize bluish">Team</span></p>
                        <p><span class="text-capitalize blackish title">{{$profile_data['team']}}</span></p>
                    </div>
                </div>

                <p><span class="bluish">Role in the team</span> <br> <span class="text-capitalize blackish title">{{$profile_data['role']}}</span></p>

                <p><span class="bluish">Department or company</span><br> <span class="blackish">{{ $profile_data['department']}}</span> </p>
         
            </div>
    
            <div class="col-sm-9 mt-3">
                <h1 class="full-name">{{$profile_data['fullname']}}</h1>
                <div class="row">
                    <div class="col-md-4">
                        <!-- member since -->
                        <p><span class="bluish"><span class="text-capitalize">{{$profile_data['team']}}</span> member since</span> <br> <span class="blackish">{{ date('F Y', $profile_data['member_since']) }}</span></p>
                        <!-- working since -->
                        <p><span class="bluish">Working in <span class="text-capitalize">{{$profile_data['team']}}</span> since </span> <br> {{ date('F Y', $profile_data['member_since']) }}</p>
                        <!-- Favourite [thing] ? --> 
                        <p><span class="bluish">Favourite thing </span><br> <span class="blackish">Glassmorphism</span></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Super Power -->
                        <p><span class="bluish">My superpower</span> <br> <span class="blackish text-capitalize">{{ $profile_data['role'] }}</span></p>
                        <!-- Good At -->
                        <p><span class="bluish">I want to be goot at </span><br><span class="blackish"> {{$profile_data['good_at']}}</span><p>
                        <!-- Another favourite .... -->
                        <p><span class="bluish">Favourite thing to do at work</span> <br><span class="blackish"> Making nice prototypes</span></p>
                    </div>
                    <div class="col-md-4">
                        <p><span class="bluish">Background / experience </span><br> 
                            @if (is_array($profile_data['background']) && isset($profile_data['background'][0]))
                                @php 
                                     $background = explode(",",$profile_data['background'][0]);
                                @endphp 
                                @foreach($background as $bg)
                                    {{ $bg }}<br>
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <footer class="footer mt-auto py-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-end">
                        <span class="social"><i class="bi bi-globe"></i>&nbsp;&nbsp;
                            <span class="hidden-on-sm">{{\Str::slug($profile_data['fullname'])}}.com</span>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-linkedin"></i>&nbsp;&nbsp;
                            <span class="hidden-on-sm">linkedin.com/{{\Str::slug($profile_data['fullname'])}}</span>&nbsp;&nbsp;&nbsp;
                            <i class="bi bi-instagram"></i>&nbsp;&nbsp;
                            <span class="hidden-on-sm">instagram.com/{{\Str::slug($profile_data['fullname'])}}</span>&nbsp;&nbsp;&nbsp;
                        </span>
                    </p>
                </div>
            </div>
        </div>
      </footer>


@endsection

