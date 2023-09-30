@extends('layouts.app')

@section('content')

  <!-- Start nav  -->
    <section id="home">
        <nav>
            <div class="container-fluid nav-bg" >
              <div class="container nav-items" id="nav-items">
                  <div class=" nav-item">
                      <div class="nav logo">
                        <a href="/"> <h2 class="logo-title">M<span>o</span>th</h2></a>
                      </div>
                      <ul class="nav-lists" id="nav-lists">
                          <li class="nav-li active"> <a href="#home" class="active">Home</a></li>
                          <li class="nav-li"><a href="#about">About</a> </li>
                          <li class="nav-li"><a href="#contact">Contact</a></li>
                          <li class="nav-li"><a href="#project">Project</a></li>
                      </ul>
                  </div>
                  <div class=" btn-menu" id="btn-menu">
                   <span class="menu-top"></span>
                   <span class="menu-middle"></span>
                   <span class="menu-bottom"></span>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="home-view">
                  <div class="home-left">
                     <div class="header-slide">
                      <h2 class="text-white mb-3 wow slideInLeft title-slide" >Hello I'm </h2>
                       <div class="text-scroll">
                          <div class="slide-title " data-wow-duration="1s">
                            @foreach ($slidetitles as $slidetitle)
                              <div class="span-name title1">{{$slidetitle->name}}</div> 
                              <div class="span-name title2">{{$slidetitle->position}}</div> 
                            
                            @endforeach
                             
                          </div>
                       </div>
                     </div>
                        {{-- <div class="cv wow slideInLeft" data-wow-duration="2s">
                            <a href="/resume" class="btn-download " > RESUME</a>
                        </div> --}}
                      <div class="socail-meadia wow slideInLeft" data-wow-duration="3s">
                          <div class="facebook">
                           <a href="https://www.facebook.com/jar.khab?mibextid=LQQJ4d"><i class="fa-brands fa-facebook-f"></i></a>
                          </div>
                          <div class="facebook">
                                <a href="https://t.me/himmoth">   <i class="fa-brands fa-telegram"></i></a>
                          </div>
                          <div class="facebook">
                                <a href="https://github.com/himmoth"><i class="fa-brands fa-github"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </nav>
    </section>
   <div class="to-top"><div class="icon-top"><i class="fa-solid fa-arrow-up"></i></div></div>
  <!-- End nav  -->
    <section id="about">
        <div class="container">
            <h2 class="title mb-4 " >ABOUT</h2>
            <div class="box-about">
                <div class="about-left">
                    @foreach ($abouts as $about)
                
                    <div class="person-img ">
                        <img src="{{asset('storage/'.$about->bgimg)}}" alt="">
                        <div class="person-text">
            
                            <div class="about-header mb-3">
                             
                             <div class="box personal-data">
                                <div class="box img-personal">
                                    <img src="{{asset('storage/'.$about->img)}}" style="height:80px; width:80px; border-radius:50%; border:3px solid #fff;" alt="">
                                </div>
                                <div class="box data">
                                    <h3 class="">{{$about->name}}</h3>
                                    <h5>Junior Web Developer</h5>
                                </div>
                             </div>
                             <div class="dots">
                                <div class="dot green"></div>
                                <div class="dot orange"></div>
                                <div class="dot blue"></div>

                            </div>
                               
                            </div>
                            <p class="description">{{$about->description}}</p>

                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="about-right ">
                    <h2 class="skills md-mb-4 mb-3" >SKILLS</h2>
                    <ul class="btn-skills mb-4"  id="btn-skills">
                        @foreach ($skills as $key => $skill)
                        <li class="btn-skill {{ $key == 0 ? 'skill-active' : ''}}" data-filter="{{$skill->slug}}">{{$skill->name}}</li>
                        @endforeach
                                            
                    </ul>
                    <div class="about-skills" >
                    
                        @foreach ($skills as $key => $skill)

                        <div class="show-skill {{$skill->slug}}">
                            @foreach ($languages as $language)
                                @if ($skill->id == $language->skill_id)
                                <p class="title-skill">{{$language->title}}</p>
                                <div class="progress mb-3">
                                    <div class="progress-bar new-progress" role="progressbar"
                                    style="width: {{$language->percent}}%" 
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>

                                @endif
                             
                            @endforeach
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">

          

            <!--Section heading-->
            <div class="title-border-bottom">
                <h2 class="title  mb-5 text-center " >CONTACT</h2>
            </div>
              {{-- fixed alert contact message  --}}
                        @if(Session::has('message'))
                        <div class="alert-body" id="alert-body">
                            <div class="show-message-alert">
                                <div class="box-cancel">
                                    <button class="btn-cancel-alert" id="bnt-hide-alert">X</button>
                                </div>
                                <p class=" text-center text-success h5">{{Session::get('message')}}</p>
                            </div>
                        </div>

                     @endif
            <div class="row">
                <div class="col-md-6 col-12  m-auto">
        
                    <form action="{{route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-white">Name</label>
                            <input type="text" class="form-control"   name="name" id="name" required>
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                        <div class="mb-3">
                          <label for="email" class="form-label text-white">Email address</label>
                          <input type="email"  name="email" class="form-control" id="email" required>
                          @error('email')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label text-white">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                            @error('subject')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="message" class="form-label text-white">Message</label>
                          <textarea name="message" required  name="message" id="message" class="form-control" rows="3" >
                          </textarea>
                          @error('message')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                        <button type="submit" id="submit" class="float-end btn-send">SUBMIT</button>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <div class="title-border-bottom">
                <h2 class="title  mb-5 text-center " >PROJECTS TRAINING</h2>
            </div>
            <ul id="project-filters" class="mb-4" >
                <li class="list-project active"data-filter="all">All</li>
                @foreach ($categories as $category)
                <li class="list-project" data-filter="{{$category->slug}}">{{$category->name}}</li>
                    
                @endforeach
               
            </ul>
            <div class="projects ">
                @foreach ($projects as $project)
                             
                <div class="itemProject shadow  {{$project->category->slug}}">
                    <div class="project-img">
                        
                        <div>
                            <img src="{{{asset('storage/'.$project->image)}}}" alt="">
                        
                        </div>
                        <div class="bg-img"></div> 

                           <a href="{{$project->url}}" class="source-code">Source Code</a>
                       
                    </div>
                    <div class="project-info p-3">
                       <div>
                        <h5>{{$project->title}}</h5>
                       </div>
                       <p class="project-des">{{$project->description}}</p>

                      
                    </div>
                    {{-- @php
                    $descriptions = $project->description;
                    $descriptions = explode(',', $descriptions);
                 
                     @endphp
                       @foreach ($descriptions as $description)
                                       
                       <div class="proDes">
                        <p class="project-des">{{$description}}</p>
                       </div>

                       @endforeach --}}
                
                   
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
   
    <section id="footer">
        <div class="container">
          <div class="footer">
            <div class="footer__left">
                <p>Copyright {{ now()->year }} © <span class="logo-title">Moth</span></p>
            </div>
            <div class="footer__right">
                <div class="socail-meadia footer" data-wow-duration="3s">
                    <div class="facebook">
                        <a href="https://www.facebook.com/jar.khab?mibextid=LQQJ4d"><i class="fa-brands fa-facebook-f"></i></a>
                       </div>
                       <div class="facebook">
                             <a href="https://t.me/himmoth">   <i class="fa-brands fa-telegram"></i></a>
                       </div>
                       <div class="facebook">
                             <a href="https://github.com/himmoth"><i class="fa-brands fa-github"></i></a>
                       </div>
                </div>
            </div>
          </div>
        </div>
    </section>
@endsection

<script>
 
</script>