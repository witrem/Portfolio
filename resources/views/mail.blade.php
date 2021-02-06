<html>
<body>
<h1>Contact de {{ $data['nom']}} {{ $data['prenom']}}</h1>
<br>Mail : {{$data['mail']}}
<br>Message : {{$data['message']}}
<footer class="footer">
    @include('footer')
    </footer>
</body>
</html>