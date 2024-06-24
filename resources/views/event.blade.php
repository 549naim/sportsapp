@extends('master')
@section('content')
<div class="box">
          <div class="border-right">
            <div class="border-left">
              <div class="inner">
                
                @php
                    $eventItem  = App\Models\Eventitem::where('event_id', $event->id)->first();
                @endphp
                <h3>{{ $event->name }} <span>{{ $eventItem->name }}</span></h3>
                <div class="img-box1 alt text-white"><img src="images/4page-img.jpg" alt="" />
                 <div style="border: 1px solid white">
                    {!! $eventItem->content !!}
                 </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="content">
          <h3> <span>Recent</span></h3>
          @php
                $eventitem = App\Models\Eventitem::where('event_id', $event->id)->get();
          @endphp
          <ul class="list">
            @foreach ($eventitem as $item)
            <li><img src="images/3page-img1.jpg" alt="" /><a href="{{ url('eventitem/'.$item->name.'/'.$item->id.'/'.$event->id) }}"> <button type="button" class="btn btn-success">{{ $item->name }}</button> </a><br />
            </li>
            @endforeach
           
          </ul>
        </div>
      </div>
      
@endsection