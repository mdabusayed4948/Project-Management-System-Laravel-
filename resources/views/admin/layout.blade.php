<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
   

    <title>Project Management System</title>
	 <link rel="shortcut icon" href="img/favicon.png">
	<link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,300,100,500'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://www.google.com/fonts#UsePlace:use/Collection:Roboto+Slab:400,700,300,100'>

	 <link rel="stylesheet" href="css/style.css">
 
     
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
   
{!!Html::style('css/bootstrap-theme.css')!!}
    {!!Html::style('css/elegant-icons-style.css')!!}
 {!!Html::style('css/font-awesome.min.css')!!}
{!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
{!!Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
{!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
    {!!Html::style('css/owl.carousel.css')!!}
 {!!Html::style('css/jquery-jvectormap-1.2.2.css')!!} 
        {!!Html::style('css/fullcalendar.css')!!}
        {!!Html::style('css/widgets.css')!!}
		 {!!Html::style('css1/style.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
        {!!Html::style('css/xcharts.min.css')!!}
  {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
  </head>
  
  <body>
      <section id="container" class="">
       @if(Auth::guard('admin')->check())
          @include('admin.header.header')
         @include('admin.sidebar.sidebar')
		
         <section id="main-content">
            
               <section class="wrapper" style="margin-top: 80px ; min-width: 880px">  
                 
                 @yield('content')
                  </section>
         </section>
         
     @else    
 
        @yield('content')
   
     @endif
      </section>
      
       {!!Html::script('js1/index.js')!!}
      {!!Html::script('js/jquery.js')!!}
           {!!Html::script('js/jquery-ui-1.10.4.min.js')!!}
       {!!Html::script('js/jquery-1.8.3.min.js')!!}
    {!!Html::script('js/jquery-ui-1.9.2.custom.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
       {!!Html::script('js/jquery.scrollTo.min.js')!!}
   {!!Html::script('js/jquery.nicescroll.js')!!}
       {!!Html::script('assets/jquery-knob/js/jquery.knob.js')!!}
       {!!Html::script('js/jquery.sparkline.js')!!}
       {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
     {!!Html::script('js/owl.carousel.js')!!}
       {!!Html::script('js/fullcalendar.min.js')!!}<!-- Full Google Calendar - Calendar -->
   {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
       {!!Html::script('js/calendar-custom.js')!!}
   {!!Html::script('js/jquery.rateit.min.js')!!}
       {!!Html::script('js/jquery.customSelect.min.js')!!}
      {!!Html::script('assets/chart-master/Chart.js')!!}
   {!!Html::script('js/scripts.js')!!}
{!!Html::script('js/sparkline-chart.js')!!}
       {!!Html::script('js/easy-pie-chart.js')!!}
           {!!Html::script('js/jquery-jvectormap-1.2.2.min.js')!!}
           {!!Html::script('js/jquery-jvectormap-world-mill-en.js')!!}
           {!!Html::script('js/xcharts.min.js')!!}
           {!!Html::script('js/jquery.autosize.min.js')!!}
           {!!Html::script('js/jquery.placeholder.min.js')!!}
           {!!Html::script('js/gdp-data.js')!!}
           {!!Html::script('js/morris.min.js')!!}
           {!!Html::script('js/sparklines.js')!!}
           {!!Html::script('js/charts.js')!!}
         {!!Html::script('js/jquery.slimscroll.min.js')!!}
         <script>
       function myFunction() {
       window.print();
           }
               </script>
		 
	  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
   
  </body>
</html>

