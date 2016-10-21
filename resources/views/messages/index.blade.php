<h1 align="center">MESSAGE 留言版</h1>
<hr color="black" width="1400" size="4px">


<div>
@foreach ($mess as $message)
    <div>
        <div>
            <span style="margin:0px 0px 2px 115px">
                <img src="{{ asset('img/head.jpg') }}" width="100px" height="100px" >
            </span>

            <span width="20px">
                <a href="{{ url('messages/'.$message->id) }}" style="vertical-align:text-top;">
                    <div>{{$message->guestName }}</div>
                </a>
    
                <a href="{{ url('messages/'.$message->id) }}" >
                    <div>{{$message->guestContent }}</div>
                </a>
            </span>

            <span style="float:right;">
                <form action="{{ url('messages/'.$message->id.'/edit') }}" method="GET">
                    <button type="submit" id="edit-message-{{ $message->id }}">編輯</button>
                </form>

                <form action="{{ url('message/'.$message->id) }}" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}

                    <button type="submit" id="delete-message-{{ $message->id }}">刪除</button>
                </form>
            </span>
        </div>
        <div>
            <hr color="black" width="1300">
        </div>    
    </div>    
@endforeach
</div>

<div>
<form action="{{ url('message') }}" method="POST" style="columns:150px 2;margin:30px 250px 50px 250px;background-color: #4d4d4d;" >
    {{ csrf_field() }}
    <div>
    <img src="{{ asset('img/Writing.png') }}" width="550px" height="350px" >
    </div>
    <br><br>
    <input type="text" name="guestName" style="width:450px; height:25px; background-color:#666666; margin:0px 20px 0px 20px; padding:0px 0px 0px 5px;border:0;color:#FFFFFF"  placeholder="你的暱稱..." color="white" >
    <br><br>
    <textarea name="guestContent" cols="60" rows="13" style="background-color:#666666;color:#FFFFFF;border:0;padding:0px 0px 0px 5px;margin:0px 25px 0px 20px;" placeholder="留個言吧..."></textarea>
    
    
    <br><br>
    <div style="margin:0px 0px 0px 385px;">
        <button type="reset">重填</button>    
        <button type="submit">送出</button>
    </div>
</form>
</div>    