
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>Resume a Personal Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <!-- js -->
  {{HTML::script('assets/frontend/layout/scripts/jquery-2.1.4.min.js');}}
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- //for-mobile-apps -->
  {{HTML::style('assets/frontend/layout/css/style-front.css');}}

  
  <!-- //js -->
  <!-- fonts -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'><!-- //fonts -->

  <!-- start-smoth-scrolling -->

  {{HTML::script('assets/frontend/layout/scripts/move-top.js');}}
  {{HTML::script('assets/frontend/layout/scripts/easing.js');}}
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
  </script>
  <!-- start-smoth-scrolling -->

  <!-- skills -->
  {{HTML::script('assets/frontend/layout/scripts/pie-chart.js');}}
  <script type="text/javascript">

  $(document).ready(function () {
    $('#demo-pie-1').pieChart({
      barColor: '#10A7AF',
      trackColor: '#fff',
      lineCap: 'round',
      lineWidth: 8,
      onStep: function (from, to, percent) {
        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
      }
    });

    $('#demo-pie-2').pieChart({
      barColor: '#10A7AF',
      trackColor: '#fff',
      lineCap: 'butt',
      lineWidth: 8,
      onStep: function (from, to, percent) {
        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
      }
    });

    $('#demo-pie-3').pieChart({
      barColor: '#10A7AF',
      trackColor: '#fff',
      lineCap: 'square',
      lineWidth: 8,
      onStep: function (from, to, percent) {
        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
      }
    });

    $('#demo-pie-4').pieChart({
      barColor: '#10A7AF',
      trackColor: '#fff',
      lineCap: 'square',
      lineWidth: 8,
      onStep: function (from, to, percent) {
        $(this.element).find('.pie-value').text(Math.round(percent) + '%');
      }
    });
  });
</script>
<!-- skills -->
{{HTML::script('assets/frontend/layout/scripts/numscroller-1.0.js');}}

