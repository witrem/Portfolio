@extends('simple-layout')
@section('body')
    <!-- Add a placeholder for the Twitch embed -->
    <section  class="section is-medium">
    <div class="container has-background-white card">
         <div class="columns is-mobile is-centered">
            <div class="column is-half">
               <h1 class="title is-spaced has-text-centered">On part en live ?</h1>
            </div>
         </div>
         <div class="columns is-mobile is-centered">
           <div class="column">
             <div id="twitch-embed"></div>
           </div>
         </div> 
     </div>
    </section>
    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: "100%",
        channel: "monstercat",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
       
      });
    </script> 
@stop
