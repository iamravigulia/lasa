<style>
    table {
        background: #fff;
        width: 100%;
        border: 0;
    }
    th {}
    td {
        border-top: 1px solid #999;
        padding: 5px;
    }
    tr:nth-child(odd) {
        background: #ddd;
    }
</style>
<table>
    <thead>
        <th>#</th>
        <th>Question</th>
        <th>Media</th>
        <th>Created at</th>
        <th>Updated at</th>
    </thead>
    <tbody>
        @php
        $fmt_rswa_ques = DB::table('fmt_lasa_ques')->get();
        @endphp
        @foreach ($fmt_rswa_ques as $que)
        <tr>
            <td>{{$que->id}}</td>
            <td>{{$que->question}}</td>
            <td>
                @php $que_media = DB::table('media')->where('id', $que->media_id)->first() @endphp
                <audio controls="controls" src="{{url('/')}}/storage/{{$que_media->url}}"></audio>
            </td>
        
            <td>{{date('F d, Y',strtotime($que->created_at))}}</td>
            <td>{{date('F d, Y',strtotime($que->updated_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