</head>
<body>
  <!-- banner -->
  <div class="header-top">
    <div class="container">
      <ul>
        <li><a class="scroll" href="#about"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Resume</a></li>
        <li><a class="scroll" href="#emailme"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email me</a></li>
        <li><a href="#portfolioModal9" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
          <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>My Photo</a></li>
        </ul>
      </div>
    </div>  
    <div class="header">
      <div class="container">
        <div class="col-md-8 header-left">
          <div class="col-sm-5 pro-pic">
            <img class="img-responsive" src="{{'assets/media/image/'.$data['user']['image']}}" alt=" "/>
          </div>
          <div class="col-sm-5 pro-text">
            <h1>{{$data['user']['name']}}</h1>
            <p>{{$data['user']['title']}}</p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-4 header-right ">
          <ul class="list-left">
            <li>Email:</li>
            <li>Website:</li>
            <li>Phone no:</li>
            <li>Address: </li>
          </ul>
          <ul class="list-right">
            <li>{{$data['user']['email']}}</li>
            <li>{{$data['user']['website']}}</a></li>
            <li>{{$data['user']['phone']}}</li>
            <li> {{$data['user']['address']}}</li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- //banner -->
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      {{ implode('', $errors->all('<p class="text-center">:message</p>')) }}
    </div>
    @endif
    @if(Session::has('msgs'))
    <div class="{{Session::get('msgs')['type']}}" role="alert">

      <p class="text-center">{{Session::get('msgs')['msg']}}</p>
    </div>
    @endif
    <!-- about -->
    <div id="about" class="about">
      <div class="container">
        <h3 class="tittle">About Me</h3>
        <p class="abt-para">{{$data['user']['about_me']}} </p>
      </div>
      <div class="col-md-offset-1 col-md-10 abt-left ">
        <h2>Education</h2>
        <div class="accordion">
          @foreach( $data['educations'] as $education)

          <div class="accordion-section">
            <h5><a class="accordion-section-title" href="#{{$education->id}}">
              <span> {{DateTime::createFromFormat("Y-m-d H:i:s", $education->start_year)->format("Y")}} -  {{DateTime::createFromFormat("Y-m-d H:i:s", $education->end_year)->format("Y")}}</span> {{$education->title}}<span> [{{$education->university}}]</span>
              <i class="glyphicon glyphicon-chevron-down"></i><div class="clearfix"></div>
            </a></h5>
            <div id="{{$education->id}}" class="accordion-section-content">
              <h6>{{$education->achievements_title}}</h6>
              <ul>
                @foreach($education->achievments as $achievment)
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">{{$achievment->description}}</a></li>
                @endForeach
              </ul>
            </div>
          </div>
          @endForeach                  
        </div>
        <script>
        jQuery(document).ready(function() {
          function close_accordion_section() {
            jQuery('.accordion .accordion-section-title').removeClass('active');
            jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
          }

          jQuery('.accordion-section-title').click(function(e) {
                  // Grab current anchor value
                  var currentAttrValue = jQuery(this).attr('href');

                  if(jQuery(e.target).is('.active')) {
                    close_accordion_section();
                  }else {
                    close_accordion_section();

                    // Add active class to section title
                    jQuery(this).addClass('active');
                    // Open up the hidden content panel
                    jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
                  }

                  e.preventDefault();
                });
        });
        </script>
      </div>

      <div class="clearfix"></div>
    </div>
    <!-- about -->
    <!-- education -->
    <div class="employment">
      <div class="container">
        <h3 class="tittle ">Work Experience</h3>
        <p class="abt-para ">Sed ut perspiciatis unde omnis iste natus error sit 
          voluptatem accusantium doloremque laudantium, totam 
          rem aperiam, eaque ipsa quae ab illo inventore veritatis 
          et quasi architecto beatae vitae dicta sunt explicabo. 
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur . </p>
          @foreach($data["experiences"] as $index=>$experience)

          @if( $index % 2 == 0)
          <div class="col-md-6 employ-left">
            <h4>{{$index + 1}}</h4>
          </div>
          <div class="col-md-6 employ-right">
            <h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>{{$experience->title}}</h5>
            <p>{{$experience->description}} </p>
          </div>

          @else

          <div class="col-md-6 employ-left2">
            <h5>{{$experience->title}}<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></h5>
            <p>{{$experience->description}}</p>
          </div>
          <div class="col-md-6 employ-right2">
            <h4>{{$index + 1}}</h4>
          </div>
          @endIf



          @endForeach
          
        </div>
      </div>
      <!--Research Papaers-->
      <div class="col-md-offset-1 col-md-10 abt-left ">
        <h2>Publications</h2>
        <div class="accordion-research">
          @foreach( $data['research_categories'] as $research_category)

          <div class="accordion-research-section">
            <h5><a class="accordion-research-section-title" href="#{{$research_category->id}}research">
              {{$research_category->name}}
              <i class="glyphicon glyphicon-chevron-down"></i><div class="clearfix"></div>
            </a></h5>
            <div id="{{$research_category->id}}research" class="accordion-research-section-content">

              <ul>
                @foreach($research_category->researchProjects as $project)
                <h6>{{$project->title}}({{DateTime::createFromFormat("Y-m-d H:i:s", $project->date)->format("Y")}})</h6>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">{{$project->description}}</a><a href="{{$project->url}}" style="color:#10A7AF; padding-left:10px;">Project Link</a></li>
                @endForeach
              </ul>
            </div>
          </div>
          @endForeach                  
        </div>
        <script>

        function close_accordion_research_section() {
          jQuery('.accordion-research .accordion-research-section-title').removeClass('active');
          jQuery('.accordion-research .accordion-research-section-content').slideUp(300).removeClass('open');
        }

        jQuery('.accordion-research-section-title').click(function(e) {
                  // Grab current anchor value
                  var currentAttrValue1 = jQuery(this).attr('href');
                  console.log(currentAttrValue1);

                  if(jQuery(e.target).is('.active')) {
                    close_accordion_research_section();
                  }else {
                    close_accordion_research_section();

                    // Add active class to section title
                    jQuery(this).addClass('active');
                    // Open up the hidden content panel
                    jQuery('.accordion-research ' + currentAttrValue1).slideDown(300).addClass('open'); 
                  }

                  e.preventDefault();
                });

        </script>
      </div>

      <div class="clearfix"></div>
    </div>
    <!--End Research-->

    <!-- //num scroller -->
    <!-- portfolio -->
    <div class="portfolio">
      <div class="container">
        <h3 class="tittle ">Portfolio</h3>
        <div class="portfolio-grids">
          {{HTML::script('assets/frontend/layout/scripts/easyResponsiveTabs.js');}}

          <script type="text/javascript">
          $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                      type: 'default', //Types: default, vertical, accordion           
                      width: 'auto', //auto or any width like 600px
                      fit: true   // 100% fit in a container
                    });
          });

          </script>
          <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
              <ul class="resp-tabs-list">
               <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li> 
               @foreach($data['portfolios_categories'] as $portfolio_category)
               <li class="resp-tab-item" aria-controls="tab_item-{{$portfolio_category->id}}" role="tab"><span>{{$portfolio_category->title}}</span></li> 
               @endForeach
             </ul>            
             <div class="resp-tabs-container">
              <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0" aria-labelledby="tab_item-{{$portfolio_category->id}}">
               @foreach($data['portfolios_categories'] as $portfolio_category)
               @foreach($portfolio_category->portfolios as $portfolio)
               <div class="col-md-3 team-gd ">
                <div class="thumb">
                  <a href="#portfolioModal{{$portfolio->id}}" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="{{'assets/media/portfolio-images/'.$portfolio->image}}" alt="">
                    <div class="team_pos">
                      <ul>
                        <li>
                          <div class="morph pic fb_icon1">
                          </div>
                        </li>
                      </ul>
                    </div>
                  </a>
                </div>
              </div>
              @endForeach
              @endForeach
            </div>
            @foreach($data['portfolios_categories'] as $portfolio_category)
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
             @foreach($portfolio_category->portfolios as $portfolio)
             <div class="col-md-3 team-gd ">
              <div class="thumb">
                <a href="#portfolioModal{{$portfolio->id}}" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="{{'assets/media/portfolio-images/'.$portfolio->image}}" alt="">
                  <div class="team_pos">
                    <ul>
                      <li>
                        <div class="morph pic fb_icon1">
                        </div>
                      </li>
                    </ul>
                  </div>
                </a>
              </div>
            </div>

            @endForeach
          </div>
          @endForeach  



        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- //portfolio -->
