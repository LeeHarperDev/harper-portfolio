<form action="/component/text" method="POST" class="flex flex-col items-center space-y-6 font-normal" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="name" id="name" value="{{ $anchor ?? null }}" class="border rounded-md block">
    <label for="title">
        Section Title:
        <input type="text" name="title" id="title" class="border rounded-md block p-1.5" placeholder="Section Name">
    </label>
    <label for="body">
        <trix-modified input-id="body" input-name="body" placeholder="A summary of this section"></trix-modified>
    </label>
    <label for="image">
        Section Image:
        <input type="file" name="image" id="image" class="border rounded-md block p-1.5">
    </label>
    <label for="img_alt">
        Image Description:
        <textarea cols="50" rows="5" id="img_alt" name="img_alt" class="border rounded-md block p-1.5" placeholder="img_alt">
            
        </textarea>
    </label>
    <button type="submit" class="border border-purple-800 rounded-lg p-3 bg-purple-300">
        Submit
    </button>
</form>