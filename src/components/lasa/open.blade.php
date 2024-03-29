<div>
    <style>
        .fmt_box{
            margin: 10px 20px;
            padding: 10px 20px;
            border: 4px solid #eeeeee;
            background: #fff;
            box-shadow: 2px 4px 8px #b1b1b1;
        }
        .fmt_headline{
            font-size: 20px;
            margin:10px 0;
        }
        .fmt_label{
            font-size: 14px;
        }
        .fmt_input{
            padding:4px 10px;
            border:1px solid #707070;
            border-radius: 4px;
            display: block;
            font-size: 16px;
        }
        .fmt_sub_btn{
            padding:6px 20px;
            margin:10px 0;
            border-radius: 8px;
            background:#0047d4;
            color:#fff;
            border:none;
            letter-spacing: 1px;
            cursor: pointer;
        }
        .fmt_checkbox{
            width: 22px;
            height: 22px;
            display: block;
        }
        .fmt_flex{
            display: flex;
            margin: 10px 0;
        }
        #addOption{
            padding: 6px 20px;
            background: #049e04;
            color: #fff;
            cursor: pointer;
        }
    </style>
    <form action="{{route('fmt.lasa.store')}}" method="post" class="fmt_box" enctype="multipart/form-data">
        <div class="fmt_headline">Add a "Listen to Audio - read the meaning as text - sing/speak along "</div>
        <input type="integer" name="problem_set_id" value="{{$pbs72 ?? ''}}" hidden style="border:1px solid #000000;">
        <input type="integer" name="format_type_id" value="{{$fmt72 ?? ''}}" hidden style="border:1px solid #000000;">
        <div>
            <label class="fmt_label" for="">Question</label>
            <textarea class="fmt_input" type="text" name="question" style="width: 100%;" placeholder="Question" style="width: 100%" required></textarea>
        </div>
        <div>
            <label class="fmt_label" for="">Question audio</label>
            <input class="fmt_input" type="file" accept="audio/*" name="question_media" placeholder="Question" style="width: 100%" required>
        </div>
        <div>
            <label class="fmt_label" for="">Comment</label>
            <textarea class="fmt_input" type="text" name="hint" placeholder="comment" style="width: 100%;"></textarea>
        </div>
        <div class="my-2" style="margin: 20px 0;">
            <label class="bloc" for="">Difficulty Level</label>
            @php $d_levels = DB::table('difficulty_levels')->get(); @endphp
            <select name="difficulty_level_id" id="" class="w-full my-2 px-2 py-2 border border-gray-500 rounded-lg">
                @foreach ($d_levels as $level)
                <option value="{{$level->id}}">{{$level->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" class="fmt_sub_btn" value="Submit">
        </div>
    </form>
    {{-- <button id="addOption">Add option</button> --}}
</div>
{{-- <script>
    var addOption = document.getElementById('addOption');
</script> --}}

{{--  --}}
<form action="{{route('fmt.lasa.csv')}}" method="POST" enctype='multipart/form-data' style="margin:20px 40px;">
    @csrf
    <input type="integer" name="problem_set_id" value="{{$pbs72 ?? ''}}" hidden style="border:1px solid #000000;">
    <input type="integer" name="format_type_id" value="{{$fmt72 ?? ''}}" hidden style="border:1px solid #000000;">
    <div style="display:block; padding:10px;">
        <div style="font-size:12px;">CSV</div>
        <input style="display:block;" type="file" name="file" >
    </div>
    <div style="display:block; padding:10px;">
        <div style="font-size:12px;">Audio</div>
        <input style="display:block;" type="file" name="audio[]" multiple accept="audio/*" placeholder="audio" required>
    </div>
    <button type="submit" style="display: inline-block; margin:10px; padding:4px 20px; background:green; color:#fff; text-transform:uppercase; border-radius:4px;">submit</button>
</form>
{{--  --}}