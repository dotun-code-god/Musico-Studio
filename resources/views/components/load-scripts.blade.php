<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>
@foreach ($src as $links)
    <script src={{$links}}></script>
@endforeach
{{$slot}}
