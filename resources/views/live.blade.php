@extends('simple-layout')
<link rel="stylesheet" href="{{ versioned_asset('dist/main.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="{{ URL::asset('js/icon.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
<link rel="stylesheet" href="{{ versioned_asset('dist/styles.css') }}">
@section('body')
   <div id="landing-page">
   <section class="section has-background-white is-medium">
      <div class="container  is-small has-text-centered">
         <div class="columns">
            <div class="column is-half is-offset-one-quarter">
               <h1 class="title is-spaced">Regarde moi en Live !</h1>
            </div>
         </div>
             <div id="twitch-embed"></div>
            <script src="https://embed.twitch.tv/embed/v1.js"></script>
            <script type="text/javascript">
              new Twitch.Embed("twitch-embed", {
                width: "100%",
                height: "100%",
                channel: "monstercat",
                theme: "dark",
              });
            </script> 
              </div> 
   </section>
   </div>
   @stop
   <script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="{{ URL::asset('/js/jquery.form.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('/js/portfolio.js') }}"></script>
  
