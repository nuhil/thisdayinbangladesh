@section('dateandtalkofthisday')
    <!-- Date & Talk of this day -->
      <div class="row demo-row">
        <div class="span3 tb-date">
          <h1>@if(isset($today['month'])) {{ $today['month'] }} @endif</h1>
          <h2>@if(isset($today['day'])) {{ $today['day'] }} @endif</h2>
        </div>
        <div class="span9 tb-hot">
          <div class="tile tb-talk-of-the-day">
            <h3>
                <img src="{{ URL::asset('assets/images/icons/Chat@2x.png') }}" alt="hit">
                Did you know?
            </h3>
              
            @if ((isset($facts) && (count($facts) >= 1)))
            <ul class="tb-ul">
              <li>
                <h6><span class="fui-user"></span> <strong>{{$facts['facts'][0]['title']}}</strong></h6>
                <p>{{$facts['facts'][0]['description']}}</p>
              </li>        
            </ul>
            @else
            <h1 class="error">Oops! No fact found for this day!</h1>
            <h4>Why don't you <a href="<?php echo URL::to('about'); ?>" alt="Let Us Know">let us know</a> about a fact that happened on this day?</h4>
            @endif
          </div>
        </div>
      </div>
      <!-- /Date & Talk of this day -->
      <div class="row demo-row">
          <div class="span2 month-picker">
          <select name="herolist" id="select-month" value="Day" class="select-block span3 day" style="display: none;">
              <option value="">Month</option>
              <option value="01">January</option>
              <option value="02">February</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>  
          <div class="span1 date-picker">
          <select name="herolist" id="select-day" value="Day" class="select-block span3 day" style="display: none;">
              <option value="">Day</option>
              <option value="01">1</option>
              <option value="02">2</option>
              <option value="03">2</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>         
        <div class="span9">
          <h3><span class="fui-arrow-left"></span>Select Month &amp; Day to go past!</h3>
        </div>
      </div>            
@stop
