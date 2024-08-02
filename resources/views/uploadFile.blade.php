<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>Upload File</h1>

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" />
        <button type="submit">Upload file</button>
    </form>
</div>
