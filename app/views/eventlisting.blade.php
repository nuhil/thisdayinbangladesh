@extends('layoutfront')

@include('dateandtalkofthisday')

@section('eventlisting')
    <!-- Event Listing -->  
        <div class="span9">
            @if (count($facts) >= 1)
            <ul class="tb-ul">
                @foreach ($facts['facts'] as $fact)
                  <li>
                    <h6>
                      <span class="fui-check-inverted"></span> <strong>{{$fact['title']}}</strong>
                    </h6>
                    <p>{{$fact['description']}}</p>
                    @if(count($fact['types']) >= 1)
                    <p>FACT TYPE(S):
                        @foreach ($fact['types'] as $type)
                        <span class="fui-radio-checked"> <a href="#">{{$type['type']}}</a></span>
                        @endforeach    
                    </p>    
                    @endif
                  </li>                    
                @endforeach                                                                           
            </ul>             
            @endif
            <div class="row" style="text-align:center;">
              <img src="{{ URL::asset('assets/images/icons/Infinity-Loop@2x.png') }}" alt="Pensils@2x" class="tile-image">
            </div>        
        </div>    
        <!-- /Event Listing -->
@stop