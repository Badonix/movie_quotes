<div class='w-full '>
    <img class='w-full rounded-t-md' src="{{$quote->image asset('/storage/' . $quote->image_url)}}"/>
    <div class='bg-white py-5 px-2 rounded-b-md'>
        <p>"{{$quote->body}}"</p>
    </div>
</div>