<!--portfolio models-->
@foreach($data['portfolios_categories'] as $portfolio_category)
@foreach($portfolio_category->portfolios as $portfolio)
<div class="portfolio-modal modal fade slideanim" id="portfolioModal{{$portfolio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content port-modal">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <div class="modal-body">
            <h3>{{$portfolio->title}}</h3>
            <img src="{{'assets/media/portfolio-images/'.$portfolio->image}}" class="img-responsive img-centered" alt="">
            <p>{{$portfolio->description}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endForeach
@endForeach

<!--end models->
  <!-- more skills -->
  <div class="more">
    <div class="container">
      <h3 class="tittle ">Skills</h3>
      <div class="col-md-6 skill-left ">
        @foreach($data['skills'] as $skill)
        <div class="progress">
          <div class="{{$skill->experience_color}}" style="width: {{$skill->experties_level}}%">{{$skill->title}}
            <span class="sr-only">{{$skill->experties_level}}% Complete (success)</span>
          </div>

          <p>{{$skill->experties_level}}%</p>
          <div class="clearfix"></div>
        </div>
        @endForeach 
      </div>
      <div class="col-md-6 skill-right ">
        <div class="scrollbar scrollbar1">
          @foreach($data['skills'] as $index=>$skill)
          
          <div class="more-gds">

            <div class="col-sm-9 col-md-offset-3 more-right">
              <h4>{{$skill->title}}</h4>
              <p>{{$skill->description}}</p>
            </div>
            <div class="clearfix"></div>
          </div>
         
   
          @endForeach
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- more skills -->
  <!-- contact -->
  <div id="emailme" class="contact">
    <div class="container">
      <h3 class="tittle">Contact</h3>
      <div class="col-md-6 contact-left ">
        <div class="horizontal-tab">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="false">Contact me</a></li>
            <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Hire me</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active in" id="tab1">
              <div class="contact-form">
                <ul>
                  <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{$data['user']->address}}</li>
                  <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>{{$data['user']->email}} </li>
                  <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>{{$data['user']->phone}}</li>
                </ul>
                <form action="{{URL::route('contactme')}}" method="POST">
                  <input name = "name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                  <input name="email" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                  <textarea name="message" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                  <input type="submit" value="Submit" >
                </form>
              </div>

            </div>
            <div class="tab-pane" id="tab2">
              <div class="contact-form">
                <form action="{{URL::route('hireme')}}" method="POST" enctype="multipart/form-data">
                  <input  name = "name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                  <input name= "email" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                  <textarea name="message" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Description...</textarea>
                  <input   id="uploadFile" placeholder="Choose File" disabled="disabled" />
                  <div class="fileUpload btn btn-primary">
                    <span>Upload</span>
                    <input name="file" id="uploadBtn" type="file" class="upload" required=""/>
                  </div>
                  <input type="submit" value="Send Request" >
                </form>
                <script>
                document.getElementById("uploadBtn").onchange = function () {
                  document.getElementById("uploadFile").value = this.value;
                  console.log(document.getElementById("uploadFile").value);
                };
                </script>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6 contact-right ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
      </div>
      <div class="clearfix"></div>
      <p class="copy-right">&copy 2016 Resume. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
  </div>
  <!-- //contact -->

  {{HTML::script('assets/frontend/layout/scripts/bootstrap.js');}}

  <div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <div class="modal-body">
              <img src="{{'assets/media/image/'.$data['user']['image']}}" class="img-responsive img-centered" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--scrolling js-->
  {{HTML::script('assets/frontend/layout/scripts/jquery.nicescroll.js');}}
  {{HTML::script('assets/frontend/layout/scripts/scripts.js');}}

  <!--//scrolling js-->
  <!-- smooth scrolling -->
  <script type="text/javascript">
  $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
      */                
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->

</body>
</html>
