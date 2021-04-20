
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
	<link rel="stylesheet" href="{{ asset('/css/main.css')}}"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body>
	<!--Navbar-->
  
	<div id="menu" class="menu">
		<div id="menu-bar" onclick="onClickMenu()">
			<div id="bar1" class="bar"> </div>
			<div id="bar2" class="bar"> </div>
			<div id="bar3" class="bar"> </div>
			<ul id="nav" class="nav">
				<li><a onclick="clickHome()">@lang('main.hme')</a></li>
				<li><a onclick="clickAbout()">@lang('main.about')</a></li>
				<li><a onclick="clickMenu()">@lang('main.menu')</a></li>
				<li><a onclick="clickContact()">@lang('main.contact')</a></li>
        <li><a href = "{{ route('locale',__('main.set_lang')) }}">@lang('main.set_lang')</a></li>
			</ul>
		</div>
		
	</div>
	<header class="header">
        <div class="hero">
            <h1 class="title">@lang('main.food_for_health')</h1>
             <button id = "btn_white1" type="button" onclick="popup1()" class="hero-button pulsate">@lang('main.book_a_table')</button>
            <div class="user_profile">
            	<p id ="user_name"></p>
            </div>
    </header>
    <div class ="popup">  
    	<div class="popup-content">
    		<img class ="closed" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQREpNkaUqopqvFaEaPnEzWrqei9DMa5And2Q&usqp=CAU" width="7%" onclick="popout()">
    		<h1 >@lang('main.Log_in_to_continue')</h1>
    		<section id = "social-icons">
    			<div class="icn">
		   		<a href="#"><i class="fab fa-facebook facebook"></i></a>
		       <a href="#"><i class="fab fa-google-plus plus"></i></a>
		   		</div>
		   </section>
		   <hr class="empty"/>
		   <h2>@lang('main.or')</h2>
		   <hr class="empty"/>
    		<input id = "username" type="text" name="username" placeholder="Your Email">

    		<input id = "pass" type="password" name="pass" placeholder="Your password">
    		<button onclick="login(username.value)">@lang('main.log_in')</button>
    
