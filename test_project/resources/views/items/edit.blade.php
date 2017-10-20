@extends('layouts.app2')
 
@section('content')
    <h1>登録情報変更</h1>
 
    <hr/>
    
    @include('errors.form_errors')
    
    
    {!! Form::model($item, ['method' => 'PATCH', 'url' => ['items']]) !!}
    
         
        <table>
            <input type="hidden" name="id" id="id" value={{$item->id}}>
            <tr>
                <td width="40">
                    <div class="form-group">
                        {!! Form::label('days', '日程:') !!}
                        {{ Form::select('days',array('0'=>'金','1'=>'土', '2'=>'日')) }}
                     </div>
                </td>
                <td width="40">
                    <div class="form-group">
                        {!! Form::label('area', '館:') !!}
                        {{ Form::select('area',array('0'=>'東','1'=>'西')) }}
                     </div>
                </td>
                <td  width="40">
                    <div class="form-group">
                        {!! Form::label('column', '配置:') !!}
                        {{ Form::select('column',array('あ'=>'あ','い'=>'い','う'=>'う','え'=>'え','お'=>'お',
                                                       'か'=>'か','き'=>'き','く'=>'く','け'=>'け','こ'=>'こ',
                                                       'さ'=>'さ','し'=>'し','す'=>'す','せ'=>'せ','そ'=>'そ',
                                                       'た'=>'た','ち'=>'ち','つ'=>'つ','て'=>'て','と'=>'と',
                                                       'な'=>'な','に'=>'に','ぬ'=>'ぬ','ね'=>'ね','の'=>'の',
                                                       'は'=>'は','ひ'=>'ひ','ふ'=>'ふ','へ'=>'へ','ほ'=>'ほ',
                                                       'ま'=>'ま','み'=>'み','む'=>'む','め'=>'め','も'=>'も',
                                                       'や'=>'や','ゆ'=>'ゆ','よ'=>'よ',
                                                       'ら'=>'ら','り'=>'り','る'=>'る','れ'=>'れ','ろ'=>'ろ',
                                                       'わ'=>'わ','を'=>'を','ん'=>'ん',
                                                       'ア'=>'ア','イ'=>'イ','ウ'=>'ウ','エ'=>'エ','オ'=>'オ',
                                                       'カ'=>'カ','キ'=>'キ','ク'=>'ク','ケ'=>'ケ','コ'=>'コ',
                                                       'サ'=>'サ','シ'=>'シ','ス'=>'ス','セ'=>'セ','ソ'=>'ソ',
                                                       'タ'=>'タ','チ'=>'チ','ツ'=>'ツ','テ'=>'テ','ト'=>'ト',
                                                       'ナ'=>'ナ','ニ'=>'ニ','ヌ'=>'ヌ','ネ'=>'ネ','ノ'=>'ノ',
                                                       'ハ'=>'ハ','ヒ'=>'ヒ','フ'=>'フ','へ'=>'へ','ホ'=>'ホ',
                                                       'マ'=>'マ','ミ'=>'ミ','ム'=>'ム','メ'=>'メ','モ'=>'モ',
                                                       'ヤ'=>'ヤ','ユ'=>'ユ','ヨ'=>'ヨ',
                                                       'ラ'=>'ラ','リ'=>'リ','ル'=>'ル','レ'=>'レ','ロ'=>'ロ',
                                                       'ワ'=>'ワ','ヲ'=>'ヲ','ン'=>'ン',
                                                       'A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F',
                                                       'G'=>'G','H'=>'H','I'=>'I','J'=>'J','K'=>'K','L'=>'L',
                                                       'M'=>'M','N'=>'N','O'=>'O','P'=>'P','Q'=>'Q','R'=>'R',
                                                       'S'=>'S','T'=>'T','U'=>'U','V'=>'V','W'=>'W','X'=>'X',
                                                       'Y'=>'Y','Z'=>'Z'
                                                        )) }}
                     </div>
                </td>
                <td width="40">
                    <div class="form-group">
                        {!! Form::label('No', 'No:') !!}
                        {{ Form::select('No',array('1'=>'01','2'=>'02','3'=>'03','4'=>'04','5'=>'05',
                                                   '6'=>'06','7'=>'07','8'=>'08','9'=>'09','10'=>'10',
                                                   '11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15',
                                                   '16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20',
                                                   '21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25',
                                                   '26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30',
                                                   '31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35',
                                                   '36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40',
                                                   '41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45',
                                                   '46'=>'46','47'=>'47','48'=>'48','49'=>'49','50'=>'50',
                                                   '51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55',
                                                   '56'=>'56','57'=>'57','58'=>'58','59'=>'59','60'=>'60',
                                                   '61'=>'61','62'=>'62','63'=>'63','64'=>'64','65'=>'65',
                                                   '66'=>'66','67'=>'67','68'=>'68','69'=>'69','70'=>'70',
                                                   '71'=>'71','72'=>'72','73'=>'73','74'=>'74','75'=>'75',
                                                   '76'=>'76','77'=>'77','78'=>'78','79'=>'79','80'=>'80',
                                                   '81'=>'81','82'=>'82','83'=>'83','84'=>'84','85'=>'85',
                                                   '86'=>'86','87'=>'87','88'=>'88','89'=>'89','90'=>'90',
                                                   '91'=>'91','92'=>'92','93'=>'93','94'=>'94','95'=>'95',
                                                   '96'=>'96','97'=>'97','98'=>'98','99'=>'99'
                                        )) }}
                    </div>
                 </td>
                 <td width="40">
                     <div class="form-group">
                        {!! Form::label('aorb', '') !!}
                        {{ Form::select('aorb',array('0'=>'a','1'=>'b','2'=>'ab')) }}
                     </div>
                 </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('circle', 'サークル名:') !!}
                        {!! Form::text('circle', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('creater', '作者:') !!}
                        {!! Form::text('creater', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('url', 'URL:') !!}
                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('twitter', 'Twitter:') !!}
                        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('facebook', 'Facebook:') !!}
                        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('pixiv', 'pixiv:') !!}
                        {!! Form::text('pixiv', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
            <tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item1', '販売物1:') !!}
                        {!! Form::text('item1', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count1', '購入数:') !!}
                        {!! Form::text('item_count1', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member1', '購入希望者:') !!}
                        {!! Form::text('buy_member1', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item2', '販売物2:') !!}
                        {!! Form::text('item2', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count2', '購入数:') !!}
                        {!! Form::text('item_count2', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member2', '購入希望者:') !!}
                        {!! Form::text('buy_member2', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item3', '販売物3:') !!}
                        {!! Form::text('item3', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count3', '購入数:') !!}
                        {!! Form::text('item_count3', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member3', '購入希望者:') !!}
                        {!! Form::text('buy_member3', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item4', '販売物4:') !!}
                        {!! Form::text('item4', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count4', '購入数:') !!}
                        {!! Form::text('item_count4', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member4', '購入希望者:') !!}
                        {!! Form::text('buy_member4', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item5', '販売物5:') !!}
                        {!! Form::text('item5', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count5', '購入数:') !!}
                        {!! Form::text('item_count5', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member5', '購入希望者:') !!}
                        {!! Form::text('buy_member5', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item6', '販売物6:') !!}
                        {!! Form::text('item6', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count6', '購入数:') !!}
                        {!! Form::text('item_count6', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member6', '購入希望者:') !!}
                        {!! Form::text('buy_member6', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item7', '販売物7:') !!}
                        {!! Form::text('item7', null, ['class' => 'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count7', '購入数:') !!}
                        {!! Form::text('item_count7', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member7', '購入希望者:') !!}
                        {!! Form::text('buy_member7', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>{!! Form::label('item8', '既刊全て:') !!}</tr>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count8', '購入数:') !!}
                        {!! Form::text('item_count8', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member8', '購入希望者:') !!}
                        {!! Form::text('buy_member8', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
       
       <table>
            <tr> {!! Form::label('item10', '新刊全て:') !!}</tr>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count9', '購入数:') !!}
                        {!! Form::text('item_count9', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member9', '購入希望者:') !!}
                        {!! Form::text('buy_member9', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
        
        <table>
            <tr>{!! Form::label('item10', '新刊グッズ全て:') !!}</tr>
            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('item_count10', '購入数:') !!}
                        {!! Form::text('item_count10', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
               <td>
                    <div class="form-group">
                        {!! Form::label('buy_member10', '購入希望者:') !!}
                        {!! Form::text('buy_member10', null, ['class' => 'form-control']) !!}
                    </div>
               </td>
            </tr>
        </table>
       
        <div class="form-group">
            {!! Form::label('note', '備考:') !!}
            {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
        </div>
        <br>
        
        <div class="form-group">
            {!! Form::label('delflg', '削除:') !!}
            {!! Form::checkbox('delflg', null, false); !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('登録情報変更', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection
