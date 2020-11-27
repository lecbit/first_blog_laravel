<p>Create</p>

<form method="post" action="/blog/public/projects">
{{csrf_field()}}
<div>
    <input type="text" name="title" placeholder="title">
</div>
<div>
    <textarea type="text" name="description" placeholder="description"></textarea>
</div>
<div>
    <button type="submit">Submit</button>
</div>
</form>
</form>