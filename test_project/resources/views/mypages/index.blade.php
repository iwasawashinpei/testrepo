@extends('layouts.app2')
@section('content')
<?php
    if(!isset($_SESSION)){ 
        session_start(); 
    }
?>
    <h1><?php echo $_SESSION['name']; ?>のマイページ</h1>
    <hr/>
    チェック一覧
    <br>
    <hr/>
    <?php $url1 = "mypages/" . $_SESSION['id'] . "?days=0" ?>
    <?php $url2 = "mypages/" . $_SESSION['id'] . "?days=1" ?>
    <?php $url3 = "mypages/" . $_SESSION['id'] . "?days=2" ?>
    <?php $url4 = "mypages/" . $_SESSION['id'] ?>
    {!! link_to($url1, '初日', ['class' => 'btn btn-primary']) !!}
    {!! link_to($url2, '二日目', ['class' => 'btn btn-primary']) !!}
    {!! link_to($url3, '最終日', ['class' => 'btn btn-primary']) !!}
    {!! link_to($url4, '全日', ['class' => 'btn btn-primary']) !!}
    @foreach($items as $key =>  $item)
        @foreach($item as $key2 => $item_tip)
            <?php
                switch($key2){
                   case "id":
                       $datas[$key]['id'] = $item_tip;
                       break;
                   case "days":
                       $datas[$key]['days'] = $item_tip;
                       break;
                   case "area":
                       $datas[$key]['area'] = $item_tip;
                       break;
                   case "column":
                       $datas[$key]['column'] = $item_tip;
                       break;
                   case "No":
                       $datas[$key]['No'] = $item_tip;
                       break;
                   case "aorb":
                       $datas[$key]['aorb'] = $item_tip;
                       break;
                   case "circle":
                       $datas[$key]['circle'] = $item_tip;
                       break;
                   case "url":
                       $datas[$key]['url'] = $item_tip;
                       break;
                    case "creater":
                       $datas[$key]['creater'] = $item_tip;
                       break;
                   case "twitter":
                       $datas[$key]['twitter'] = $item_tip;
                       break;
                   case "facebook":
                       $datas[$key]['facebook'] = $item_tip;
                       break;
                   case "pixiv":
                       $datas[$key]['pixiv'] = $item_tip;
                       break;
                   case "item1":
                       $datas[$key]['item1'] = $item_tip;
                       break;
                   case "item2":
                       $datas[$key]['item2'] = $item_tip;
                       break;
                   case "item3":
                       $datas[$key]['item3'] = $item_tip;
                       break;
                   case "item4":
                       $datas[$key]['item4'] = $item_tip;
                       break;
                   case "item5":
                       $datas[$key]['item5'] = $item_tip;
                       break;
                   case "item6":
                       $datas[$key]['item6'] = $item_tip;
                       break;
                   case "item7":
                       $datas[$key]['item7'] = $item_tip;
                       break;
                   case "item_count1":
                       $datas[$key]['item_count1'] = $item_tip;
                       break;
                   case "item_count2":
                       $datas[$key]['item_count2'] = $item_tip;
                       break;
                   case "item_count3":
                       $datas[$key]['item_count3'] = $item_tip;
                       break;
                   case "item_count4":
                       $datas[$key]['item_count4'] = $item_tip;
                       break;
                   case "item_count5":
                       $datas[$key]['item_count5'] = $item_tip;
                       break;
                   case "item_count6":
                       $datas[$key]['item_count6'] = $item_tip;
                       break;
                   case "item_count7":
                       $datas[$key]['item_count7'] = $item_tip;
                       break;
                   case "item_count8":
                       $datas[$key]['item_count8'] = $item_tip;
                       break;
                   case "item_count9":
                       $datas[$key]['item_count9'] = $item_tip;
                       break;
                   case "item_count10":
                       $datas[$key]['item_count10'] = $item_tip;
                       break;
                   case "buy_member1":
                       $datas[$key]['buy_member1'] = $item_tip;
                       break;
                   case "buy_member2":
                       $datas[$key]['buy_member2'] = $item_tip;
                       break;
                   case "buy_member3":
                       $datas[$key]['buy_member3'] = $item_tip;
                       break;
                   case "buy_member4":
                       $datas[$key]['buy_member4'] = $item_tip;
                       break;
                   case "buy_member5":
                       $datas[$key]['buy_member5'] = $item_tip;
                       break;
                   case "buy_member6":
                       $datas[$key]['buy_member6'] = $item_tip;
                       break;
                   case "buy_member7":
                       $datas[$key]['buy_member7'] = $item_tip;
                       break;
                   case "buy_member8":
                       $datas[$key]['buy_member8'] = $item_tip;
                       break;
                   case "buy_member9":
                       $datas[$key]['buy_member9'] = $item_tip;
                       break;
                   case "buy_member10":
                       $datas[$key]['buy_member10'] = $item_tip;
                       break;
                   case "note":
                       $datas[$key]['note'] = $item_tip;
                       break;
                }
             ?>
        @endforeach
    @endforeach
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
        @if(!empty($datas))
        @foreach($datas as $key3 => $data )
            <TR>
                <TD>{{ $data['id'] }}</TD>
                <TD>
                    @if($data['days'] == '0')
                        金
                    @elseif($data['days'] == '1')
                        土
                    @else
                        日
                    @endif
                </TD>
                <TD>
                    @if($data['area'] == 0)
                        東
                    @else
                        西
                    @endif
                    {{ $data['column'] }}
                    {{sprintf("%'.02d\n", $data['No'])}}
                    @if($data['aorb'] == '0')
                        a
                    @elseif($data['aorb'] == '1')
                        b
                    @elseif($data['aorb'] == '2')
                        ab
                    @endif
                </TD>
                <TD>
                    @if(!empty($data['url']))
                        <a href="{{ url($data['url']) }}" target="blank">
                            {{ $data['circle'] }}
                        </a>
                    @else
                        {{ $data['circle'] }}
                    @endif
                </TD>
                <TD>{{ $data['creater'] }}</TD>
                <TD>
                    @if(!empty($data['twitter']))
                        <a href={{$data['twitter']}} TARGET="_blank"><img class="logo" src="{{ asset('image/aaa.png') }}" alt="logo" width="25" height="25"></a>
                    @endif
                    @if(!empty($data['facebook']))
                        <a href={{$data['facebook']}} TARGET="_blank"><img class="logo" src="{{ asset('image/facebook.png') }}" alt="logo" width="22" height="22"></a>
                    @endif
                    @if(!empty($data['pixiv']))
                        <a href={{$data['pixiv']}} TARGET="_blank"><img class="logo" src="{{ asset('image/pixiv.png') }}" alt="logo" width="22" height="22"></a>
                    @endif
                </TD>
                <TD>
                    @if(!empty($data['item1']))
                        ①{{ $data['item1'] }}
                        @if(!empty($data['item2']))
                            <br> ②{{ $data['item2'] }}
                            @if(!empty($data['item3']))
                                <br> ③{{ $data['item3'] }}
                                @if(!empty($data['item4']))
                                    <br> ④{{ $data['item4'] }}
                                    @if(!empty($data['item5']))
                                        <br> ⑤{{ $data['item5'] }}
                                        @if(!empty($data['item6']))
                                            <br> ⑥{{ $data['item6'] }}
                                            @if(!empty($data['item7']))
                                                <br> ⑦{{ $data['item7'] }}
                                            @endif
                                        @endif
                                    @endif
                                 @endif
                            @endif
                        @endif
                    @endif
                    @if(!empty($data['item_count8']))
                        <br> ⑪既刊ALL
                    @endif
                    @if(!empty($data['item_count9']))
                        <br> ⑩新刊ALL
                    @endif
                    @if(!empty($data['item_count10']))
                        <br> ⑫ALL(グッズ込)
                    @endif
                </TD>
                <TD>
                    @if(!empty($data['item_count1']))
                       ①×{{ $data['item_count1'] }}
                    @endif
                    @if(!empty($data['item_count2']))
                        <br>②×{{ $data['item_count2'] }}
                    @endif
                    @if(!empty($data['item_count3']))
                        <br>③×{{ $data['item_count3'] }}
                    @endif
                    @if(!empty($data['item_count4']))
                        <br>④×{{ $data['item_count4'] }}
                    @endif
                    @if(!empty($data['item_count5']))
                        <br>⑤×{{ $data['item_count5'] }}
                    @endif
                    @if(!empty($data['item_count6']))
                        <br>⑥×{{ $data['item_count6'] }}
                    @endif
                    @if(!empty($data['item_count7']))
                        <br>⑦×{{ $data['item_count7'] }}
                    @endif
                    @if(!empty($data['item_count8']))
                        <br>⑪×{{ $data['item_count8'] }}
                    @endif
                    @if(!empty($data['item_count9']))
                        <br>⑩×{{ $data['item_count9'] }}
                    @endif
                    @if(!empty($data['item_count10']))
                        <br>⑫×{{ $data['item_count10'] }}
                    @endif
                </TD>
                <TD>
                     @if(!empty($data['buy_member1']))
                         ①{{ $data['buy_member1'] }}
                     @endif
                     @if(!empty($data['buy_member2']))
                         <br>②{{ $data['buy_member2'] }}
                     @endif
                     @if(!empty($data['buy_member3']))
                         <br>③{{ $data['buy_member3'] }}
                     @endif
                     @if(!empty($data['buy_member4']))
                         <br>④{{ $data['buy_member4'] }}
                     @endif
                     @if(!empty($data['buy_member5']))
                         <br>⑤{{ $data['buy_member5'] }}
                     @endif
                     @if(!empty($data['buy_member6']))
                         <br>⑥{{ $data['buy_member6'] }}
                     @endif
                     @if(!empty($data['buy_member7']))
                         <br>⑦{{ $data['buy_member7'] }}
                     @endif
                     @if(!empty($data['buy_member8']))
                         <br>⑪{{ $data['buy_member8'] }}
                     @endif
                     @if(!empty($data['buy_member9']))
                         <br>⑩{{ $data['buy_member9'] }}
                     @endif
                     @if(!empty($data['buy_member10']))
                         <br>⑫{{ $data['buy_member10'] }}
                     @endif
                </TD>
                <TD width="200">
                    {{ $data['note'] }}
                </TD>
                <TD>
                    <input type="button" value="詳細" onclick="location.href='http://192.168.11.54:8000/items/{{$data['id']}}/edit'">
                </TD>
            </TR>
        @endforeach
        @else
            <td colspan="11" width="1200" align="center">該当がありません</td>
        @endif
    </TABLE>
    <br>
    @if(isset($_GET['days']))
        {!! $items->appends(['days' => $_GET['days']])->render() !!}
    @else
        {!! $items->render() !!}
    @endif
    
    <input type="button" value="一覧に戻る" onclick="location.href='http://192.168.11.54:8000/items'">
@endsection