</div>
    	</div>
    </div>
    <div class ="popup1">  
      <div class="popup1-content">
        <img class ="closed" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQREpNkaUqopqvFaEaPnEzWrqei9DMa5And2Q&usqp=CAU" width="7%" onclick="popout1()">
        <label>
            @lang('main.chose')
            <input type="date" name="party" min="2021-04-23" max="2021-05-23" required>
            <span class="validity"></span>
            <label for="quantity">@lang('main.chose_table')</label>
            <input type="number" id="quantity" name="quantity" min="1" max="20">
        </label>
        <button onclick="window.location='{{ route('pSend',array("190109003@stu.sdu.edu.kz")) }}'">@lang('main.send_mail')</button>
      </div>
    </div>
    <!--About Us-->
    <section id="about">
       <div>
       <h2 class="title-text">@lang('main.about_us')</h2>
    </div>
    <div class="about-center">
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-mug-hot"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.drinks')</h2>
                <p class="about-info">@lang('main.drinks2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-utensils"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.healthy_food')</h2>
                <p class="about-info">@lang('main.healthy_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-mortar-pestle"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.organic_food')</h2>
                <p class="about-info">@lang('main.organic_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-drumstick-bite"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.white_meat')</h2>
                <p class="about-info">@lang('main.white_meat2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-fish"></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.sea_food')</h2>
                <p class="about-info">@lang('main.sea_food2')</p>
            </div>
        </article>
        
        <article class="about">
            <div class="about-icon"><i class="fas fa-pepper-hot "></i></div>
            <div class="about-text">
                <h2 class="about-subtitle">@lang('main.hot_&_spicy')</h2>
                <p class="about-info">@lang('main.hot_&_spicy2')</p>
            </div>
        </article>
        
    </div>   
   </section>

   <!--Menu-->
   <section class="menu" id="menu">
       <article class="menu-image"></article>
       <article class="menu-text">
           <div class="menu-text-center">
               <h1>@lang('main.our_menu')</h1>
               <p>@lang('main.our_menu2')</p>
                <a onclick="clickMen()">@lang('main.explore')</a>
           </div>
       </article>
   </section>

   <!--Icons-->
   <section id = "social-icons">
   		<a href="#"><i class="fab fa-facebook facebook"></i></a>
       <a href="#"><i class="fab fa-twitter twitter"></i></a>
       <a href="#"><i class="fab fa-instagram instagram"></i></a>
       <a href="#"><i class="fab fa-google-plus plus"></i></a>
   </section>

   <!--Numbers-->
   <section id="numbers">
       <article class="number">
           <i class="fas fa-cloud-meatball"></i>
           <p>50</p>
          <h3> @lang('main.meat_dishes')</h3>
        </article>
        <article class="number">
            <i class="fas fa-cheese"></i>
            <p>35</p>
           <h3> @lang('main.cheese_variations')</h3>
         </article>
         <article class="number">
            <i class="fas fa-pizza-slice"></i>
            <p>25</p>
           <h3> @lang('main.pizzas')</h3>
         </article>
         <article class="number">
            <i class="fas fa-ice-cream"></i>
            <p>40</p>
           <h3>@lang('main.desserts')</h3>
         </article>
   </section>
   <section id="food">
       <div>
       <h2 class="title-text">@lang('main.food_fusion')</h2>
        </div>
      <div class="food-container">
              <!--======Card Start ----============-->
      <article class="food-card">
              <img src="{{url('images/photo8.jpg')}}" class="food-img"alt="">
              <div class="img-text">
                  <h1>@lang('main.breakfast')</h1>
              </div>
              <div class="img-footer">
                  <div class="footer-icon">
                    <i class="fas fa-dollar-sign">25</i>
                  </div>
                  <div class="footer-btn">
                    <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                  </div>
              </div>
              </article>
              <article class="food-card">
                <img src="{{url('images/photo7.jpg')}}" class="food-img"alt="">
                <div class="img-text">
                    <h1>@lang('main.lunch')</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                      <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                      <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                    </div>
                </div>
                </article>
                <article class="food-card">
                    <img src="{{url('images/photo5.jpg')}}" class="food-img"alt="">
                    <div class="img-text">
                        <h1>@lang('main.dinner')</h1>
                    </div>
                    <div class="img-footer">
                        <div class="footer-icon">
                          <i class="fas fa-dollar-sign">45</i>
                        </div>
                        <div class="footer-btn">
                          <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                        </div>
                    </div>
                    </article>
                    <article class="food-card">
              <img src="{{url('images/photo9.jpg')}}" class="food-img"alt="">
              <div class="img-text">
                  <h1>@lang('main.breakfast')</h1>
              </div>
              <div class="img-footer">
                  <div class="footer-icon">
                    <i class="fas fa-dollar-sign">25</i>
                  </div>
                  <div class="footer-btn">
                    <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                  </div>
              </div>
              </article>
              <article class="food-card">
                <img src="{{url('images/photo6.jpg')}}" class="food-img"alt="">
                <div class="img-text">
                    <h1>@lang('main.lunch')</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                      <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                      <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                    </div>
                </div>
                </article>
                    <article class="food-card">
                    <img src="{{url('images/photo10.jpg')}}" class="food-img"alt="">
                    <div class="img-text">
                        <h1>@lang('main.dinner')</h1>
                    </div>
                    <div class="img-footer">
                        <div class="footer-icon">
                          <i class="fas fa-dollar-sign">45</i>
                        </div>
                        <div class="footer-btn">
                          <button type="button"class="food-btn">@lang('main.view_recipe')</button>  
                        </div>
                    </div>
                    </article>
       </div>
   </section>

    <section id="t1">
      <div>
        <h2 class="title-text">@lang('main.popular_times')</h2>
      </div>
    </section>
    <hr>
   <canvas id = "myChart1" width="400" height="100"></canvas>
   <hr>

   <section id="gallery">
   	<div>
   		<h2 class="title-text">@lang('main.main_cuisines')</h2>
   	</div>
   	<div id="gallery-center">
   		<article class="gallery-item">
	   		<a href="{{url('images/new1.jpg')}}">
	   			<img src="{{url('images/new1.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new2.jpg')}}">
	   			<img src="{{url('images/new2.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new3.jpg')}}">
	   			<img src="{{url('images/new3.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new4.jpg')}}" >
	   			<img src="{{url('images/new4.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new5.jpg')}}">
	   			<img src="{{url('images/new5.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new6.jpg')}}">
	   			<img src="{{url('images/new6.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new7.jpg')}}">
	   			<img src="{{url('images/new7.jpg')}}" alt="">
	   		</a>
   		</article>
   		<article class="gallery-item">
	   		<a href="{{url('images/new8.jpg')}}">
	   			<img src="{{url('images/new8.jpg')}}" alt="">
	   		</a>
   		</article>
   	</div>
   </section>
   <section id="t1">
      <div>
        <h2 class="title-text">@lang('main.review_summary')</h2>
      </div>
    </section>
   <hr>
   <canvas id="myChart" width="400" height="150"></canvas>
   <hr>

  <section id="t1">
      <div>
        <h2 class="title-text">@lang('main.this_is')</h2>
      </div>
    </section>
   <hr>
   <canvas id="myChart2" width="400" height="150"></canvas>
   <hr>

   <footer class="footer">

        <div class="section-center">
        	<p id = "btn_white" class="tet" onclick="popup()">@lang('main.log_in')</p>
            <p class="text">
                &copy; <span>@lang('main.food_for_health')</span> 
            </p>
        </div>

       </footer>

  <script type="text/javascript">
     var ctx = document.getElementById("myChart");

     var myChart = new Chart(ctx,{
        type: 'pie',
          data:{
            labels:["@lang('main.perfect')","@lang('main.good')","@lang('main.ok')"],
            datasets: [
              {label: 'Review summary',
              data: [80,15,5],
              backgroundColor:[
              'rgba(0, 177, 106, 1)',
              'rgba(232, 126, 4, 1)',
              'rgba(207, 0, 15, 1)',
              ],

              }
            ]
          },
          options:{
            scales:{
              yAxes:[{
                ticks:{
                  beginAtZone:true
                }
              }]
            }
          }
     });
   </script>
   <script type="text/javascript">
     var ctx = document.getElementById("myChart2");

     var myChart = new Chart(ctx,{
        "type": 'line',
          "data":{
            "labels":["2015","2016","2017","2018","2019","2020","2021"],
            "datasets": [
              {"label": 'Statistics',
              "data": [50,57,61,53,66,70,73],
              "fill":false,"borderColor":
              'rgb(0, 177, 106)',"lineTension":0.1}]},
          "options":{}});
   </script>

   <script type="text/javascript">
     var ctx = document.getElementById("myChart1");
     var myChart = new Chart(ctx,{
        type: 'bar',
          data:{
            labels:["9am","10am","11am","12am","1pm","2pm","3pm","4pm","5pm","6am","7am","8am"],
            datasets: [
              {label: 'Pick',
              data: [7,8,10,11,12,13,14,12,11,10,8,6,0],
              backgroundColor:[
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(207, 0, 15, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              'rgba(46, 49, 49, 1)',
              ],

              }
            ]
          },
          options:{
            scales:{
              yAxes:[{
                ticks:{
                  beginAtZone:true
                }
              }]
            }
          }
     });
   </script>
   <script src="{{ asset('js/onClickMenu.js') }}"></script>
</body>
</html> 
