@extends('layouts.app2')
@section('content')
    <h1>アイテム一覧</h1>
    <hr/>
    
    {!! link_to('items/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    {!! link_to('items?days=0', '初日', ['class' => 'btn btn-primary']) !!}
    {!! link_to('items?days=1', '二日目', ['class' => 'btn btn-primary']) !!}
    {!! link_to('items?days=2', '最終日', ['class' => 'btn btn-primary']) !!}
    {!! link_to('items', '全日', ['class' => 'btn btn-primary']) !!}
    <TABLE border="1">
    <TR>
        <TD>No</TD>
        <TD>日程</TD>
        <TD>配置</TD>
        <TD>サークル</TD>
        <TD>作者</TD>
        <TD>SNS</TD>
        <TD>販売物</TD>
        <TD>希望数</TD>
        <TD>希望者</TD>
        <TD>備考</TD>
        <TD>編集</TD>
    </TR>
    @foreach($items as $item)
        @if($item->delflg != '1')
            <item>
                <h2>
                    <TR>
                        <TD width="30" align="center">{{ $item->id }}</TD>
                        <TD width="30" align="center">
                            @if($item->days == '0')
                                金
                            @elseif($item->days == '1')
                                土
                            @else
                                日
                            @endif
                        </TD>
                        <TD width="90" align="center">
                        @if($item->area == '0')
                            東
                        @else
                            西
                        @endif
                        {{ $item->column }}
                        {{sprintf("%'.02d\n", $item->No)}}
                         @if($item->aorb == '0')
                             a
                         @elseif($item->aorb == '1')
                             b
                         @elseif($item->aorb == '2')
                             ab
                         @endif
                         </TD>
                        <TD>
                            @if(!empty($item->url))
                            <a href="{{ url($item->url) }}" target="blank">
                               {{ $item->circle }}
                            </a>
                            @else
                                {{ $item->circle }}
                            @endif
                        </TD>
                        <TD>{{ $item->creater }}</TD>
                        <TD width = "78">
                        @if(!empty($item->twitter))
                            <a href={{$item->twitter}} TARGET="_blank"><img class="logo" src="{{ asset('image/aaa.png') }}" alt="logo" width="25" height="25"></a>
                        @endif
                        @if(!empty($item->facebook))
                            <a href={{$item->facebook}} TARGET="_blank"><img class="logo" src="{{ asset('image/facebook.png') }}" alt="logo" width="22" height="22"></a>
                        @endif
                        @if(!empty($item->pixiv))
                            <a href={{$item->pixiv}} TARGET="_blank"><img class="logo" src="{{ asset('image/pixiv.png') }}" alt="logo" width="22" height="22"></a>
                        @endif
                        </TD>
                        <TD width="200">
                            @if(!empty($item->item1))
                                ①{{ $item->item1 }}
                                @if(!empty($item->item2))
                                    <br> ②{{ $item->item2 }}
                                    @if(!empty($item->item3))
                                        <br> ③{{ $item->item3 }}
                                        @if(!empty($item->item4))
                                            <br> ④{{ $item->item4 }}
                                            @if(!empty($item->item5))
                                                <br> ⑤{{ $item->item5 }}
                                                @if(!empty($item->item6))
                                                    <br> ⑥{{ $item->item6 }}
                                                    @if(!empty($item->item7))
                                                        <br> ⑦{{ $item->item7 }}
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                            @if(!empty($item->item_count8))
                                <br> ⑪既刊ALL
                            @endif
                            @if(!empty($item->item_count9))
                                <br> ⑩新刊ALL
                            @endif
                            @if(!empty($item->item_count10))
                                <br> ⑫ALL(グッズ込)
                            @endif
                        </TD>
                        <TD width="50">
                            @if(!empty($item->item_count1))
                               ①×{{ $item->item_count1 }}
                            @endif
                            @if(!empty($item->item_count2))
                               <br>②×{{ $item->item_count2 }}
                            @endif
                            @if(!empty($item->item_count3))
                               <br>③×{{ $item->item_count3 }}
                            @endif
                            @if(!empty($item->item_count4))
                               <br>④×{{ $item->item_count4 }}
                            @endif
                            @if(!empty($item->item_count5))
                               <br>⑤×{{ $item->item_count5 }}
                            @endif
                            @if(!empty($item->item_count6))
                               <br>⑥×{{ $item->item_count6 }}
                            @endif
                            @if(!empty($item->item_count7))
                               <br>⑦×{{ $item->item_count7 }}
                            @endif
                            @if(!empty($item->item_count8))
                               <br>⑪×{{ $item->item_count8 }}
                            @endif
                            @if(!empty($item->item_count9))
                               <br>⑩×{{ $item->item_count9 }}
                            @endif
                            @if(!empty($item->item_count10))
                               <br>⑫×{{ $item->item_count10 }}
                            @endif
                        </TD>
                        <TD width="200">
                            @if(!empty($item->buy_member1))
                                ①{{ $item->buy_member1 }}
                            @endif
                            @if(!empty($item->buy_member2))
                                <br>②{{ $item->buy_member2 }}
                            @endif
                            @if(!empty($item->buy_member3))
                                <br>③{{ $item->buy_member3 }}
                            @endif
                            @if(!empty($item->buy_member4))
                                <br>④{{ $item->buy_member4 }}
                            @endif
                            @if(!empty($item->buy_member5))
                                <br>⑤{{ $item->buy_member5 }}
                            @endif
                            @if(!empty($item->buy_member6))
                                <br>⑥{{ $item->buy_member6 }}
                            @endif
                            @if(!empty($item->buy_member7))
                                <br>⑦{{ $item->buy_member7 }}
                            @endif
                            @if(!empty($item->buy_member8))
                                <br>⑪{{ $item->buy_member8 }}
                            @endif
                            @if(!empty($item->buy_member9))
                                <br>⑩{{ $item->buy_member9 }}
                            @endif
                            @if(!empty($item->buy_member10))
                                <br>⑫{{ $item->buy_member10 }}
                            @endif
                        </TD>
                        <TD width="200">{{ $item->note }}</TD>
                        <TD>
                            <input type="button" value="詳細" onclick="location.href='http://192.168.11.54:8000/items/{{$item->id}}/edit'">
                        </TD>
                    </TR>
                </h2>
            </item>
        @endif
    @endforeach
    </TABLE>
    <br>
    {!! link_to('items/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    <br>
    @if(isset($_GET['days']))
        {!! $items->appends(['days' => $_GET['days']])->render() !!}
    @else
        {!! $items->render() !!}
    @endif
    <hr>
@endsection
