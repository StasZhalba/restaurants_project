<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Restaurant Guide</title>
    <link href="/css/clean-blog.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/slider.css">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="slider-wrapp">
        <div id="slider" class="_3D">
            @foreach($dishes as $dish)
                <div class="slide"><img src="/uploads/{{ $dish->file_name }}">
                    <a href="/dishes/{{ $dish->id }}" style="font-size: 30px;">
                        {{ $dish->dish_name }}
                    </a>
                </div>
            @endforeach          
        </div>
    </div>
    <div class="keyboard">
        <div class="key ctrl">Ctrl</div>
        <div class="arrows"> 
            <div class="key up">&uarr;</div>
            <div class="key left">&larr;</div>
            <div class="key down">&darr;</div>
            <div class="key right">&rarr;</div>
        </div>
        <p>
            Press <kbd>Arrows</kbd> from keyboard to change slide <br>
            Press <kbd>Ctrl</kbd> + <kbd>Arrows</kbd> from keyboard to switch to flat mode
        </p>
    </div>
	@include('navigation')
	<div class="col-sm-3">		
        @if(isset($del_dish_name))
            <p>Dish "{{ $del_dish_name }}" deleted successfully.</p>
            <br>
        @endif
        @if(Auth::user())
            @if(Auth::user()->email === 'john@example.com')
                <a href="/add_dish">
                    <button class="btn btn-default">Add new dish →</button>
                </a>
            @endif
        @endif   
	</div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="/js/slider.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
